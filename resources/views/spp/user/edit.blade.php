@extends('template.master')

@section('header', 'Input data petugas')

@section('event')
<div class="col-12 col-lg-flex w-100">
    <div class="card">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h5 class="card-title mb-0">Username</h5>
            </div>
            <div class="card-body">
                <input type="text" name="username" class="form-control @error('username') {{ 'is-invalid' }} @enderror"
                    placeholder="Ketik disini" autocomplete="off" value="{{ $user->username }}">
                @error('username')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Email</h5>
            </div>
            <div class="card-body">
                <input type="text" name="email" class="form-control @error('email') {{ 'is-invalid' }} @enderror"
                    placeholder="Ketik disini" autocomplete="off" value="{{ $user->email }}">
                @error('email')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Password</h5>
            </div>
            <div class="card-body">
                <input type="password" name="password"
                    class="form-control @error('password') {{ 'is-invalid' }} @enderror" placeholder="Ketik disini"
                    autocomplete="off" value="{{ $user->password }}">
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
                    autocomplete="off" value="{{ $user->nama_petugas }}">
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
                        <span class="form-check-label" id="radad">
                            Admin
                        </span>
                    </label>
                    <label class="form-check">
                        <input class="form-check-input" type="radio" value="petugas" name="level">
                        <span class="form-check-label" id="radpet">
                            Petugas
                        </span>
                    </label>
                    <div class="card-footer">
                        <div class="px-3 d-flex justify-content-between align-items-center">
                            <button type="reset" class="btn btn-info">Reset</button>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <script>
                fetch('/api/getUserLevel')
                    .then(response => response.json())
                    .then(data => {
                        var userLevel = data.level;
                        if (userLevel === "admin") {
                            document.getElementById("radad").checked = true;
                        } else if (userLevel === "petugas") {
                            document.getElementById("radpet").checked = true;
                        }
                    })
                    .catch(error => console.error('Error fetching data:', error));
            </script> --}}
        </form>
    </div>
</div>
@endsection
