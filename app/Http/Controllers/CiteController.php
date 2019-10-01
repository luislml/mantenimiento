<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCiteRequest;
use App\Http\Requests\UpdateCiteRequest;
use App\Repositories\CiteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Gestion;
use App\Models\Cite;
use PDF;
class CiteController extends AppBaseController
{
    /** @var  CiteRepository */
    private $citeRepository;

    public function __construct(CiteRepository $citeRepo)
    {
        $this->citeRepository = $citeRepo;
        $this->middleware([
                        'auth','rol:Admin,operador'
                    ]);
    }

    /**
     * Display a listing of the Cite.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cites = Cite::all();
        $gestion = Gestion::find(1);
        $cite = Cite::find(2);
        $dato=$gestion->id;
        $dato++;
        
        //dd($cite->mantenimiento->equipos->usuario['nombre'],['apellido']);

        return view('cites.index')
            ->with('cites', $cites)
            ->with('gestion', $gestion);
    }

    /**
     * Show the form for creating a new Cite.
     *
     * @return Response
     */
    public function create()
    {
        return view('cites.create');
    }

    /**
     * Store a newly created Cite in storage.
     *
     * @param CreateCiteRequest $request
     *
     * @return Response
     */
    public function store(CreateCiteRequest $request)
    {
        $input = $request->all();

        $cite = $this->citeRepository->create($input);

        Flash::success('Cite saved successfully.');

        return redirect(route('cites.index'));
    }


    /**
     * Display the specified Cite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cite = $this->citeRepository->find($id);
        

        if (empty($cite)) {
            Flash::error('Cite not found');

            return redirect(route('cites.index'));
        }

        $pdf = PDF::loadView('cites.pdf', compact('cite'))->setPaper(array(0, 0, 612, 792), 'portrait');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified Cite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cite = $this->citeRepository->find($id);

        if (empty($cite)) {
            Flash::error('Cite not found');

            return redirect(route('cites.index'));
        }

        return view('cites.edit')->with('cite', $cite);
    }

    /**
     * Update the specified Cite in storage.
     *
     * @param int $id
     * @param UpdateCiteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCiteRequest $request)
    {
        $cite = $this->citeRepository->find($id);
       
        if (empty($cite)) {
            Flash::error('Cite not found');

            return redirect(route('cites.index'));
        }

        $cite = $this->citeRepository->update($request->all(), $id);

        Flash::success('Cite updated successfully.');

        return redirect(route('cites.index'));
    }
    public function gestion(UpdateCiteRequest $request)
    {

        $gestion = Gestion::find($request->id);
        
        
        if (empty($gestion)) {
            Flash::error('Cite not found');

            return redirect(route('cites.index'));
        }
        $cite = new Cite;
        $cite->gestion_id = "1";
        $cite->cite = "0";
        $cite->save();

        $gestion->update($request->all());

        Flash::success('Gestion iniciada correctamente.');

        return redirect(route('cites.index'));
    }
    public function cerrargestion()
    {

        $gestion = Gestion::find(1);
        
        $gestion->estado = 'cerrado';
        
        if (empty($gestion)) {
            Flash::error('Cite not found');

            return redirect(route('cites.index'));
        }

        $gestion->save();

        Flash::success('Gestion Cerrada.');

        return redirect(route('cites.index'));
    }

    /**
     * Remove the specified Cite from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cite = $this->citeRepository->find($id);

        if (empty($cite)) {
            Flash::error('Cite not found');

            return redirect(route('cites.index'));
        }

        $this->citeRepository->delete($id);

        Flash::success('Cite deleted successfully.');

        return redirect(route('cites.index'));
    }
}
