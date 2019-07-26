<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHerramientasRequest;
use App\Http\Requests\UpdateHerramientasRequest;
use App\Repositories\HerramientasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Storage;
use App\Models\Herramientas;
class HerramientasController extends AppBaseController
{
    /** @var  HerramientasRepository */
    private $herramientasRepository;

    public function __construct(HerramientasRepository $herramientasRepo)
    {
        $this->herramientasRepository = $herramientasRepo;
    }

    /**
     * Display a listing of the Herramientas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $herramientas = $this->herramientasRepository->all();

        return view('herramientas.index')
            ->with('herramientas', $herramientas);
    }

    /**
     * Show the form for creating a new Herramientas.
     *
     * @return Response
     */
    public function create()
    {
        return view('herramientas.create');
    }

    /**
     * Store a newly created Herramientas in storage.
     *
     * @param CreateHerramientasRequest $request
     *
     * @return Response
     */
    public function store(CreateHerramientasRequest $request)
    {
        


        if($request->file('file')){
            
            $file = $request->file('file');
            $name = time().$file->getclientoriginalName();
            $file->move(public_path().'/hera/', $name);
        }

       $herra = new Herramientas();
       $herra->nombre = $request->input('nombre');
       $herra->file = $name;
       $herra->save();

        Flash::success('Herramientas saved successfully.');

        return redirect(route('herramientas.index'));
    }

    /**
     * Display the specified Herramientas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $herramientas = $this->herramientasRepository->find($id);

        if (empty($herramientas)) {
            Flash::error('Herramientas not found');

            return redirect(route('herramientas.index'));
        }

        return view('herramientas.show')->with('herramientas', $herramientas);
    }

    /**
     * Show the form for editing the specified Herramientas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $herramientas = $this->herramientasRepository->find($id);

        if (empty($herramientas)) {
            Flash::error('Herramientas not found');

            return redirect(route('herramientas.index'));
        }

        return view('herramientas.edit')->with('herramientas', $herramientas);
    }

    /**
     * Update the specified Herramientas in storage.
     *
     * @param int $id
     * @param UpdateHerramientasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHerramientasRequest $request)
    {
        $herramientas = $this->herramientasRepository->find($id);

        if (empty($herramientas)) {
            Flash::error('Herramientas not found');

            return redirect(route('herramientas.index'));
        }

        $herramientas = $this->herramientasRepository->update($request->all(), $id);

        Flash::success('Herramientas updated successfully.');

        return redirect(route('herramientas.index'));
    }

    /**
     * Remove the specified Herramientas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $herramientas = $this->herramientasRepository->find($id);

        if (empty($herramientas)) {
            Flash::error('Herramientas not found');

            return redirect(route('herramientas.index'));
        }

        $this->herramientasRepository->delete($id);

        Flash::success('Herramientas deleted successfully.');

        return redirect(route('herramientas.index'));
    }

    public function descargar_publicacion($id){

         $publicacion=Herramientas::find($id);
         $rutaarchivo= "../public/hera/".$publicacion->file;
         return response()->download($rutaarchivo);

       }
}
