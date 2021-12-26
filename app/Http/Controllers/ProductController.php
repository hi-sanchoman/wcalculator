<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use DB;
use Response;
use App\Models\Product;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = Product::with(['category'])->get();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();
        // dd($input);

        // start transaction
        DB::beginTransaction();

        // upload photo
        if ($request->hasFile('img_1'))
        {
            $request->validate([
                'img_1' => 'required|image|mimes:jpeg,jpg,png,webp|max:1024',
            ]);

            $photoName = time() . '1.' . $request->img_1->extension();
            // dd($photoName);
            $res = $request->img_1->move(public_path('img'), $photoName);

            if ($res == false) {
                // if error
                DB::rollBack();
                Flash::error('Ошибка загрузки изображения 1');
                return back();
            }

            $input['img_1'] = 'img/' . $photoName;
        }

        if ($request->hasFile('img_2'))
        {
            $request->validate([
                'img_2' => 'required|image|mimes:jpeg,jpg,png,webp|max:1024',
            ]);

            $photoName2 = time() . '2.' . $request->img_2->extension();
            // dd($photoName2);
            $res = $request->img_2->move(public_path('img'), $photoName2);

            if ($res == false) {
                // if error
                DB::rollBack();
                Flash::error('Ошибка загрузки изображения 1');
                return back();
            }

            $input['img_2'] = 'img/' . $photoName2;
        }
        // dd($input);

        $product = $this->productRepository->create($input);
            
        // commit transaction
        DB::commit();


        Flash::success(__('messages.saved', ['model' => __('models/products.singular')]));

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/products.singular')]));

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/products.singular')]));

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/products.singular')]));

            return redirect(route('products.index'));
        }

        // start transaction
        DB::beginTransaction();

        $input = $request->all();
        // dd($input);
        
        // upload photo
        if ($request->hasFile('img_1')) {
            $request->validate([
                'img_1' => 'required|image|mimes:jpeg,jpg,png,webp|max:1024'
            ]);
    
            $photoName = time() . '.' . $request->img_1->extension();
            $res = $request->img_1->move(public_path('img'), $photoName);
    
            if ($res == false) {
                // if error
                DB::rollBack();
                Flash::error('Ошибка загрузки изображения');
                return back();
            }
    
            $input['img_1'] = 'img/' . $photoName;
        } else {
            $input['img_1'] = $product->img_1;
        }

        if ($request->hasFile('img_2')) {
            $request->validate([
                'img_2' => 'required|image|mimes:jpeg,jpg,png,webp|max:1024'
            ]);
    
            $photoName = time() . '.' . $request->img_2->extension();
            $res = $request->img_2->move(public_path('img'), $photoName);
    
            if ($res == false) {
                // if error
                DB::rollBack();
                Flash::error('Ошибка загрузки изображения');
                return back();
            }
    
            $input['img_2'] = 'img/' . $photoName;
        } else {
            $input['img_2'] = $product->img_2;
        }
        
        $product = $this->productRepository->update($input, $id);
            
        // commit transaction
        DB::commit();


        Flash::success(__('messages.updated', ['model' => __('models/products.singular')]));

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/products.singular')]));

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/products.singular')]));

        return redirect(route('products.index'));
    }
}
