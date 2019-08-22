<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepersonafRequest;
use App\Http\Requests\UpdatepersonafRequest;
use App\Repositories\personafRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Personal;
use App\Models\Personaf;
use DB;
use App\Models\Unidad;
use App\Models\Area;
use App\Models\sub_area;
use App\Models\Usuario;


class personafController extends AppBaseController
{

    public function byFoundation($id)
    {
        return Area::where('unidad_id', $id)->get();
    }
    public function getsubareas($id)
    {
        return Sub_Area::where('area_id', $id)->get();
    }
    public function getareas_a($id,$d)
    {
        return Area::where('unidad_id', $d)->get();
    }
    public function getsubareas_a($id,$d)
    {
        return Sub_Area::where('area_id', $d)->get();
    }
    /** @var  personafRepository */
    private $personafRepository;

    public function __construct(personafRepository $personafRepo)
    {
        $this->personafRepository = $personafRepo;
        $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);
    }

    /**
     * Display a listing of the personaf.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /**$personal = Usuario::findorfail(1);


        dd($personal->sub_area->nombre);*/
        $personafs = Usuario::where('unidad_id','!=',null)->get();
        
        $unidad = Unidad::all(); 
        $area = Area::all();
        $sub_area = Sub_Area::all();

        

        return view('personafs.index')
            ->with('personafs', $personafs)
            ->with('unidad', $unidad)
            ->with('sub_area', $sub_area)
            ->with('area', $area);
    }

    /**
     * Show the form for creating a new personaf.
     *
     * @return Response
     */

    public function create()
    {
        $user = Usuario::where('estado',null)->get();
        $unidad = Unidad::all(); 
        $area = Area::all();
        $sub_area = Sub_Area::all();
        //dd($user);

        return view('personafs.crear')
        ->with('user', $user)
        ->with('unidad', $unidad)
        ->with('sub_area', $sub_area);
    }

    /**
     * Store a newly created personaf in storage.
     *
     * @param CreatepersonafRequest $request
     *
     * @return Response
     */
    public function store(CreatepersonafRequest $request)
    {
        $input = $request->all();
        

        $personaf = Personaf::create($input);

        Flash::success('Personaf saved successfully.');

        return redirect(route('personafs.index'));
    }

    /**
     * Display the specified personaf.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personaf = Personaf::find($id);

        if (empty($personaf)) {
            Flash::error('Personaf not found');

            return redirect(route('personafs.index'));
        }

        return view('personafs.show')->with('personaf', $personaf);
    }

    /**
     * Show the form for editing the specified personaf.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaf = Usuario::find($id);
        $unidad = Unidad::all();
        
        if (empty($personaf)) {
            Flash::error('Personaf not found');

            return redirect(route('personafs.index'));
        }

        return view('personafs.edit')->with('personaf', $personaf)->with('unidad', $unidad);
    }
    public function editestado($id)
    {
        $personaf = Usuario::find($id);
        $unidad = Unidad::all();
        
        if (empty($personaf)) {
            Flash::error('Personaf not found');

            return redirect(route('personafs.index'));
        }

        return view('personafs.editestado')->with('personaf', $personaf)->with('unidad', $unidad);
    }
    public function editt()
    {
        $user = Usuario::where('unidad_id','=',null)->get();
        $unidad = Unidad::all(); 
        $area = Area::all();
        $sub_area = Sub_Area::all();
        //dd($user);

        return view('personafs.create')
        ->with('user', $user)
        ->with('unidad', $unidad);
        
    }
    


    /**
     * Update the specified personaf in storage.
     *
     * @param int $id
     * @param UpdatepersonafRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepersonafRequest $request)
    {
        $personaf = $this->personafRepository->find($id);
        
        if (empty($personaf)) {
            Flash::error('Personaf not found');

            return redirect(route('personafs.index'));
        }

        $personaf = $this->personafRepository->update($request->all(), $id);

        Flash::success('Personaf updated successfully.');

        return redirect(route('personafs.index'));
    }
    public function updatee(Request $request)
    {
        $personaf = $this->personafRepository->find($request->id);
        
        if (empty($personaf)) {
            Flash::error('Personaf not found');

            return redirect(route('personafs.index'));
        }
        
        $personaf = $this->personafRepository->update($request->all(), $request->id);

        Flash::success('Personaf updated successfully.');

        return redirect(route('personafs.index'));
    }

    /**
     * Remove the specified personaf from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaf = $this->personafRepository->find($id);

        if (empty($personaf)) {
            Flash::error('Personaf not found');

            return redirect(route('personafs.index'));
        }

        $this->personafRepository->delete($id);

        Flash::success('Personaf deleted successfully.');

        return redirect(route('personafs.index'));
    }
}
