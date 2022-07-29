<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmata_kuliahRequest;
use App\Http\Requests\Updatemata_kuliahRequest;
use App\Repositories\mata_kuliahRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class mata_kuliahController extends AppBaseController
{
    /** @var mata_kuliahRepository $mataKuliahRepository*/
    private $mataKuliahRepository;

    public function __construct(mata_kuliahRepository $mataKuliahRepo)
    {
        $this->mataKuliahRepository = $mataKuliahRepo;
    }

    /**
     * Display a listing of the mata_kuliah.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mataKuliahs = $this->mataKuliahRepository->all();

        return view('mata_kuliahs.index')
            ->with('mataKuliahs', $mataKuliahs);
    }

    /**
     * Show the form for creating a new mata_kuliah.
     *
     * @return Response
     */
    public function create()
    {
        return view('mata_kuliahs.create');
    }

    /**
     * Store a newly created mata_kuliah in storage.
     *
     * @param Createmata_kuliahRequest $request
     *
     * @return Response
     */
    public function store(Createmata_kuliahRequest $request)
    {
        $input = $request->all();

        $mataKuliah = $this->mataKuliahRepository->create($input);

        Flash::success('Mata Kuliah saved successfully.');

        return redirect(route('mataKuliahs.index'));
    }

    /**
     * Display the specified mata_kuliah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mataKuliah = $this->mataKuliahRepository->find($id);

        if (empty($mataKuliah)) {
            Flash::error('Mata Kuliah not found');

            return redirect(route('mataKuliahs.index'));
        }

        return view('mata_kuliahs.show')->with('mataKuliah', $mataKuliah);
    }

    /**
     * Show the form for editing the specified mata_kuliah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mataKuliah = $this->mataKuliahRepository->find($id);

        if (empty($mataKuliah)) {
            Flash::error('Mata Kuliah not found');

            return redirect(route('mataKuliahs.index'));
        }

        return view('mata_kuliahs.edit')->with('mataKuliah', $mataKuliah);
    }

    /**
     * Update the specified mata_kuliah in storage.
     *
     * @param int $id
     * @param Updatemata_kuliahRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemata_kuliahRequest $request)
    {
        $mataKuliah = $this->mataKuliahRepository->find($id);

        if (empty($mataKuliah)) {
            Flash::error('Mata Kuliah not found');

            return redirect(route('mataKuliahs.index'));
        }

        $mataKuliah = $this->mataKuliahRepository->update($request->all(), $id);

        Flash::success('Mata Kuliah updated successfully.');

        return redirect(route('mataKuliahs.index'));
    }

    /**
     * Remove the specified mata_kuliah from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mataKuliah = $this->mataKuliahRepository->find($id);

        if (empty($mataKuliah)) {
            Flash::error('Mata Kuliah not found');

            return redirect(route('mataKuliahs.index'));
        }

        $this->mataKuliahRepository->delete($id);

        Flash::success('Mata Kuliah deleted successfully.');

        return redirect(route('mataKuliahs.index'));
    }
}
