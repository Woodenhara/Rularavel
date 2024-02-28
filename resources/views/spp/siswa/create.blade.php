@extends('template.master')

@section('header', 'Input data siswa')

@section('event')
<div class="col-12 col-lg-flex w-100">
    <div class="card">
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h5 class="card-title mb-0">NISN</h5>
            </div>
            <div class="card-body">
                <input type="text" name="nisn" class="form-control @error('nisn') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('nisn')}}">
                @error('nisn')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">NIS</h5>
            </div>
            <div class="card-body">
                <input type="text" name="nis" class="form-control @error('nis') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('nis')}}">
                @error('nis')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Nama Siswa</h5>
            </div>
            <div class="card-body">
                <input type="text" name="nama" class="form-control @error('nama') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('nama')}}">
                @error('nama')
                <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Id Kelas</h5>
            </div>
            <div class="card-body">
                <select name="id_kelas" class="form-select mb-3">
                    <option selected disabled>Pilih Id</option>
                    @foreach ($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Alamat</h5>
            </div>
            <div class="card-body">
                <input type="text" name="alamat" class="form-control @error('alamat') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('alamat')}}">
                @error('alamat')
                <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Nomer Telepon</h5>
            </div>
            <div class="card-body">
                <input type="text" name="no_telp" class="form-control @error('no_telp') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('no_telp')}}">
                @error('no_telp')
                <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Id Spp</h5>
            </div>
            <div class="card-body">
                <select name="id_spp" class="form-select mb-3">
                    <option selected disabled>Pilih Id</option>
                    @foreach ($spp as $sp)
                    <option value="{{ $sp->id }}">{{ $sp->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
