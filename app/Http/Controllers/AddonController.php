<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAddonRequest;
use App\Http\Requests\UpdateAddonRequest;
use App\Repositories\AddonRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Addon;

class AddonController extends AppBaseController
{
    /** @var  AddonRepository */
    private $addonRepository;

    public function __construct(AddonRepository $addonRepo)
    {
        $this->addonRepository = $addonRepo;
    }

    /**
     * Display a listing of the Addon.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $addons = Addon::with(['category'])->get();

        return view('addons.index')
            ->with('addons', $addons);
    }

    /**
     * Show the form for creating a new Addon.
     *
     * @return Response
     */
    public function create()
    {
        return view('addons.create');
    }

    /**
     * Store a newly created Addon in storage.
     *
     * @param CreateAddonRequest $request
     *
     * @return Response
     */
    public function store(CreateAddonRequest $request)
    {
        $input = $request->all();

        $addon = $this->addonRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/addons.singular')]));

        return redirect(route('addons.index'));
    }

    /**
     * Display the specified Addon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $addon = $this->addonRepository->find($id);

        if (empty($addon)) {
            Flash::error(__('messages.not_found', ['model' => __('models/addons.singular')]));

            return redirect(route('addons.index'));
        }

        return view('addons.show')->with('addon', $addon);
    }

    /**
     * Show the form for editing the specified Addon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $addon = $this->addonRepository->find($id);

        if (empty($addon)) {
            Flash::error(__('messages.not_found', ['model' => __('models/addons.singular')]));

            return redirect(route('addons.index'));
        }

        return view('addons.edit')->with('addon', $addon);
    }

    /**
     * Update the specified Addon in storage.
     *
     * @param int $id
     * @param UpdateAddonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAddonRequest $request)
    {
        $addon = $this->addonRepository->find($id);

        if (empty($addon)) {
            Flash::error(__('messages.not_found', ['model' => __('models/addons.singular')]));

            return redirect(route('addons.index'));
        }

        $addon = $this->addonRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/addons.singular')]));

        return redirect(route('addons.index'));
    }

    /**
     * Remove the specified Addon from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $addon = $this->addonRepository->find($id);

        if (empty($addon)) {
            Flash::error(__('messages.not_found', ['model' => __('models/addons.singular')]));

            return redirect(route('addons.index'));
        }

        $this->addonRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/addons.singular')]));

        return redirect(route('addons.index'));
    }
}
