<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSub_AreaRequest;
use App\Http\Requests\UpdateSub_AreaRequest;
use App\Repositories\Sub_AreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Area;
use App\Models\Unidad;
use App\Models\Sub_Area;



class Sub_AreaController extends AppBaseController
{
    public function getsubarea(Request $request)
    {
        if ($request->ajax()) {
            $careers = Sub_Area::where('area_id', $request->faculty_id)->get();
            foreach ($careers as $career) {
                $careersArray[$career->id] = $career->nombre;
            }
            return response()->json($careersArray);
        }
    }
    /** @var  Sub_AreaRepository */
    private $subAreaRepository;

    public function __construct(Sub_AreaRepository $subAreaRepo)
    {
        $this->subAreaRepository = $subAreaRepo;
        $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);
    }

    /**
     * Display a listing of the Sub_Area.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subAreas = $this->subAreaRepository->all();

        return view('sub__areas.index')
            ->with('subAreas', $subAreas);
    }
    public function indexx($id)
    {
        $area = Area::findOrfail($id);
        $unidad = Unidad::findOrfail($area->unidad_id);
        $subAreas = Sub_Area::where('area_id', $id)->get();
        return view('sub__areas.index')
            ->with('subAreas', $subAreas)
            ->with('area', $area)
            ->with('unidad', $unidad);
    }

    /**
     * Show the form for creating a new Sub_Area.
     *
     * @return Response
     */
    public function create($id)
    {
        return view('sub__areas.create')->with('area_id',$id);
    }

    /**
     * Store a newly created Sub_Area in storage.
     *
     * @param CreateSub_AreaRequest $request
     *
     * @return Response
     */
    public function store(CreateSub_AreaRequest $request)
    {
        $input = $request->all();

        $subArea = $this->subAreaRepository->create($input);

        Flash::success('SUB AREA GUARDADO CORRECTAMENTE.');

        return redirect(route('subAreass.indexx', [$subArea->area_id]));

    }

    /**
     * Display the specified Sub_Area.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subArea = $this->subAreaRepository->find($id);

        if (empty($subArea)) {
            Flash::error('Sub  Area not found');

            return redirect(route('subAreas.index'));
        }

        return view('sub__areas.show')->with('subArea', $subArea);
    }

    /**
     * Show the form for editing the specified Sub_Area.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subArea = $this->subAreaRepository->find($id);

        if (empty($subArea)) {
            Flash::error('Sub  Area not found');

            return redirect(route('subAreas.index'));
        }

        return view('sub__areas.edit')->with('subArea', $subArea);
    }

    /**
     * Update the specified Sub_Area in storage.
     *
     * @param int $id
     * @param UpdateSub_AreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSub_AreaRequest $request)
    {
        $subArea = $this->subAreaRepository->find($id);

        if (empty($subArea)) {
            Flash::error('Sub  Area not found');

            return redirect(route('subAreas.index'));
        }

        $subArea = $this->subAreaRepository->update($request->all(), $id);

        Flash::success('SUB AREA ACTUALIZADO CORRECTAMENTE.');

        return redirect(route('subAreass.indexx', [$subArea->area_id]));
    }

    /**
     * Remove the specified Sub_Area from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subArea = $this->subAreaRepository->find($id);

        if (empty($subArea)) {
            Flash::error('Sub  Area not found');

            return redirect(route('subAreas.index'));
        }

        $this->subAreaRepository->delete($id);

        Flash::success('SUB AREA BORRADO CORRECTAMENTE.');

        return redirect(route('subAreas.index', [$subArea->area_id]));
    }
}
