@extends('layout.main')

@section('csslibrary')
    <link rel="stylesheet" href="/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/modules/izitoast/css/iziToast.min.css">
@stop

@section('title', 'Data Pegawai')

@section('content')
    <div class="section-header">
        <h1>@yield('title')</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('create') }}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-solid fa-plus"></i>
                Tambah Data
            </a>
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
                                            <img src="{{ asset('images') . '/' . $item->foto }}" width="50"
                                                height="50">
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-icon btn-info"><i
                                                    class="fa fa-solid fa-info"></i></a>
                                            <a href="{{ route('pegawai.edit', ['id' => $item->id]) }}"
                                                class="btn btn-icon btn-warning"><i class="fa fa-regular fa-pen"></i></a>
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

@section('jslibrary')
    <script src="/assets/modules/datatables/datatables.min.js"></script>
    <script src="/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="/assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/modules/izitoast/js/iziToast.min.js"></script>
    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
@stop

@section('datatable')
    <script>
        $("#table-1").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [2, 3]
            }]
        });
    </script>
@stop
