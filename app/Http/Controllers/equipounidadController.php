<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEquipounidadRequest;
use App\Http\Requests\UpdateEquipounidadRequest;
use App\Repositories\EquipounidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Unidad;
use App\Models\E_informatico;
use App\Models\Area;
use App\Models\Sub_Area;

class EquipounidadController extends AppBaseController
{

    public function getareas($id)
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
    /** @var  EquipounidadRepository */
    private $equipounidadRepository;

    public function __construct(EquipounidadRepository $equipounidadRepo)
    {
        $this->equipounidadRepository = $equipounidadRepo;
    }

    /**
     * Display a listing of the Equipounidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $equipounidads = $this->equipounidadRepository->all();
        $equipou = E_informatico::where('unidad_id','!=',null)->get();
        $unidad = Unidad::all();
        
        $unidad = Unidad::all(); 
        return view('equipounidads.index')
            ->with('equipou', $equipou);
    }

    /**
     * Show the form for creating a new Equipounidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('equipounidads.create');
    }

    /**
     * Store a newly created Equipounidad in storage.
     *
     * @param CreateEquipounidadRequest $request
     *
     * @return Response
     */
    public function store(CreateEquipounidadRequest $request)
    {
        $input = $request->all();

        $equipounidad = $this->equipounidadRepository->create($input);

        Flash::success('Equipounidad saved successfully.');

        return redirect(route('equipounidads.index'));
    }

    /**
     * Display the specified Equipounidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $equipounidad = $this->equipounidadRepository->find($id);

        if (empty($equipounidad)) {
            Flash::error('Equipounidad not found');

            return redirect(route('equipounidads.index'));
        }

        return view('equipounidads.show')->with('equipounidad', $equipounidad);
    }

    /**
     * Show the form for editing the specified Equipounidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $equipounidad = E_informatico::find($id);
        
        $unidad = Unidad::all();
        if (empty($equipounidad)) {
            Flash::error('Equipounidad not found');

            return redirect(route('equipounidads.index'));
        }

        return view('equipounidads.edit')->with('equipounidad', $equipounidad)->with('unidad', $unidad);
    }

    public function editt()
    {
        $equipou = E_informatico::where('unidad_id','=',null)->get();
        $unidad = Unidad::all(); 
        $area = Area::all();
        $sub_area = Sub_Area::all();
        //dd($user);

        return view('equipounidads.create')
        ->with('equipou', $equipou)
        ->with('unidad', $unidad);
        
    }
    public function editestado($id)
    {
        $equipou = E_informatico::find($id);
        $unidad = Unidad::all();
        
        if (empty($equipou)) {
            Flash::error('Personaf not found');

            return redirect(route('equipounidads.index'));
        }

        return view('equipounidads.editestado')->with('equipou', $equipou)->with('unidad', $unidad);
    }

    /**
     * Update the specified Equipounidad in storage.
     *
     * @param int $id
     * @param UpdateEquipounidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEquipounidadRequest $request)
    {
        $equipounidad = $this->equipounidadRepository->find($id);

        if (empty($equipounidad)) {
            Flash::error('Equipounidad not found');

            return redirect(route('equipounidads.index'));
        }

        $equipounidad = $this->equipounidadRepository->update($request->all(), $id);

        Flash::success('Equipounidad updated successfully.');

        return redirect(route('equipounidads.index'));
    }

    public function updatee(Request $request)
    {
        $equipounidad = $this->equipounidadRepository->find($request->id);
        
        if (empty($equipounidad)) {
            Flash::error('Personaf not found');

            return redirect(route('equipounidads.index'));
        }
        
        $equipounidad = $this->equipounidadRepository->update($request->all(), $request->id);

        Flash::success('Personaf updated successfully.');

        return redirect(route('equipounidads.index'));
    }

    /**
     * Remove the specified Equipounidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $equipounidad = $this->equipounidadRepository->find($id);

        if (empty($equipounidad)) {
            Flash::error('Equipounidad not found');

            return redirect(route('equipounidads.index'));
        }

        $this->equipounidadRepository->delete($id);

        Flash::success('Equipounidad deleted successfully.');

        return redirect(route('equipounidads.index'));
    }
}
