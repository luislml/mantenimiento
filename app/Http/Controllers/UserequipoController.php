<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserequipoRequest;
use App\Http\Requests\UpdateUserequipoRequest;
use App\Repositories\UserequipoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Unidad;
use App\Models\Area;
use App\Models\Sub_Area;
use App\Models\Usuario;
use App\Models\E_informatico;
use App\Models\Historiale;
use App\Models\Mantenimiento; 
use PDF;

class UserequipoController extends AppBaseController
{

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
        return E_informatico::where('unidad_id', $id)
        ->where('usuario_id', null)
        ->get();
    }
    public function getusuariosa($id)
    {
        return Usuario::where('area_id', $id)->get();
    }
    public function getequiposa($id)
    {
        return E_informatico::where('area_id', $id)
        ->where('usuario_id', null)
        ->get();
    }
    public function getusuariossa($id)
    {
        return Usuario::where('sub_area_id', $id)->get();
    }
    public function getequipossa($id)
    {
        return E_informatico::where('sub_area_id', $id)
        ->where('usuario_id', null)
        ->get();
    }
    public function getusuariose($id)
    {
        return E_informatico::where('usuario_id', $id)->get();
    }
    /** @var  UserequipoRepository */
    private $userequipoRepository;

    public function __construct(UserequipoRepository $eInformaticoRepo)
    {
        $this->userequipoRepository = $eInformaticoRepo;
        $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);
    }

    /**
     * Display a listing of the Userequipo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $userequipos = E_informatico::where('usuario_id','!=',null)->get();
        

        return view('userequipos.index')
            ->with('userequipos', $userequipos);
    }

    /**
     * Show the form for creating a new Userequipo.
     *
     * @return Response
     */
    public function create()
    {
        $unidad = Unidad::all(); 
        return view('userequipos.create')
        ->with('unidad', $unidad);
    }

    /**
     * Store a newly created Userequipo in storage.
     *
     * @param CreateUserequipoRequest $request
     *
     * @return Response
     */
    public function store(CreateUserequipoRequest $request)
    {
        $input = $request->all();
        
        $id = $request->id;
        $userequipo = E_informatico::find($id);
        
        // priemra insercion al historial del equipo

        $his_eq = new Historiale();
        $his_eq->usuario_id = $input['usuario_id'];
        $his_eq->e_informatico_id = $input['id'];
        $his_eq->unidad_id = $userequipo->unidad_id;
        $his_eq->area_id = $userequipo->area_id;
        $his_eq->sub_area_id = $userequipo->sub_area_id;
        $his_eq->save();
        
        $userequipo = $this->userequipoRepository->update($request->all(), $id);
        Flash::success('EEQUIPO ASIGNADO CORRECTAMENTE..');

        return redirect(route('userequipos.create'));
    }

    /**
     * Display the specified Userequipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userequipo = $this->userequipoRepository->find($id);
        $usuario = Usuario::find($userequipo->usuario_id);
        $unidad = Unidad::find($userequipo->unidad_id);
        
     
        if (empty($userequipo)) {
            Flash::error('Userequipo not found');

            return redirect(route('userequipos.index'));
        }
        $pdf = PDF::loadView('userequipos.pdf', compact('userequipo','usuario','unidad'))->setPaper(array(0, 0, 612, 792), 'portraid');
        return $pdf->stream();

        //return view('userequipos.show')->with('userequipo', $userequipo)->with('usuario', $usuario)->with('unidad', $unidad);
    }
    public function hmantenimiento($id)
    {
        $hmantenimiento = Mantenimiento::where('e_informatico_id', $id)->get();
        $einfo = E_informatico::find($id);
        if (empty($hmantenimiento)) {
            Flash::error('Userequipo not found');

            return redirect(route('userequipos.index'));
        }
        $pdf = PDF::loadView('userequipos.hequipo', compact('hmantenimiento','einfo'))->setPaper(array(0, 0, 612, 792), 'portraid');
        return $pdf->stream();

    }
   

    /**
     * Show the form for editing the specified Userequipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userequipo = $this->userequipoRepository->find($id);

        if (empty($userequipo)) {
            Flash::error('Userequipo not found');

            return redirect(route('userequipos.index'));
        }

        return view('userequipos.edit')->with('userequipo', $userequipo);
    }

    /**
     * Update the specified Userequipo in storage.
     *
     * @param int $id
     * @param UpdateUserequipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserequipoRequest $request)
    {
        $userequipo = $this->userequipoRepository->find($id);

        if (empty($userequipo)) {
            Flash::error('Userequipo not found');

            return redirect(route('userequipos.index'));
        }

        $userequipo = $this->userequipoRepository->update($request->all(), $id);

        Flash::success('Userequipo updated successfully.');

        return redirect(route('userequipos.index'));
    }

    /**
     * Remove the specified Userequipo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userequipo = $this->userequipoRepository->find($id);

        if (empty($userequipo)) {
            Flash::error('Userequipo not found');

            return redirect(route('userequipos.index'));
        }

        $this->userequipoRepository->delete($id);

        Flash::success('Userequipo deleted successfully.');

        return redirect(route('userequipos.index'));
    }
}
