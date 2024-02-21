<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $spps = DB::table('spps')->get();
        // return ke view dan kirirmkan data $genres
        return view('spp.sppc.index', compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("spp.sppc.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "tahun"=> "required|min:4",
            "nominal"=> "required|min:4",
        ]);

        $query = DB::table("spps")->insert([
            'tahun' => $request["tahun"],
            'nominal' => $request["nominal"],
        ]);
        return redirect()->route("spp.sppc.index")->with(["success" =>"Data telah ditambahkan!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $spp = DB::table("spps")->where('id', $id)->first();
        return view('spp.sppc.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "tahun"=> "required|min:4",
            "nominal"=> "required|min:4",
        ]);

        $query = DB::table("spps")->where('id', $id)->update([
            'tahun' => $request["tahun"],
            'nominal' => $request["nominal"],
        ]);
        return redirect()->route("spp.sppc.index")->with(["success" =>"Data telah diubah!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sppHapus = DB::table('spps')->where('id', $id)->delete();
        return redirect()->route('spp.sppc.index')->with(['success'=> 'Data berhasil dihapus!']);
    }
}
