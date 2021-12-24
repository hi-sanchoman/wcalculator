<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateManagerRequest;
use App\Http\Requests\UpdateManagerRequest;
use App\Repositories\ManagerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class ManagerController extends AppBaseController
{
    /** @var  ManagerRepository */
    private $managerRepository;

    public function __construct(ManagerRepository $managerRepo)
    {
        $this->managerRepository = $managerRepo;
    }

    /**
     * Display a listing of the Manager.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $managers = $this->managerRepository->all();

        return view('managers.index')
            ->with('managers', $managers);
    }

    /**
     * Show the form for creating a new Manager.
     *
     * @return Response
     */
    public function create()
    {
        return view('managers.create');
    }

    /**
     * Store a newly created Manager in storage.
     *
     * @param CreateManagerRequest $request
     *
     * @return Response
     */
    public function store(CreateManagerRequest $request)
    {
        $input = $request->all();

        // start transaction
        DB::beginTransaction();

        // upload photo
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,jpg,png,webp|max:1024'
        ]);

        $photoName = time() . '.' . $request->photo->extension();
        $res = $request->photo->move(public_path('img'), $photoName);

        if ($res == false) {
            // if error
            DB::rollBack();
            Flash::error('Ошибка загрузки изображения');
            return back();
        }

        $input['photo'] = 'img/' . $photoName;
        $manager = $this->managerRepository->create($input);
            
        // commit transaction
        DB::commit();

        Flash::success(__('messages.saved', ['model' => __('models/managers.singular')]));

        return redirect(route('managers.index'));
    }

    /**
     * Display the specified Manager.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $manager = $this->managerRepository->find($id);

        if (empty($manager)) {
            Flash::error(__('messages.not_found', ['model' => __('models/managers.singular')]));

            return redirect(route('managers.index'));
        }

        return view('managers.show')->with('manager', $manager);
    }

    /**
     * Show the form for editing the specified Manager.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $manager = $this->managerRepository->find($id);

        if (empty($manager)) {
            Flash::error(__('messages.not_found', ['model' => __('models/managers.singular')]));

            return redirect(route('managers.index'));
        }

        return view('managers.edit')->with('manager', $manager);
    }

    /**
     * Update the specified Manager in storage.
     *
     * @param int $id
     * @param UpdateManagerRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $manager = $this->managerRepository->find($id);

        if (empty($manager)) {
            Flash::error(__('messages.not_found', ['model' => __('models/managers.singular')]));

            return redirect(route('managers.index'));
        }

        // start transaction
        DB::beginTransaction();

        $input = $request->all();
        // dd($input);
        
        // upload photo
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,jpg,png,webp|max:1024'
            ]);
    
            $photoName = time() . '.' . $request->photo->extension();
            $res = $request->photo->move(public_path('img'), $photoName);
    
            if ($res == false) {
                // if error
                DB::rollBack();
                Flash::error('Ошибка загрузки изображения');
                return back();
            }
    
            $input['photo'] = 'img/' . $photoName;
        } else {
            $input['photo'] = $manager->photo;
        }
        
        $manager = $this->managerRepository->update($input, $id);
            
        // commit transaction
        DB::commit();

        Flash::success(__('messages.updated', ['model' => __('models/managers.singular')]));

        return redirect(route('managers.index'));
    }

    /**
     * Remove the specified Manager from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $manager = $this->managerRepository->find($id);

        if (empty($manager)) {
            Flash::error(__('messages.not_found', ['model' => __('models/managers.singular')]));

            return redirect(route('managers.index'));
        }

        $this->managerRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/managers.singular')]));

        return redirect(route('managers.index'));
    }
}
