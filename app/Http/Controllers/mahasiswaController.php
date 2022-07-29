<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemahasiswaRequest;
use App\Http\Requests\UpdatemahasiswaRequest;
use App\Repositories\mahasiswaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class mahasiswaController extends AppBaseController
{
    /** @var mahasiswaRepository $mahasiswaRepository*/
    private $mahasiswaRepository;

    public function __construct(mahasiswaRepository $mahasiswaRepo)
    {
        $this->mahasiswaRepository = $mahasiswaRepo;
    }

    /**
     * Display a listing of the mahasiswa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mahasiswas = $this->mahasiswaRepository->all();

        return view('mahasiswas.index')
            ->with('mahasiswas', $mahasiswas);
    }

    /**
     * Show the form for creating a new mahasiswa.
     *
     * @return Response
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created mahasiswa in storage.
     *
     * @param CreatemahasiswaRequest $request
     *
     * @return Response
     */
    public function store(CreatemahasiswaRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([

                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/mahasiswa'), $imageName);

            $path = "mahasiswa/" . $imageName;
        }

        $input['foto'] = $path;

        $mahasiswa = $this->mahasiswaRepository->create($input);

        Flash::success('Mahasiswa saved successfully.');

        return redirect(route('mahasiswas.index'));
    }

    /**
     * Display the specified mahasiswa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mahasiswa = $this->mahasiswaRepository->find($id);

        if (empty($mahasiswa)) {
            Flash::error('Mahasiswa not found');

            return redirect(route('mahasiswas.index'));
        }

        return view('mahasiswas.show')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for editing the specified mahasiswa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mahasiswa = $this->mahasiswaRepository->find($id);

        if (empty($mahasiswa)) {
            Flash::error('Mahasiswa not found');

            return redirect(route('mahasiswas.index'));
        }

        return view('mahasiswas.edit')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Update the specified mahasiswa in storage.
     *
     * @param int $id
     * @param UpdatemahasiswaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemahasiswaRequest $request)
    {
        $mahasiswa = $this->mahasiswaRepository->find($id);

        if (empty($mahasiswa)) {
            Flash::error('Mahasiswa not found');

            return redirect(route('mahasiswas.index'));
        }
        $input = $request->all();
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([

                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/mahasiswa'), $imageName);

            $path = "mahasiswa/" . $imageName;
        }

        $input['foto'] = $path;
        $mahasiswa = $this->mahasiswaRepository->update($input, $id);

        Flash::success('Mahasiswa updated successfully.');

        return redirect(route('mahasiswas.index'));
    }

    /**
     * Remove the specified mahasiswa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mahasiswa = $this->mahasiswaRepository->find($id);

        if (empty($mahasiswa)) {
            Flash::error('Mahasiswa not found');

            return redirect(route('mahasiswas.index'));
        }

        $this->mahasiswaRepository->delete($id);

        Flash::success('Mahasiswa deleted successfully.');

        return redirect(route('mahasiswas.index'));
    }
}
