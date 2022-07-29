<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedosenRequest;
use App\Http\Requests\UpdatedosenRequest;
use App\Repositories\dosenRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\mata_kuliah;
use Illuminate\Http\Request;
use Flash;
use Response;

class dosenController extends AppBaseController
{
    /** @var dosenRepository $dosenRepository*/
    private $dosenRepository;

    public function __construct(dosenRepository $dosenRepo)
    {
        $this->dosenRepository = $dosenRepo;
    }

    /**
     * Display a listing of the dosen.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dosens = $this->dosenRepository->all();

        return view('dosens.index')
            ->with('dosens', $dosens);
    }

    /**
     * Show the form for creating a new dosen.
     *
     * @return Response
     */
    public function create()
    {
        $matkul = mata_kuliah::all();
        return view('dosens.create', ["matkuls" => $matkul]);
    }

    /**
     * Store a newly created dosen in storage.
     *
     * @param CreatedosenRequest $request
     *
     * @return Response
     */
    public function store(CreatedosenRequest $request)
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
            $request->foto->move(public_path('/dosen'), $imageName);

            $path = "dosen/" . $imageName;
        }

        $input['foto'] = $path;
        $dosen = $this->dosenRepository->create($input);

        Flash::success('Dosen saved successfully.');

        return redirect(route('dosens.index'));
    }

    /**
     * Display the specified dosen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dosen = $this->dosenRepository->find($id);

        if (empty($dosen)) {
            Flash::error('Dosen not found');

            return redirect(route('dosens.index'));
        }

        return view('dosens.show')->with('dosen', $dosen);
    }

    /**
     * Show the form for editing the specified dosen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dosen = $this->dosenRepository->find($id);
        $matkul = mata_kuliah::all();
        if (empty($dosen)) {
            Flash::error('Dosen not found');

            return redirect(route('dosens.index'));
        }

        return view('dosens.edit')->with(['dosen' => $dosen, 'matkuls' => $matkul]);
    }

    /**
     * Update the specified dosen in storage.
     *
     * @param int $id
     * @param UpdatedosenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedosenRequest $request)
    {
        $dosen = $this->dosenRepository->find($id);
        $input = $request->all();
        if (empty($dosen)) {
            Flash::error('Dosen not found');

            return redirect(route('dosens.index'));
        }
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
            $request->foto->move(public_path('/dosen'), $imageName);

            $path = "dosen/" . $imageName;
            $input['foto'] = $path;
        }

        $dosen = $this->dosenRepository->update($input, $id);

        Flash::success('Dosen updated successfully.');

        return redirect(route('dosens.index'));
    }

    /**
     * Remove the specified dosen from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dosen = $this->dosenRepository->find($id);

        if (empty($dosen)) {
            Flash::error('Dosen not found');

            return redirect(route('dosens.index'));
        }

        $this->dosenRepository->delete($id);

        Flash::success('Dosen deleted successfully.');

        return redirect(route('dosens.index'));
    }
}
