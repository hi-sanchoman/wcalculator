<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIncrementRequest;
use App\Http\Requests\UpdateIncrementRequest;
use App\Repositories\IncrementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Increment;

class IncrementController extends AppBaseController
{
    /** @var  IncrementRepository */
    private $incrementRepository;

    public function __construct(IncrementRepository $incrementRepo)
    {
        $this->incrementRepository = $incrementRepo;
    }

    /**
     * Display a listing of the Increment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $increments = Increment::with(['product'])->get();

        return view('increments.index')
            ->with('increments', $increments);
    }

    /**
     * Show the form for creating a new Increment.
     *
     * @return Response
     */
    public function create()
    {
        return view('increments.create');
    }

    /**
     * Store a newly created Increment in storage.
     *
     * @param CreateIncrementRequest $request
     *
     * @return Response
     */
    public function store(CreateIncrementRequest $request)
    {
        $input = $request->all();

        $increment = $this->incrementRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/increments.singular')]));

        return redirect(route('increments.index'));
    }

    /**
     * Display the specified Increment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $increment = $this->incrementRepository->find($id);

        if (empty($increment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/increments.singular')]));

            return redirect(route('increments.index'));
        }

        return view('increments.show')->with('increment', $increment);
    }

    /**
     * Show the form for editing the specified Increment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $increment = $this->incrementRepository->find($id);

        if (empty($increment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/increments.singular')]));

            return redirect(route('increments.index'));
        }

        return view('increments.edit')->with('increment', $increment);
    }

    /**
     * Update the specified Increment in storage.
     *
     * @param int $id
     * @param UpdateIncrementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIncrementRequest $request)
    {
        $increment = $this->incrementRepository->find($id);

        if (empty($increment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/increments.singular')]));

            return redirect(route('increments.index'));
        }

        $increment = $this->incrementRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/increments.singular')]));

        return redirect(route('increments.index'));
    }

    /**
     * Remove the specified Increment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $increment = $this->incrementRepository->find($id);

        if (empty($increment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/increments.singular')]));

            return redirect(route('increments.index'));
        }

        $this->incrementRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/increments.singular')]));

        return redirect(route('increments.index'));
    }
}
