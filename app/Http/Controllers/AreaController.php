<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAreaRequest;
use App\Http\Requests\UpdateAreaRequest;
use App\Repositories\AreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Unidad;
use App\Models\Area;

class AreaController extends AppBaseController
{

    public function byFoundation($id)
    {
        return Area::where('unidad_id', $id)->get();
    }

    public function getCareers(Request $request)
    {
        $careersArray = [];
        if ($request->ajax()) {
            $careers = Area::where('unidad_id', $request->faculty_id)->get();
            foreach ($careers as $career) {
                $careersArray[$career->id] = $career->nombre;
            }
            return response()->json($careersArray);
        }
    }
    /*public function getCareers(Request $request)
    {
        $areasArray = [];
        if ($request->ajax()) {
            $areas = Area::where('unidad_id', $request->unidad_id)->get();
            foreach ($areas as $areaa) {
                $areasArray[$areaa->id] = $areaa->nombre;
            }
            dd($areassArray);
            return response()->json($areassArray);
        }
    }*/
    /** @var  AreaRepository */
    private $areaRepository;

    public function __construct(AreaRepository $areaRepo)
    {
        $this->areaRepository = $areaRepo;
        $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);
    }
   
   
    /**
     * Display a listing of the Area.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $areas = $this->areaRepository->all();
        return view('areas.index')
            ->with('areas', $areas);
    }
    public function indexx($id)
    {
        
        $unidad = Unidad::findOrfail($id);
        $areas = Area::where('unidad_id', $id)->get();
        return view('areas.index')
            ->with('areas', $areas)
            ->with('unidad', $unidad);
    }

    /**
     * Show the form for creating a new Area.
     *
     * @return Response
     */
    public function create($id)
    {

        return view('areas.create')->with('unidad_id',$id);
    }

    /**
     * Store a newly created Area in storage.
     *
     * @param CreateAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateAreaRequest $request)
    {
        $input = $request->all();
            
        $area = $this->areaRepository->create($input);
        

        Flash::success('AREA GUARDADA CORRECTAMENTE.');

        return redirect(route('areass.indexx', [$area->unidad_id]));
    }

    /**
     * Display the specified Area.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $area = $this->areaRepository->find($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('areas.index'));
        }

        return view('areas.show')->with('area', $area);
    }

    /**
     * Show the form for editing the specified Area.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $area = $this->areaRepository->find($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('areas.index'));
        }

        return view('areas.edit')->with('area', $area);
    }

    /**
     * Update the specified Area in storage.
     *
     * @param int $id
     * @param UpdateAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreaRequest $request)
    {
        $area = $this->areaRepository->find($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('areas.index'));
        }

        $area = $this->areaRepository->update($request->all(), $id);

        Flash::success('AREA ACTUALIZADO CORRECTAMENTE.');
            
        return redirect(route('areass.indexx', [$area->unidad_id]));
    }

    /**
     * Remove the specified Area from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $area = $this->areaRepository->find($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('areas.index'));
        }

        $this->areaRepository->delete($id);

        Flash::success('AREA ELIMINADO CORRECTAMENTE.');

        return redirect(route('areass.indexx', [$area->unidad_id]));
    }
}
