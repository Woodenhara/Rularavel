@extends('template.master')

@section('header', 'Input data petugas')

@section('event')
<div class="col-12 col-lg-flex w-100">
    <div class="card">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h5 class="card-title mb-0">Username</h5>
            </div>
            <div class="card-body">
                <input type="text" name="username" class="form-control @error('username') {{ 'is-invalid' }} @enderror"
                    placeholder="Ketik disini" autocomplete="off" value="{{@old('username')}}">
                @error('username')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Password</h5>
            </div>
            <div class="card-body">
                <input type="text" name="password" class="form-control @error('password') {{ 'is-invalid' }} @enderror"
                    placeholder="Ketik disini" autocomplete="off" value="{{@old('password')}}">
                @error('password')
                <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Nama Petugas</h5>
            </div>
            <div class="card-body">
                <input type="text" name="nama_petugas"
                    class="form-control @error('nama_petugas') {{ 'is-invalid' }} @enderror" placeholder="Ketik disini"
                    autocomplete="off" value="{{@old('nama_petugas')}}">
                @error('nama_petugas')
                <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Level Entry</h5>
            </div>
            <div class="card-body">
                <div>
                    <label class="form-check">
                        <input class="form-check-input" type="radio" value="admin" name="level">
                        <span class="form-check-label">
                            Admin
                        </span>
                    </label>
                    <label class="form-check">
                        <input class="form-check-input" type="radio" value="petugas" name="level">
                        <span class="form-check-label">
                            Petugas
                        </span>
                    </label>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
        </form>
    </div>
</div>
@endsection
