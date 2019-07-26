<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMantenimientoRequest;
use App\Http\Requests\UpdateMantenimientoRequest;
use App\Repositories\MantenimientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Unidad;
use App\Models\Area;
use App\Models\Sub_Area;
use App\Models\Usuario;
use App\Models\E_informatico;
use App\Models\Mantenimiento;
use App\Models\Gestion;
use App\Models\Cite;


class MantenimientoController extends AppBaseController
{
    //funciones que rescatan areas sub areas equipos informaticos y usuarios segun sean seleccionados//
    public function getareas($id)
    {
        return Area::where('unidad_id', $id)->get();
    }
    public function getsubareas($id)
    {
        return Sub_Area::where('area_id', $id)->get();
    }
    public function getusuarios($id)
    {
        return Usuario::where('unidad_id', $id)->get();
    }
    public function getequipos($id)
    {
        return E_informatico::where('usuario_id', $id)->get();
    }
    public function getusuariosa($id)
    {
        return Usuario::where('area_id', $id)->get();
    }
    public function getequiposa($id)
    {
        return E_informatico::where('area_id', $id)->get();
    }
    public function getusuariossa($id)
    {
        return Usuario::where('sub_area_id', $id)->get();
    }
    public function getequipossa($id)
    {
        return E_informatico::where('sub_area_id', $id)->get();
    }
    /** @var  MantenimientoRepository */
    private $mantenimientoRepository;

    public function __construct(MantenimientoRepository $mantenimientoRepo)
    {
        $this->mantenimientoRepository = $mantenimientoRepo;

    }

    /**
     * Display a listing of the Mantenimiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
                

               

        $mantenimientos = $this->mantenimientoRepository->all();

        return view('mantenimientos.index')
            ->with('mantenimientos', $mantenimientos);
    }

    /**
     * Show the form for creating a new Mantenimiento.
     *
     * @return Response
     */
    public function create()
    {
        $unidad = Unidad::all();
        return view('mantenimientos.create')->with('unidad', $unidad);
    }

    /**
     * Store a newly created Mantenimiento in storage.
     *
     * @param CreateMantenimientoRequest $request
     *
     * @return Response
     */
    public function store(CreateMantenimientoRequest $request)
    {
        $input = $request->all();

        
        

        $mantenimiento = $this->mantenimientoRepository->create($input);

        //cites
        $gestion = Gestion::find(1);

        $cite = new Cite;
        $cite->gestion_id=$gestion->id;
        $cite->mantenimiento_id=$mantenimiento->id;
        $cite->save();
        $cites = cite::find($cite->id-1);
        
        if ($cites->cite == null) 
        {
            $cite->cite=1;
            $cite->save();
        }
        else
        {
            
            $dato=$cites->cite;
            $cite->cite=$dato+1;
            $cite->save();
        }
        
        

        Flash::success('Mantenimiento saved successfully.');

        return redirect(route('mantenimientos.index'));
    }

    /**
     * Display the specified Mantenimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mantenimientos = Mantenimiento::where('usuario_id', $id)->get();
        $mantenimiento = Mantenimiento::find(1);
        if (empty($mantenimientos)) {
            Flash::error('Mantenimiento not found');

            return redirect(route('mantenimientos.index'));
        }

        return view('mantenimientos.show')->with('mantenimientos', $mantenimientos);
    }

    /**
     * Show the form for editing the specified Mantenimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mantenimiento = $this->mantenimientoRepository->find($id);

        if (empty($mantenimiento)) {
            Flash::error('Mantenimiento not found');

            return redirect(route('mantenimientos.index'));
        }

        return view('mantenimientos.edit')->with('mantenimiento', $mantenimiento);
    }

    /**
     * Update the specified Mantenimiento in storage.
     *
     * @param int $id
     * @param UpdateMantenimientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMantenimientoRequest $request)
    {
        $mantenimiento = $this->mantenimientoRepository->find($id);

        if (empty($mantenimiento)) {
            Flash::error('Mantenimiento not found');

            return redirect(route('mantenimientos.index'));
        }

        $mantenimiento = $this->mantenimientoRepository->update($request->all(), $id);

        Flash::success('Mantenimiento updated successfully.');

        return redirect(route('mantenimientos.index'));
    }

    /**
     * Remove the specified Mantenimiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mantenimiento = $this->mantenimientoRepository->find($id);

        if (empty($mantenimiento)) {
            Flash::error('Mantenimiento not found');

            return redirect(route('mantenimientos.index'));
        }

        $this->mantenimientoRepository->delete($id);

        Flash::success('Mantenimiento deleted successfully.');

        return redirect(route('mantenimientos.index'));
    }
}
