@extends('template.master')

@section('header', 'Input data pembayaran')

@section('event')
<div class="col-12 col-lg-flex w-100">
    <div class="card">
        <form action="{{ route('pembayaran.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h5 class="card-title mb-0">Id User</h5>
            </div>
            <div class="card-body">
                <select name="id_user" class="form-select mb-3">
                    <option selected disabled>Pilih Id</option>
                    @foreach ($user as $u)
                    <option value="{{ $u->id }}">{{ $u->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">NISN</h5>
            </div>
            <div class="card-body">
                <select name="nisn" class="form-select mb-3">
                    <option selected disabled>Pilih nama</option>
                    @foreach ($siswas as $n)
                    <option value="{{ $n->nisn }}">{{ $n->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Tanggal Bayar</h5>
            </div>
            <div class="card-body">
                <input type="date" name="tgl_bayar" class="form-control @error('tgl_bayar') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('tgl_bayar')}}">
                @error('tgl_bayar')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Id Spp</h5>
            </div>
            <div class="card-body">
                <select name="id_spp" class="form-select mb-3">
                    <option selected disabled>Pilih id</option>
                    @foreach ($spp as $s)
                    <option value="{{ $s->id }}">{{ $s->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-header">
                <h5 class="card-title mb-0">Jumlah Dibayar</h5>
            </div>
            <div class="card-body">
                <input type="text" name="jumlah_bayar" class="form-control @error('jumlah_bayar') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{@old('jumlah_bayar')}}">
                @error('jumlah_bayar')
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
