<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHistorialeRequest;
use App\Http\Requests\UpdateHistorialeRequest;
use App\Repositories\HistorialeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\E_informatico;
use App\Models\Unidad;
use App\Models\Area;
use App\Models\Sub_Area;
use App\Models\Usuario;
use PDF;

class HistorialeController extends AppBaseController
{
    /** @var  HistorialeRepository */
    private $historialeRepository;

    public function __construct(HistorialeRepository $historialeRepo)
    {
        $this->historialeRepository = $historialeRepo;
    }

    /**
     * Display a listing of the Historiale.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $historiales = $this->historialeRepository->all();

        return view('historiales.index')
            ->with('historiales', $historiales);
    }

    /**
     * Show the form for creating a new Historiale.
     *
     * @return Response
     */
    public function create()
    {
        return view('historiales.create');
    }

    /**
     * Store a newly created Historiale in storage.
     *
     * @param CreateHistorialeRequest $request
     *
     * @return Response
     */
    public function store(CreateHistorialeRequest $request)
    {
        $input = $request->all();

        $historiale = $this->historialeRepository->create($input);

        Flash::success('Historiale saved successfully.');

        return redirect(route('historiales.index'));
    }

    /**
     * Display the specified Historiale.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuario = Usuario::all();
        $unidad = Unidad::all();
        $area = Area::all();
        $subarea = Sub_Area::all();
        $eactual = E_informatico::find($id);
        $historiales = $eactual->historial;
         
        if (empty($historiales)) {
            Flash::error('Historiale not found');

            return redirect(route('historiales.index'));
        }

        
        $pdf = PDF::loadView('historiales.show', compact('historiales','usuario','unidad','area','subarea','eactual'))->setPaper(array(0, 0, 612, 792), 'portrait');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified Historiale.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $historiale = $this->historialeRepository->find($id);

        if (empty($historiale)) {
            Flash::error('Historiale not found');

            return redirect(route('historiales.index'));
        }

        return view('historiales.edit')->with('historiale', $historiale);
    }

    /**
     * Update the specified Historiale in storage.
     *
     * @param int $id
     * @param UpdateHistorialeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHistorialeRequest $request)
    {
        $historiale = $this->historialeRepository->find($id);

        if (empty($historiale)) {
            Flash::error('Historiale not found');

            return redirect(route('historiales.index'));
        }

        $historiale = $this->historialeRepository->update($request->all(), $id);

        Flash::success('Historiale updated successfully.');

        return redirect(route('historiales.index'));
    }

    /**
     * Remove the specified Historiale from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $historiale = $this->historialeRepository->find($id);

        if (empty($historiale)) {
            Flash::error('Historiale not found');

            return redirect(route('historiales.index'));
        }

        $this->historialeRepository->delete($id);

        Flash::success('Historiale deleted successfully.');

        return redirect(route('historiales.index'));
    }
}
