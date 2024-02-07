@extends('template.master')

@push('css')
<link href="{{asset('adminkit/static/css/app.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
@endpush

@section('header', 'Input data spp')

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
                <a href="{{ route('spp.sppc.create') }}" class="btn btn-primary">
                    <i class="align-middle me-2" data-feather="plus-square"></i> <span
                        class="align-middle">Tambah</span>
                </a>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>Id Spp</th>
                        <th class="d-none d-xl-table-cell">Tahun</th>
                        <th class="d-none d-xl-table-cell">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($spps as $key => $value)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            {{ $value->tahun }}
                        </td>
                        <td>
                            {{ $value->nominal }}
                        </td>
                        <td>
                            <form action="{{ route('spp.sppc.destroy', $value->id_spp) }}" method="post"
                                style="display: inline">
                                <a href="{{ route('spp.sppc.show', $value->id_spp) }}" class="btn btn-sm btn-info">
                                    Detail
                                </a>
                                <a href="{{ route('spp.sppc.edit', $value->id_spp) }}" class="btn btn-sm btn-warning">
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
