@extends('template.master')

@push('css')
<link href="{{asset('adminkit/static/css/app.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
@endpush

@section('header', 'Input data user')

@section('event')
<div class="card-header">
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">
        <i class="align-middle me-2" data-feather="plus-square"></i> <span
            class="align-middle">Tambah</span>
    </a>
</div>
@endsection

@push('js')
<script src="{{asset('adminkit/static/js/app.js')}}"></script>
@endpush
