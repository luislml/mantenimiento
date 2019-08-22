<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEquipounidadRequest;
use App\Http\Requests\UpdateEquipounidadRequest;
use App\Repositories\EquipounidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Unidad;
use App\Models\E_informatico;
use App\Models\Area;
use App\Models\Sub_Area;
use App\Models\Usuario;
use PDF;


class EquipounidadController extends AppBaseController
{

    public function getareas($id)
    {
        return Area::where('unidad_id', $id)->get();
    }
    public function getsubareas($id)
    {
        return Sub_Area::where('area_id', $id)->get();
    }
    public function getareas_a($id,$d)
    {
        return Area::where('unidad_id', $d)->get();
    }
    public function getsubareas_a($id,$d)
    {
        return Sub_Area::where('area_id', $d)->get();
    }
    public function getusuarios($id,$d)
    {
        return Usuario::where('unidad_id', $d)->get();
    }
    public function getusuarios_a($id,$d)
    {
        return Usuario::where('area_id', $d)->get();
    }
    public function getusuarios_sa($id,$d)
    {
        return Usuario::where('sub_area_id', $d)->get();
    }   
    public function getequipos($id)
    {
        return E_informatico::where('unidad_id', $id)->get();
    }
    public function getequipos_a($id)
    {
        return E_informatico::where('area_id', $id)->get();
    }
    public function getequipos_sa($id)
    {
        return E_informatico::where('sub_area_id', $id)->get();
    }
     /** @var  EquipounidadRepository */
    private $equipounidadRepository;

    public function __construct(EquipounidadRepository $equipounidadRepo)
    {
        $this->equipounidadRepository = $equipounidadRepo;
        $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);
    }

    /**
     * Display a listing of the Equipounidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $equipounidads = $this->equipounidadRepository->all();
        $equipou = E_informatico::where('unidad_id','!=',null)->get();
        $unidad = Unidad::all();
        
        
        return view('equipounidads.index')
            ->with('equipou', $equipou)
            ->with('unidad', $unidad);
    }

    /**
     * Show the form for creating a new Equipounidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('equipounidads.create');
    }

    /**
     * Store a newly created Equipounidad in storage.
     *
     * @param CreateEquipounidadRequest $request
     *
     * @return Response
     */
    public function store(CreateEquipounidadRequest $request)
    {
        $input = $request->all();

        $equipounidad = $this->equipounidadRepository->create($input);

        Flash::success('Equipounidad saved successfully.');

        return redirect(route('eInformaticos.index'));
    }

    /**
     * Display the specified Equipounidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $equipounidad = $this->equipounidadRepository->find($id);

        if (empty($equipounidad)) {
            Flash::error('Equipounidad not found');

            return redirect(route('equipounidads.index'));
        }

        return view('equipounidads.show')->with('equipounidad', $equipounidad);
    }

    /**
     * Show the form for editing the specified Equipounidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $equipounidad = E_informatico::find($id);
       
        $unidad = Unidad::all();
        if (empty($equipounidad)) {
            Flash::error('Equipounidad not found 1');

            return redirect(route('equipounidads.index'));
        }

        return view('equipounidads.edit')->with('equipounidad', $equipounidad)->with('unidad', $unidad);
    }

    public function editt()
    {
        $equipou = E_informatico::where('unidad_id','=',null)->get();
        $unidad = Unidad::all(); 
        $area = Area::all();
        $sub_area = Sub_Area::all();
        //dd($user);

        return view('equipounidads.create')
        ->with('equipou', $equipou)
        ->with('unidad', $unidad);
        
    }
    public function editestado($id)
    {
        $equipou = E_informatico::find($id);
        $unidad = Unidad::all();
        
        if (empty($equipou)) {
            Flash::error('Personaf not found 2');

            return redirect(route('equipounidads.index'));
        }

        return view('equipounidads.editestado')->with('equipou', $equipou)->with('unidad', $unidad);
    }

    /**
     * Update the specified Equipounidad in storage.
     *
     * @param int $id
     * @param UpdateEquipounidadRequest $request
     *
     * @return Response
     */
    public function update($id, request $request)
    {
        $equipounidad = $this->equipounidadRepository->find($id);
        
        if (empty($equipounidad)) {
            Flash::error('Equipounidad not found 3');

            return redirect(route('equipounidads.index'));
        }

        $equipounidad = $this->equipounidadRepository->update($request->all(), $id);

        Flash::success('Equipo Reasignado Exitosamente.');

        return redirect(route('equipounidads.index'));
    }

    public function updatee(Request $request)
    {
        $equipounidad = $this->equipounidadRepository->find($request->id);
        
        if (empty($equipounidad)) {
            Flash::error('Equipo No Encontrado');

            return redirect(route('eInformaticos.index'));
        }
        
        $equipounidad = $this->equipounidadRepository->update($request->all(), $request->id);

        Flash::success('Equipo Asignado Correctamente.');

        return redirect(route('eInformaticos.index'));
    }

    /**
     * Remove the specified Equipounidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $equipounidad = $this->equipounidadRepository->find($id);

        if (empty($equipounidad)) {
            Flash::error('Equipounidad not found');

            return redirect(route('equipounidads.index'));
        }

        $this->equipounidadRepository->delete($id);

        Flash::success('Equipounidad deleted successfully.');

        return redirect(route('equipounidads.index'));
    }

    public function print(Request $request)
    {
        $unidad = Unidad::find($request->unidad_id);
        $area = Area::find($request->area_id);
        $subarea = Sub_Area::find($request->sub_area_id);
        $usuario = Usuario::find($request->usuario_id);   

    
        if (($request->unidad_id)!=null &&
            ($request->area_id)!=null &&
            ($request->sub_area_id)!=null &&
            ($request->usuario_id)!=null)
            {
                $equipos = E_informatico::where('usuario_id', $request->usuario_id)->get();
                                                               
                $pdf = PDF::loadView('pdf_equipos.pdf1', compact('equipos','area','unidad','subarea','usuario'))->setPaper(array(0, 0, 612, 792), 'portrait');
                        return $pdf->stream();
            }
            else
            {
                if (($request->unidad_id)!=null &&
                    ($request->area_id)!=null &&
                    ($request->sub_area_id)!=null) 
                    {
                        $equipos = E_informatico::where('sub_area_id', $request->sub_area_id)->get();
                                                               
                        $pdf = PDF::loadView('pdf_equipos.pdf2', compact('equipos','area','unidad','subarea'))->setPaper(array(0, 0, 612, 792), 'portrait');
                        return $pdf->stream(); 
                    }
                    else
                    {
                        if (($request->unidad_id)!=null &&
                            ($request->area_id)!=null &&
                            ($request->usuario_id)!=null)
                            {
                                $equipos = E_informatico::where('usuario_id', $request->usuario_id)->get();
                                                               
                                $pdf = PDF::loadView('pdf_equipos.pdf3', compact('equipos','area','unidad','usuario'))->setPaper(array(0, 0, 612, 792), 'portrait');
                                return $pdf->stream();
                            }
                            else
                            {
                                if (($request->unidad_id)!=null &&
                                    ($request->area_id)!=null) 
                                    {
                                        $equipos = E_informatico::where('area_id', $request->area_id)->get();
                                                        
                                        
                                        $pdf = PDF::loadView('pdf_equipos.pdf4', compact('equipos','area','unidad'))->setPaper(array(0, 0, 612, 792), 'portrait');
                                        return $pdf->stream();
                                    }
                                    else
                                    {
                                        if (($request->unidad_id)!=null &&
                                            ($request->usuario_id)!=null) 
                                            {
                                                $equipos = E_informatico::where('usuario_id', $request->usuario_id)->get();
                                                        
                                                $pdf = PDF::loadView('pdf_equipos.pdf5', compact('equipos','usuario','unidad'))->setPaper(array(0, 0, 612, 792), 'portrait');
                                                return $pdf->stream();
                                            }
                                            else
                                            {
                                                if (($request->unidad_id)!=null) 
                                                    {
                                                        $equipos = E_informatico::where('unidad_id', $request->unidad_id)->get();
                                                        
                                                        $pdf = PDF::loadView('pdf_equipos.pdf6', compact('equipos','unidad'))->setPaper(array(0, 0, 612, 792), 'portrait');
                                                        return $pdf->stream();
                                                    }
                                            }
                                    }
                            }
                                
                    }

            }  
        return ('hola');
        //return view('equipounidads.show')->with('equipounidad', $equipounidad);
    }
}
    


