<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Repositories\MaterialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Material;

class MaterialController extends AppBaseController
{
    /** @var  MaterialRepository */
    private $materialRepository;

    public function __construct(MaterialRepository $materialRepo)
    {
        $this->materialRepository = $materialRepo;
    }

    /**
     * Display a listing of the Material.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $materials = Material::with(['category'])->get();

        return view('materials.index')
            ->with('materials', $materials);
    }

    /**
     * Show the form for creating a new Material.
     *
     * @return Response
     */
    public function create()
    {
        return view('materials.create');
    }

    /**
     * Store a newly created Material in storage.
     *
     * @param CreateMaterialRequest $request
     *
     * @return Response
     */
    public function store(CreateMaterialRequest $request)
    {
        $input = $request->all();

        $material = $this->materialRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/materials.singular')]));

        return redirect(route('materials.index'));
    }

    /**
     * Display the specified Material.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $material = $this->materialRepository->find($id);

        if (empty($material)) {
            Flash::error(__('messages.not_found', ['model' => __('models/materials.singular')]));

            return redirect(route('materials.index'));
        }

        return view('materials.show')->with('material', $material);
    }

    /**
     * Show the form for editing the specified Material.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $material = $this->materialRepository->find($id);

        if (empty($material)) {
            Flash::error(__('messages.not_found', ['model' => __('models/materials.singular')]));

            return redirect(route('materials.index'));
        }

        return view('materials.edit')->with('material', $material);
    }

    /**
     * Update the specified Material in storage.
     *
     * @param int $id
     * @param UpdateMaterialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaterialRequest $request)
    {
        $material = $this->materialRepository->find($id);

        if (empty($material)) {
            Flash::error(__('messages.not_found', ['model' => __('models/materials.singular')]));

            return redirect(route('materials.index'));
        }

        $material = $this->materialRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/materials.singular')]));

        return redirect(route('materials.index'));
    }

    /**
     * Remove the specified Material from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $material = $this->materialRepository->find($id);

        if (empty($material)) {
            Flash::error(__('messages.not_found', ['model' => __('models/materials.singular')]));

            return redirect(route('materials.index'));
        }

        $this->materialRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/materials.singular')]));

        return redirect(route('materials.index'));
    }
}
