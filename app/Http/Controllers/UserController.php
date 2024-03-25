<?php

namespace App\Http\Controllers;
use App\Models\User;
use Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::all();
        return view('spp.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('spp.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        //
        $request->validate([
            'username'     => 'required',
            'email'        => 'required|email',
            'password'     => 'required|min:8',
            'nama_petugas' => 'required|min:2',
            'level'        => 'required|in:admin,petugas',
        ]);

        $user->create($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return view('spp.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('spp.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'username'     => 'required',
            'email'        => 'required|email',
            'password'     => 'required|min:8',
            'nama_petugas' => 'required|min:2',
            'level'        => 'required|in:admin,petugas',
        ]);

        $user->update($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('user.index');
    }
}
