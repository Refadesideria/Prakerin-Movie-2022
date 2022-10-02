@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Durasi Film
                        <button type="button" class="btn btn-sm btn-outline-primary" style="float:right" data-toggle="modal"
                            data-target="#addDurasiFilm">
                            Tambah Data
                        </button>
                        @include('admin.durasiFilm.create')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Durasi</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($durasis as $durasi)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $durasi->durasi }}</td>
                                            <td>
                                                <form action="{{ route('durasi_film.destroy', $durasi->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-sm btn-outline-warning"
                                                        data-toggle="modal"
                                                        data-target="#editdurasiFilm-{{ $durasi->id }}">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-info"
                                                        data-toggle="modal"
                                                        data-target="#showdurasiFilm-{{ $durasi->id }}">
                                                        Show
                                                    </button>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @include('admin.durasiFilm.edit')
                                        @include('admin.durasiFilm.show')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection