@extends('template.master')

@section('header', 'Input data kelas')

@section('event')
<div class="col-12 col-lg-flex w-100">
    <div class="card">
        <form action="{{ route('kelass.update', $kelass->id_kelas) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h5 class="card-title mb-0">Nama Kelas</h5>
            </div>
            <div class="card-body">
                <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{ $kelass->nama_kelas }}">
                @error('nama_kelas')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Kompetensi Keahlian</h5>
            </div>
            <div class="card-body">
                <input type="text" name="kompetensi_keahlian" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{ $kelass->kompetensi_keahlian }}">
                @error('kompetensi_keahlian')
                <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-footer">
                <div class="px-3 d-flex justify-content-between align-items-center">
                    <button type="reset" class="btn btn-info">Reset</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
