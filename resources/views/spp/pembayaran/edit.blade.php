@extends('template.master')

@section('header', 'Input data pembayaran')

@section('event')
<div class="col-12 col-lg-flex w-100">
    <div class="card">
        <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h5 class="card-title mb-0">Id User</h5>
            </div>
            <div class="card-body">
                <select name="id_user" class="form-select mb-3">
                    <option selected disabled>Pilih Id</option>
                    @foreach ($id_user as $u)
                    @if ($u->id == $pembayaran->id_user || $u->id == old('id_user'))
                            <option selected value="{{ $u->id_user }}">{{ $u->id }}</option>
                        @else
                            <option value="{{ $u->id }}">{{ $u->id }}</option>
                        @endif
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
                    @if ($n->nisn == $pembayaran->nisn || $n->nisn == old('nisn'))
                            <option selected value="{{ $n->nisn }}">{{ $n->nisn }}</option>
                        @else
                            <option value="{{ $n->nisn }}">{{ $n->nisn }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="card-header">
                <h5 class="card-title mb-0">Tanggal Bayar</h5>
            </div>
            <div class="card-body">
                <input type="date" name="tgl_bayar" class="form-control @error('tgl_bayar') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{ $pembayaran->tgl_bayar }}">
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
                    @if ($s->id == $pembayaran->id || $s->id == old('id'))
                            <option selected value="{{ $s->id }}">{{ $s->id }}</option>
                        @else
                            <option value="{{ $s->id }}">{{ $s->id }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="card-header">
                <h5 class="card-title mb-0">Jumlah Dibayar</h5>
            </div>
            <div class="card-body">
                <input type="text" name="jumlah_bayar" class="form-control @error('jumlah_bayar') {{ 'is-invalid' }} @enderror"
                    id="exampleInputEmail1" placeholder="Ketik disini" autocomplete="off" value="{{ $pembayaran->jumlah_bayar }}">
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
