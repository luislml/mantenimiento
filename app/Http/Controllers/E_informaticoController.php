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


class E_informaticoController extends AppBaseController
{

  
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
        return view('e_informaticos.create');
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

        $eInformatico = $this->eInformaticoRepository->create($input);

        Flash::success('E Informatico saved successfully.');

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

        if (empty($eInformatico)) {
            Flash::error('E Informatico not found');

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

        if (empty($eInformatico)) {
            Flash::error('E Informatico not found');

            return redirect(route('eInformaticos.index'));
        }

        return view('e_informaticos.edit')->with('eInformatico', $eInformatico);
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
            Flash::error('E Informatico not found');

            return redirect(route('eInformaticos.index'));
        }

        $eInformatico = $this->eInformaticoRepository->update($request->all(), $id);

        Flash::success('E Informatico updated successfully.');

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
            Flash::error('E Informatico not found');

            return redirect(route('eInformaticos.index'));
        }

        $this->eInformaticoRepository->delete($id);

        Flash::success('E Informatico deleted successfully.');

        return redirect(route('eInformaticos.index'));
    }
}
