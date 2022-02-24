<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductAdvantageRequest;
use App\Http\Requests\UpdateProductAdvantageRequest;
use App\Repositories\ProductAdvantageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\ProductAdvantage;
use App\Models\Product;

class ProductAdvantageController extends AppBaseController
{
    /** @var  ProductAdvantageRepository */
    private $productAdvantageRepository;

    public function __construct(ProductAdvantageRepository $productAdvantageRepo)
    {
        $this->productAdvantageRepository = $productAdvantageRepo;
    }

    /**
     * Display a listing of the ProductAdvantage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request, $id)
    {
        $product = Product::with('advantages')->findOrFail($id);

        return view('product_advantages.index', compact('product'));
    }

    /**
     * Show the form for creating a new ProductAdvantage.
     *
     * @return Response
     */
    public function create(Request $request, $id)
    {        
        $product = Product::with('advantages')->findOrFail($id);
        
        return view('product_advantages.create', compact('product'));
    }

    /**
     * Store a newly created ProductAdvantage in storage.
     *
     * @param CreateProductAdvantageRequest $request
     *
     * @return Response
     */
    public function store(CreateProductAdvantageRequest $request)
    {
        $input = $request->all();

        $productAdvantage = $this->productAdvantageRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/productAdvantages.singular')]));

        return redirect(route('products.advantages.index', [$input['product_id']]));
    }

    /**
     * Display the specified ProductAdvantage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productAdvantage = $this->productAdvantageRepository->find($id);

        if (empty($productAdvantage)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productAdvantages.singular')]));

            return redirect(route('productAdvantages.index'));
        }

        return view('product_advantages.show')->with('productAdvantage', $productAdvantage);
    }

    /**
     * Show the form for editing the specified ProductAdvantage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($productId, $id)
    {
        $productAdvantage = ProductAdvantage::with('product')->findOrFail($id);
        $product = $productAdvantage->product;

        if (empty($productAdvantage)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productAdvantages.singular')]));

            return redirect(route('products.advantages.index', [$productId]));
        }

        return view('product_advantages.edit', compact('product', 'productAdvantage'));
    }

    /**
     * Update the specified ProductAdvantage in storage.
     *
     * @param int $id
     * @param UpdateProductAdvantageRequest $request
     *
     * @return Response
     */
    public function update($productId, $id, UpdateProductAdvantageRequest $request)
    {
        $productAdvantage = $this->productAdvantageRepository->find($id);

        if (empty($productAdvantage)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productAdvantages.singular')]));

            return redirect(route('products.advantages.index', [$productId]));
        }

        $productAdvantage = $this->productAdvantageRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/productAdvantages.singular')]));

        return redirect(route('products.advantages.index', [$productId]));
    }

    /**
     * Remove the specified ProductAdvantage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($productId, $id)
    {
        $productAdvantage = $this->productAdvantageRepository->find($id);

        if (empty($productAdvantage)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productAdvantages.singular')]));

            return redirect(route('productAdvantages.index'));
        }

        $this->productAdvantageRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/productAdvantages.singular')]));

        return redirect(route('products.advantages.index', [$productId]));
    }
}
