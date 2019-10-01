<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE_informaticoRequest;
use App\Http\Requests\UpdateE_informaticoRequest;
use App\Repositories\E_informaticoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Equipo;
use App\Models\Modelo;
use App\Models\Marca;
use App\Models\E_informatico;
use App\Models\Unidad;
use App\Models\Area;
use App\Models\Sub_Area;
use App\Models\Usuario;


class E_informaticoController extends AppBaseController
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
    public function getusuariosa($id)
    {
        return Usuario::where('area_id', $id)->get();
    }
    public function getusuariossa($id)
    {
        return Usuario::where('sub_area_id', $id)->get();
    } 

  
    /** @var  E_informaticoRepository */
    private $eInformaticoRepository;

    public function __construct(E_informaticoRepository $eInformaticoRepo)
    {
        $this->eInformaticoRepository = $eInformaticoRepo;
                    $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);

    }



    /**
     * Display a listing of the E_informatico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eInformaticos = $this->eInformaticoRepository->all();
        
        return view('e_informaticos.index')
            ->with('eInformaticos', $eInformaticos);
    }

    /**
     * Show the form for creating a new E_informatico.
     *
     * @return Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        $modelos = Modelo::all();
        $marcas = Marca::all();
        $unidad = Unidad::all();
        return view('e_informaticos.create')
        ->with('equipos', $equipos)
        ->with('modelos', $modelos)
        ->with('marcas', $marcas)
        ->with('unidad', $unidad);
    }

    /**
     * Store a newly created E_informatico in storage.
     *
     * @param CreateE_informaticoRequest $request
     *
     * @return Response
     */
    public function store(CreateE_informaticoRequest $request)
    {
        $input = $request->all();
        dd($input);
        $eInformatico = $this->eInformaticoRepository->create($input);

        Flash::success('EQUIPO INFORMATICO GUARDADO CORRECTAMENTE.');

        return redirect(route('eInformaticos.index'));
    }

    /**
     * Display the specified E_informatico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eInformatico = $this->eInformaticoRepository->find($id);
        //dd($eInformatico->historial);
        if (empty($eInformatico)) {
            Flash::error('Equipo Informatico no encontrado');

            return redirect(route('eInformaticos.index'));
        }

        return view('e_informaticos.show')->with('eInformatico', $eInformatico);
    }

    /**
     * Show the form for editing the specified E_informatico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eInformatico = $this->eInformaticoRepository->find($id);
        $equipos = Equipo::all();
        if (empty($eInformatico)) {
            Flash::error('Equipo Informatico no encontrado');

            return redirect(route('eInformaticos.index'));
        }

        return view('e_informaticos.edit')->with('eInformatico', $eInformatico)->with('equipos', $equipos);;
    }

    /**
     * Update the specified E_informatico in storage.
     *
     * @param int $id
     * @param UpdateE_informaticoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateE_informaticoRequest $request)
    {
        $eInformatico = $this->eInformaticoRepository->find($id);

        if (empty($eInformatico)) {
            Flash::error('Equipo Informatico no encontrado');

            return redirect(route('eInformaticos.index'));
        }

        $eInformatico = $this->eInformaticoRepository->update($request->all(), $id);

        Flash::success('Equipo Informatico actualizado con éxito.');

        return redirect(route('eInformaticos.index'));
    }

    /**
     * Remove the specified E_informatico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eInformatico = $this->eInformaticoRepository->find($id);

        if (empty($eInformatico)) {
            Flash::error('Equipo Informatico no encontrado');

            return redirect(route('eInformaticos.index'));
        }

        $this->eInformaticoRepository->delete($id);

        Flash::success('Equipo Informatico borrado exitosamente.');

        return redirect(route('eInformaticos.index'));
    }

    /*equipo*/
    public function equipo(Request $request)
    {
        $input = $request->all();
       
        $eInformatico = Equipo::create($input);

        Flash::success('Equipo Informatico Guardado exitosamente.');

        return redirect(route('eInformaticos.create'));
    }
    /*modelo*/
    public function modelo(Request $request)
    {
        $input = $request->all();
        
        $eInformatico = Modelo::create($input);

        Flash::success('modelo Guardado exitosamente.');

        return redirect(route('eInformaticos.create'));
    }
    /*Marca*/
    public function marca(Request $request)
    {
        $input = $request->all();
        
        $eInformatico = Marca::create($input);

        Flash::success('Marca Guardado exitosamente.');

        return redirect(route('eInformaticos.create'));
    }
}
