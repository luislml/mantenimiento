<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEquipoRequest;
use App\Http\Requests\UpdateEquipoRequest;
use App\Repositories\EquipoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EquipoController extends AppBaseController
{
    /** @var  EquipoRepository */
    private $equipoRepository;

    public function __construct(EquipoRepository $equipoRepo)
    {
        $this->equipoRepository = $equipoRepo;
        $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);
    }

    /**
     * Display a listing of the Equipo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $equipos = $this->equipoRepository->all();

        return view('equipos.index')
            ->with('equipos', $equipos);
    }

    /**
     * Show the form for creating a new Equipo.
     *
     * @return Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created Equipo in storage.
     *
     * @param CreateEquipoRequest $request
     *
     * @return Response
     */
    public function store(CreateEquipoRequest $request)
    {
        $input = $request->all();

        $equipo = $this->equipoRepository->create($input);

        Flash::success('EQUIPO GUARDADO CORRECTAMENTE.');

        return redirect(route('equipos.index'));
    }

    /**
     * Display the specified Equipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error('Equipo not found');

            return redirect(route('equipos.index'));
        }

        return view('equipos.show')->with('equipo', $equipo);
    }

    /**
     * Show the form for editing the specified Equipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error('Equipo not found');

            return redirect(route('equipos.index'));
        }

        return view('equipos.edit')->with('equipo', $equipo);
    }

    /**
     * Update the specified Equipo in storage.
     *
     * @param int $id
     * @param UpdateEquipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEquipoRequest $request)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error('Equipo not found');

            return redirect(route('equipos.index'));
        }

        $equipo = $this->equipoRepository->update($request->all(), $id);

        Flash::success('Equipo updated successfully.');

        return redirect(route('equipos.index'));
    }

    /**
     * Remove the specified Equipo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error('Equipo not found');

            return redirect(route('equipos.index'));
        }

        $this->equipoRepository->delete($id);

        Flash::success('EQUIPO BORRADO CORRECTAMENTE.');

        return redirect(route('eInformaticos.create'));
    }
}
