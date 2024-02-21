@extends('template.master')

@push('css')
<link href="{{asset('adminkit/static/css/app.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
@endpush

@section('header', 'Input data spp')

@section('event')

<div class="col-12 col-lg-20">
    <div class="card">
        <div class="card-body">
            <h1>Ini page pembayaran</h1>
            <p class="text-muted"><h3>Selamat Datang {{ Auth::user()->nama_petugas }}</h3></p>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="{{asset('adminkit/static/js/app.js')}}"></script>
@endpush
