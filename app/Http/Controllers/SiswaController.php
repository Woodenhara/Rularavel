<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kelass;
use App\Models\Siswas;
use App\Models\Spp;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswas::all();
        $kelas = Kelass::all(['id', 'nama_kelas']);
        $spp = Spp::all(['id']);
        return view('spp.siswa.index', [
            'siswa' => $siswa,
            'kelas' => $kelas,
            'spp' => $spp,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('spp.siswa.create', [
        'kelas' => Kelass::all(['id', 'nama_kelas']),
        'spp' => Spp::all(['id']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Siswas $siswa)
    {
        $request->validate([
            'nisn'       => 'required|numeric',
            'nis'        => 'required',
            'nama'       => 'required',
            'id_kelas'   => 'required',
            'alamat'     => 'required|min:2',
            'no_telp'    => 'required|min:10',
            'id_spp'     => 'required',
        ]);

        $siswa->create($request->all());
        return redirect()->route('siswa.index')
        ->with(['success' => 'Data '.$request['nama'].' berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswas $siswa)
    {
        //
        // return view('spp.siswa.show', compact('siswas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswas $siswa)
    {
        //
        return view('spp.siswa.edit', compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswas $siswa)
    {
        //
        $request->validate([
            'nisn'       => 'required|numeric',
            'nis'        => 'required',
            'nama'       => 'required',
            'id_kelas'   => 'required',
            'alamat'     => 'required|min:2',
            'no_telp'    => 'required|min:10',
            'id_spp'     => 'required',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index')
        ->with(['success' => 'Data '.$request['nama'].' berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswas $siswa)
    {
        //
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
