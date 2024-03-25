<?php

namespace App\Http\Controllers;
use App\Models\{
    Pembayaran,
    User,
    Spp,
    Siswas,
};

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pembayaran = Pembayaran::all();
        $user = User::all(['id', 'username']);
        $siswa = Siswas::all(['nisn', 'nama']);
        $spp = Spp::all(['id']);
        return view('spp.pembayaran.index', [
            'pembayarans' => $pembayaran,
            'user' => $user,
            'siswas' => $siswa,
            'spp' => $spp,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('spp.pembayaran.create', [
            'user' => User::all(['id', 'username']),
            'siswas' => Siswas::all(['nisn', 'nama']),
            'spp' => Spp::all(['id']),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pembayaran $pembayaran)
    {
        //
        $request->validate([
            'id_user'        => 'required',
            'nisn'           => 'required|numeric',
            'tgl_bayar'      => 'required|date',
            'id_spp'         => 'required|numeric',
            'jumlah_bayar'   => 'required|numeric',
        ]);

        $pembayaran->update($request->all());
        return redirect()->route('pembayaran.index')
        ->with(['success' => 'Data '.$request['nisn'].' berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
        return view('spp.pembayaran.edit', compact('pembayarans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
        $request->validate([
            'id_user'        => 'required',
            'nisn'           => 'required|numeric',
            'tgl_bayar'      => 'required|date',
            'id_spp'         => 'required|numeric',
            'jumlah_bayar'   => 'required|numeric',
        ]);

        $pembayaran->update($request->all());
        return redirect()->route('pembayaran.index')
        ->with(['success' => 'Data '.$request['nisn'].' berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
        $pembayaran->delete();
        return redirect()->route('pembayaran.index');
    }
}
