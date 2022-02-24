<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use App\Repositories\AttributeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Product;
use App\Models\Attribute;

class AttributeController extends AppBaseController
{
    /** @var  AttributeRepository */
    private $attributeRepository;

    public function __construct(AttributeRepository $attributeRepo)
    {
        $this->attributeRepository = $attributeRepo;
    }

    /**
     * Display a listing of the Attribute.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request, $productId)
    {
        $product = Product::with('attributes')->findOrFail($productId);

        return view('attributes.index', compact('product'));
    }

    /**
     * Show the form for creating a new Attribute.
     *
     * @return Response
     */
    public function create($productId)
    {
        $product = Product::findOrFail($productId);
        return view('attributes.create', compact('product'));
    }

    /**
     * Store a newly created Attribute in storage.
     *
     * @param CreateAttributeRequest $request
     *
     * @return Response
     */
    public function store($productId, CreateAttributeRequest $request)
    {
        $input = $request->all();

        $attribute = $this->attributeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/attributes.singular')]));

        return redirect(route('products.attributes.index', [$attribute->product_id]));
    }

    /**
     * Display the specified Attribute.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($productId, $id)
    {
        $attribute = $this->attributeRepository->find($id);

        if (empty($attribute)) {
            Flash::error(__('messages.not_found', ['model' => __('models/attributes.singular')]));

            return redirect(route('attributes.index'));
        }

        return view('attributes.show')->with('attribute', $attribute);
    }

    /**
     * Show the form for editing the specified Attribute.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($productId, $id)
    {
        $attribute = Attribute::with('product')->findOrFail($id);
        $product = $attribute->product;

        if (empty($attribute)) {
            Flash::error(__('messages.not_found', ['model' => __('models/attributes.singular')]));

            return redirect(route('products.attributes.index', [$productId]));
        }

        return view('attributes.edit', compact('attribute', 'product'));
    }

    /**
     * Update the specified Attribute in storage.
     *
     * @param int $id
     * @param UpdateAttributeRequest $request
     *
     * @return Response
     */
    public function update($productId, $id, UpdateAttributeRequest $request)
    {
        $attribute = $this->attributeRepository->find($id);

        if (empty($attribute)) {
            Flash::error(__('messages.not_found', ['model' => __('models/attributes.singular')]));

            return redirect(route('products.attributes.index', [$productId]));
        }

        $attribute = $this->attributeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/attributes.singular')]));

        return redirect(route('products.attributes.index', [$productId]));
    }

    /**
     * Remove the specified Attribute from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($productId, $id)
    {
        $attribute = $this->attributeRepository->find($id);

        if (empty($attribute)) {
            Flash::error(__('messages.not_found', ['model' => __('models/attributes.singular')]));

            return redirect(route('products.attributes.index', [$productId]));
        }

        $this->attributeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/attributes.singular')]));

        return redirect(route('products.attributes.index', [$productId]));
    }
}
