<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetutorialRequest;
use App\Http\Requests\UpdatetutorialRequest;
use App\Repositories\tutorialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tutorialController extends AppBaseController
{
    /** @var  tutorialRepository */
    private $tutorialRepository;

    public function __construct(tutorialRepository $tutorialRepo)
    {
        $this->tutorialRepository = $tutorialRepo;
    }

    /**
     * Display a listing of the tutorial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        return view('tutorials.index');
    }

    /**
     * Show the form for creating a new tutorial.
     *
     * @return Response
     */
    public function create()
    {
        return view('tutorials.create');
    }

    /**
     * Store a newly created tutorial in storage.
     *
     * @param CreatetutorialRequest $request
     *
     * @return Response
     */
    public function store(CreatetutorialRequest $request)
    {
        $input = $request->all();

        $tutorial = $this->tutorialRepository->create($input);

        Flash::success('Tutorial saved successfully.');

        return redirect(route('tutorials.index'));
    }

    /**
     * Display the specified tutorial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tutorial = $this->tutorialRepository->find($id);

        if (empty($tutorial)) {
            Flash::error('Tutorial not found');

            return redirect(route('tutorials.index'));
        }

        return view('tutorials.show')->with('tutorial', $tutorial);
    }

    /**
     * Show the form for editing the specified tutorial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tutorial = $this->tutorialRepository->find($id);

        if (empty($tutorial)) {
            Flash::error('Tutorial not found');

            return redirect(route('tutorials.index'));
        }

        return view('tutorials.edit')->with('tutorial', $tutorial);
    }

    /**
     * Update the specified tutorial in storage.
     *
     * @param int $id
     * @param UpdatetutorialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetutorialRequest $request)
    {
        $tutorial = $this->tutorialRepository->find($id);

        if (empty($tutorial)) {
            Flash::error('Tutorial not found');

            return redirect(route('tutorials.index'));
        }

        $tutorial = $this->tutorialRepository->update($request->all(), $id);

        Flash::success('Tutorial updated successfully.');

        return redirect(route('tutorials.index'));
    }

    /**
     * Remove the specified tutorial from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tutorial = $this->tutorialRepository->find($id);

        if (empty($tutorial)) {
            Flash::error('Tutorial not found');

            return redirect(route('tutorials.index'));
        }

        $this->tutorialRepository->delete($id);

        Flash::success('Tutorial deleted successfully.');

        return redirect(route('tutorials.index'));
    }
}
