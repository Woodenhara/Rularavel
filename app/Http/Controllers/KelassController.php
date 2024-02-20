<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use App\Http\Requests\StoreKelassRequest;
use App\Http\Requests\UpdateKelassRequest;

class KelassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kelass = Kelass::select('id', 'nama_kelas', 'kompetensi_keahlian')->get();
        return view('spp.kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('spp.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelassRequest $request, Kelass $kelass)
    {
        // dd($request);
        $kelass->create($request->all());
        return redirect()->route('kelass.index')
        ->with(['success' => 'Data '.$request['nama_kelas'].' berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelass $kelass)
    {
        return view('spp.kelas.show', compact('kelass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelass $kelass)
    {
        //
        return view('spp.kelas.edit', compact('kelass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelassRequest $request, Kelass $kelass)
    {
        //
        $kelass->update($request->all());
        return redirect()->route('kelass.index')
        ->with(['success' => 'Data '.$request['nama_kelas'].' berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelass $kelass)
    {
        //
        $kelass->delete();
        return redirect()->route('kelass.index');
    }
}
