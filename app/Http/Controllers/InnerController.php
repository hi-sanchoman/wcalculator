<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInnerRequest;
use App\Http\Requests\UpdateInnerRequest;
use App\Repositories\InnerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Inner;
use Flash;
use Response;

class InnerController extends AppBaseController
{
    /** @var  InnerRepository */
    private $innerRepository;

    public function __construct(InnerRepository $innerRepo)
    {
        $this->innerRepository = $innerRepo;
    }

    /**
     * Display a listing of the Inner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request, $productId)
    {
        $product = Product::with('inners')->findOrFail($productId);

        return view('inners.index', compact('product'));
    }

    /**
     * Show the form for creating a new Inner.
     *
     * @return Response
     */
    public function create(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        return view('inners.create', compact('product'));
    }

    /**
     * Store a newly created Inner in storage.
     *
     * @param CreateInnerRequest $request
     *
     * @return Response
     */
    public function store(CreateInnerRequest $request)
    {
        $input = $request->all();

        $inner = $this->innerRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/inners.singular')]));

        return redirect(route('products.inners.index', [$inner->product_id]));
    }

    /**
     * Display the specified Inner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inner = $this->innerRepository->find($id);

        if (empty($inner)) {
            Flash::error(__('messages.not_found', ['model' => __('models/inners.singular')]));

            return redirect(route('inners.index'));
        }

        return view('inners.show')->with('inner', $inner);
    }

    /**
     * Show the form for editing the specified Inner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($productId, $id)
    {
        $inner = Inner::with('product')->findOrFail($id);
        $product = $inner->product;

        if (empty($inner)) {
            Flash::error(__('messages.not_found', ['model' => __('models/inners.singular')]));

            return redirect(route('products.inners.index', [$productId]));
        }

        return view('inners.edit', compact('product', 'inner'));
    }

    /**
     * Update the specified Inner in storage.
     *
     * @param int $id
     * @param UpdateInnerRequest $request
     *
     * @return Response
     */
    public function update($productId, $id, UpdateInnerRequest $request)
    {
        $inner = $this->innerRepository->find($id);

        if (empty($inner)) {
            Flash::error(__('messages.not_found', ['model' => __('models/inners.singular')]));

            return redirect(route('products.inners.index', [$productId]));
        }

        $inner = $this->innerRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/inners.singular')]));

        return redirect(route('products.inners.index', [$productId]));
    }

    /**
     * Remove the specified Inner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($productId, $id)
    {
        $inner = $this->innerRepository->find($id);

        if (empty($inner)) {
            Flash::error(__('messages.not_found', ['model' => __('models/inners.singular')]));

            return redirect(route('products.inners.index', [$productId]));
        }

        $this->innerRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/inners.singular')]));

        return redirect(route('products.inners.index', [$productId]));
    }
}
