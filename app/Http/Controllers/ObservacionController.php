<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateObservacionRequest;
use App\Http\Requests\UpdateObservacionRequest;
use App\Repositories\ObservacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Cite;

class ObservacionController extends AppBaseController
{
    /** @var  ObservacionRepository */
    private $observacionRepository;

    public function __construct(ObservacionRepository $observacionRepo)
    {
        $this->observacionRepository = $observacionRepo;
    }

    /**
     * Display a listing of the Observacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $Request)
    {
        $observacions = $this->observacionRepository->all();
        
        
        return view('observacions.index')
            ->with('observacions', $observacions);
    }
    public function indexid($id)
    {
        $observacions = $this->observacionRepository->all();
        $cite = Cite::findOrfail($id);
        
        return view('observacions.index')
            ->with('observacions', $observacions)->with('cite', $cite);
    }

    /**
     * Show the form for creating a new Observacion.
     *
     * @return Response
     */
    public function create($id)
    {
        return view('observacions.create')->with('id',$id);
    }

    /**
     * Store a newly created Observacion in storage.
     *
     * @param CreateObservacionRequest $request
     *
     * @return Response
     */
    public function store(CreateObservacionRequest $request)
    {
        $input = $request->all();

        $observacion = $this->observacionRepository->create($input);
        
        Flash::success('Observacion saved successfully.');

        return redirect(route('observacions.indexid', [$observacion->cite_id]));
    }

    /**
     * Display the specified Observacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $observacion = $this->observacionRepository->find($id);

        if (empty($observacion)) {
            Flash::error('Observacion not found');

            return redirect(route('observacions.index'));
        }

        return view('observacions.show')->with('observacion', $observacion);
    }

    /**
     * Show the form for editing the specified Observacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $observacion = $this->observacionRepository->find($id);

        if (empty($observacion)) {
            Flash::error('Observacion not found');

            return redirect(route('observacions.index'));
        }

        return view('observacions.edit')->with('observacion', $observacion);
    }

    /**
     * Update the specified Observacion in storage.
     *
     * @param int $id
     * @param UpdateObservacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateObservacionRequest $request)
    {
        $observacion = $this->observacionRepository->find($id);

        if (empty($observacion)) {
            Flash::error('Observacion not found');

            return redirect(route('observacions.index'));
        }

        $observacion = $this->observacionRepository->update($request->all(), $id);

        Flash::success('Observacion updated successfully.');

        return redirect(route('observacions.indexid', [$observacion->cite_id]));
    }

    /**
     * Remove the specified Observacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $observacion = $this->observacionRepository->find($id);

        if (empty($observacion)) {
            Flash::error('Observacion not found');

            return redirect(route('observacions.index'));
        }

        $this->observacionRepository->delete($id);

        Flash::success('Observacion deleted successfully.');

        return redirect(route('observacions.index'));
    }
}
