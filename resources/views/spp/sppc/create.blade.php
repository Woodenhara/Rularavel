@extends('template.master')

@section('header', 'Input data spp')

@section('event')
<div class="col-12 col-lg-flex w-100">
    <div class="card">
        <form action="{{ route('spp.sppc.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h5 class="card-title mb-0">Masukkan tahun</h5>
            </div>
            <div class="card-body">
                <input type="text" name="tahun" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('tahun')}}">
                @error('tahun')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Masukkan nominal</h5>
            </div>
            <div class="card-body">
                <input type="text" name="nominal" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('nominal')}}">
                @error('nominal')
                <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
