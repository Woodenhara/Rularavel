@extends('template.master')

@push('css')
<link href="{{asset('adminkit/static/css/app.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
@endpush

@section('header', 'Input data user')

@section('event')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="row">
    <div class="col-12 d-flex w-100">
        <div class="card flex-fill">
            <div class="card-header">
                <a href="{{ route('user.create') }}" class="btn btn-primary">
                    <i class="align-middle me-2" data-feather="plus-square"></i> <span
                        class="align-middle">Tambah</span>
                </a>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>Id Kelas</th>
                        <th class="d-none d-xl-table-cell">Username</th>
                        <th class="d-none d-xl-table-cell">Password</th>
                        <th class="d-none d-xl-table-cell">Nama Petugas</th>
                        <th class="d-none d-xl-table-cell">Level</th>
                        <th class="d-none d-xl-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($user as $key => $value)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            {{ $value->username }}
                        </td>
                        <td>
                            {{ $value->password }}
                        </td>
                        <td>
                            {{ $value->nama_petugas }}
                        </td>
                        <td>
                            {{ $value->level }}
                        </td>
                        <td>
                            <form action="{{ route('kelass.destroy', $value->id) }}" method="post"
                                style="display: inline">
                                <a href="{{ route('kelass.show', $value->id) }}" class="btn btn-sm btn-info">
                                    Detail
                                </a>
                                <a href="{{ route('kelass.edit', $value->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-sm btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>Data Masih Kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{asset('adminkit/static/js/app.js')}}"></script>
@endpush
