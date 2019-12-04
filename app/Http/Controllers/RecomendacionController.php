<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecomendacionRequest;
use App\Http\Requests\UpdateRecomendacionRequest;
use App\Repositories\RecomendacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RecomendacionController extends AppBaseController
{
    /** @var  RecomendacionRepository */
    private $recomendacionRepository;

    public function __construct(RecomendacionRepository $recomendacionRepo)
    {
        $this->recomendacionRepository = $recomendacionRepo;
        $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);
    }

    /**
     * Display a listing of the Recomendacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request, $id)
    {
        $recomendacions = $this->recomendacionRepository->all();
        
        return view('recomendacions.index')
            ->with('recomendacions', $recomendacions)
            ->with('id', $id);
    }

    /**
     * Show the form for creating a new Recomendacion.
     *
     * @return Response
     */
    public function create($id)
    {
        return view('recomendacions.create')->with('id', $id);
    }

    /**
     * Store a newly created Recomendacion in storage.
     *
     * @param CreateRecomendacionRequest $request
     *
     * @return Response
     */
    public function store(CreateRecomendacionRequest $request)
    {
        $input = $request->all();

        $recomendacion = $this->recomendacionRepository->create($input);

        Flash::success('Recomendacion saved successfully.');

        return redirect(route('recomendacions.indexid', [$recomendacion->cite_id]));
    }

    /**
     * Display the specified Recomendacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recomendacion = $this->recomendacionRepository->find($id);

        if (empty($recomendacion)) {
            Flash::error('Recomendacion not found');

            return redirect(route('recomendacions.index'));
        }

        return view('recomendacions.show')->with('recomendacion', $recomendacion);
    }

    /**
     * Show the form for editing the specified Recomendacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recomendacion = $this->recomendacionRepository->find($id);

        if (empty($recomendacion)) {
            Flash::error('Recomendacion not found');

            return redirect(route('recomendacions.index'));
        }

        return view('recomendacions.edit')->with('recomendacion', $recomendacion);
    }

    /**
     * Update the specified Recomendacion in storage.
     *
     * @param int $id
     * @param UpdateRecomendacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRecomendacionRequest $request)
    {
        $recomendacion = $this->recomendacionRepository->find($id);

        if (empty($recomendacion)) {
            Flash::error('Recomendacion not found');

            return redirect(route('recomendacions.index'));
        }

        $recomendacion = $this->recomendacionRepository->update($request->all(), $id);
        //dd($recomendacion);
        Flash::success('Recomendacion updated successfully.');

        return redirect(route('recomendacions.indexid', [$recomendacion->cite_id]));
    }

    /**
     * Remove the specified Recomendacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recomendacion = $this->recomendacionRepository->find($id);

        if (empty($recomendacion)) {
            Flash::error('Recomendacion not found');

            return redirect(route('recomendacions.index'));
        }

        $this->recomendacionRepository->delete($id);

        Flash::success('Recomendacion deleted successfully.');

        return redirect(route('recomendacions.index'));
    }


    public function imprimir(){
     $pdf = \PDF::loadView('pdf.mantenimiento')->setPaper('a4', 'portrait');
     return $pdf->download('ejemplo.pdf');
}
}
