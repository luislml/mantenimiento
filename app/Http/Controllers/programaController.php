<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprogramaRequest;
use App\Http\Requests\UpdateprogramaRequest;
use App\Repositories\programaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\programa;
use Flash;
use Response;
use Storage;

class programaController extends AppBaseController
{
    /** @var  programaRepository */
    private $programaRepository;

    public function __construct(programaRepository $programaRepo)
    {
        $this->programaRepository = $programaRepo;
    }

    /**
     * Display a listing of the programa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $programas = $this->programaRepository->all();

        return view('programas.index')
            ->with('programas', $programas);
    }

    /**
     * Show the form for creating a new programa.
     *
     * @return Response
     */
    public function create()
    {
        return view('programas.create');
    }

    /**
     * Store a newly created programa in storage.
     *
     * @param CreateprogramaRequest $request
     *
     * @return Response
     */
    public function store(CreateprogramaRequest $request)
    {

         if($request->file('archivo')){
            
            $archivo = $request->file('archivo');
            $name = time().$archivo->getclientoriginalName();
            $archivo->move(public_path().'/hera/', $name);
        }

       $herra = new programa();
       $herra->nombre = $request->input('nombre');
       $herra->bits = $request->input('bits');
       $herra->archivo = $name;
       $herra->save();

        Flash::success('Programa saved successfully.');

        return redirect(route('programas.index'));


        
    }

    /**
     * Display the specified programa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            Flash::error('Programa not found');

            return redirect(route('programas.index'));
        }

        return view('programas.show')->with('programa', $programa);
    }

    /**
     * Show the form for editing the specified programa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            Flash::error('Programa not found');

            return redirect(route('programas.index'));
        }

        return view('programas.edit')->with('programa', $programa);
    }

    /**
     * Update the specified programa in storage.
     *
     * @param int $id
     * @param UpdateprogramaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprogramaRequest $request)
    {
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            Flash::error('Programa not found');

            return redirect(route('programas.index'));
        }

        $programa = $this->programaRepository->update($request->all(), $id);

        Flash::success('Programa updated successfully.');

        return redirect(route('programas.index'));
    }

    /**
     * Remove the specified programa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            Flash::error('Programa not found');

            return redirect(route('programas.index'));
        }
        unlink('../public/hera/'.$programa->archivo);
        $this->programaRepository->delete($id);

        Flash::success('Programa deleted successfully.');

        return redirect(route('programas.index'));
    }
    public function descargar_programa($id){

         $publicacion=programa::find($id);
         $rutaarchivo= "../public/hera/".$publicacion->archivo;
         return response()->download($rutaarchivo);

       }
}
