@extends('template.master')

@section('header', 'Input data spp')

@section('event')
<div class="col-md-12 col-lg-flex">
    <div class="card">
        <form action="{{ route('spp.sppc.update', $spp->id_spp)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h5 class="card-title mb-0">Masukkan tahun</h5>
            </div>
            <div class="card-body">
                <input type="text" name="tahun" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{ $spp->tahun }}">
                @error('tahun')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Masukkan nominal</h5>
            </div>
            <div class="card-body">
                <input type="text" name="nominal" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{ $spp->nominal }}">
                @error('nominal')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
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
