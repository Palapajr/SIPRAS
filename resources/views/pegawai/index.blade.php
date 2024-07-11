@extends('layout.main')

@section('title', 'Data Pegawai')

@section('content')
    <div class="section-header">
        <h1>@yield('title')</h1>
        <div class="section-header-breadcrumb">
            <button type="button" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#exampleModal"><i
                    class="fa fa-solid fa-plus"></i>
                Tambah Data
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama</th>
                                    <th>NPK</th>
                                    <th>No Hp</th>
                                    <th>Jabatan</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr class="text-center">
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->npk }}</td>
                                        <td>{{ $item->nohp }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>
                                            <img src="{{ asset('upload') . '/' . $item->foto }}" width="50"
                                                height="50">
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-icon btn-info"><i
                                                    class="fa fa-solid fa-info"></i></a>
                                            <a href="#" class="btn btn-icon btn-warning"><i
                                                    class="fa fa-regular fa-pen"></i></a>
                                            <a href="#" class="btn btn-icon btn-danger"><i
                                                    class="fa fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
