<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListar_uasRequest;
use App\Http\Requests\UpdateListar_uasRequest;
use App\Repositories\Listar_uasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Unidad;
use App\Models\Area;
use App\Models\Sub_Area;

class Listar_uasController extends AppBaseController
{
    /** @var  Listar_uasRepository */
    private $listarUasRepository;

    public function __construct(Listar_uasRepository $listarUasRepo)
    {
        $this->listarUasRepository = $listarUasRepo;
    }

    /**
     * Display a listing of the Listar_uas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $unidad = Unidad::all(); 
        $area = Area::all();
        $sub_area = Sub_Area::all();
        
        return view('listar_uas.index')
            ->with('unidad', $unidad)
            ->with('area', $area)
            ->with('sub_area', $sub_area);
    }

    /**
     * Show the form for creating a new Listar_uas.
     *
     * @return Response
     */
    public function create()
    {
        return view('listar_uas.create');
    }

    /**
     * Store a newly created Listar_uas in storage.
     *
     * @param CreateListar_uasRequest $request
     *
     * @return Response
     */
    public function store(CreateListar_uasRequest $request)
    {
        $input = $request->all();

        $listarUas = $this->listarUasRepository->create($input);

        Flash::success('Listar Uas saved successfully.');

        return redirect(route('listarUas.index'));
    }

    /**
     * Display the specified Listar_uas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $listarUas = $this->listarUasRepository->find($id);

        if (empty($listarUas)) {
            Flash::error('Listar Uas not found');

            return redirect(route('listarUas.index'));
        }

        return view('listar_uas.show')->with('listarUas', $listarUas);
    }

    /**
     * Show the form for editing the specified Listar_uas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $listarUas = $this->listarUasRepository->find($id);

        if (empty($listarUas)) {
            Flash::error('Listar Uas not found');

            return redirect(route('listarUas.index'));
        }

        return view('listar_uas.edit')->with('listarUas', $listarUas);
    }

    /**
     * Update the specified Listar_uas in storage.
     *
     * @param int $id
     * @param UpdateListar_uasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateListar_uasRequest $request)
    {
        $listarUas = $this->listarUasRepository->find($id);

        if (empty($listarUas)) {
            Flash::error('Listar Uas not found');

            return redirect(route('listarUas.index'));
        }

        $listarUas = $this->listarUasRepository->update($request->all(), $id);

        Flash::success('Listar Uas updated successfully.');

        return redirect(route('listarUas.index'));
    }

    /**
     * Remove the specified Listar_uas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $listarUas = $this->listarUasRepository->find($id);

        if (empty($listarUas)) {
            Flash::error('Listar Uas not found');

            return redirect(route('listarUas.index'));
        }

        $this->listarUasRepository->delete($id);

        Flash::success('Listar Uas deleted successfully.');

        return redirect(route('listarUas.index'));
    }
}
