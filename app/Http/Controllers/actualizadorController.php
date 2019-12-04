<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateactualizadorRequest;
use App\Http\Requests\UpdateactualizadorRequest;
use App\Repositories\actualizadorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Storage;
use App\Models\actualizador;

class actualizadorController extends AppBaseController
{
    /** @var  actualizadorRepository */
    private $actualizadorRepository;

    public function __construct(actualizadorRepository $actualizadorRepo)
    {
        $this->actualizadorRepository = $actualizadorRepo;
        $this->middleware([
                        'auth','rol:Admin,operador,estudiante'
                    ]);
    }

    /**
     * Display a listing of the actualizador.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $actualizadors = $this->actualizadorRepository->all();

        return view('actualizadors.index')
            ->with('actualizadors', $actualizadors);
    }

    /**
     * Show the form for creating a new actualizador.
     *
     * @return Response
     */
    public function create()
    {
        return view('actualizadors.create');
    }

    /**
     * Store a newly created actualizador in storage.
     *
     * @param CreateactualizadorRequest $request
     *
     * @return Response
     */
    public function store(CreateactualizadorRequest $request)
    {
        if($request->file('actualizador')){
            
            $actualizador = $request->file('actualizador');
            $name = time().$actualizador->getclientoriginalName();
            $actualizador->move(public_path().'/hera/', $name);
        }

       $herra = new actualizador();
       $herra->fecha = $request->input('fecha');
       $herra->bits = $request->input('bits');
       $herra->actualizador = $name;
       $herra->save();

        Flash::success('ACTUALIZADOR GUARDADO CORRECTAMENTE.');

        return redirect(route('actualizadors.index'));
    }

    /**
     * Display the specified actualizador.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actualizador = $this->actualizadorRepository->find($id);

        if (empty($actualizador)) {
            Flash::error('Actualizador not found');

            return redirect(route('actualizadors.index'));
        }

        return view('actualizadors.show')->with('actualizador', $actualizador);
    }

    /**
     * Show the form for editing the specified actualizador.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actualizador = $this->actualizadorRepository->find($id);

        if (empty($actualizador)) {
            Flash::error('Actualizador not found');

            return redirect(route('actualizadors.index'));
        }

        return view('actualizadors.edit')->with('actualizador', $actualizador);
    }

    /**
     * Update the specified actualizador in storage.
     *
     * @param int $id
     * @param UpdateactualizadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateactualizadorRequest $request)
    {
        $actualizador = $this->actualizadorRepository->find($id);

        if (empty($actualizador)) {
            Flash::error('Actualizador not found');

            return redirect(route('actualizadors.index'));
        }

        $actualizador = $this->actualizadorRepository->update($request->all(), $id);

        Flash::success('Actualizador updated successfully.');

        return redirect(route('actualizadors.index'));
    }

    /**
     * Remove the specified actualizador from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actualizador = $this->actualizadorRepository->find($id);

        if (empty($actualizador)) {
            Flash::error('Actualizador not found');

            return redirect(route('actualizadors.index'));
        }
        unlink('../public/hera/'.$actualizador->actualizador);
        $this->actualizadorRepository->delete($id);
        Flash::success('ACTUALIZADOR ELIMINADO CORRECTAMENTE.');

        return redirect(route('actualizadors.index'));


    }
    public function descargar_actualizador($id){

         $publicacion=actualizador::find($id);
         $rutaarchivo= "../public/hera/".$publicacion->actualizador;
         return response()->download($rutaarchivo);

       }
}
