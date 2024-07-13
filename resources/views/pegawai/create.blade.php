@extends('layout.main')

@section('csslibrary')
<link rel="stylesheet" href="/assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">

@stop

@section('title', 'Tambah Data Pegawai')

@section('content')
<div class="section-header">
    <h1>@yield('title')</h1>
    <div class="section-header-breadcrumb">

    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
            <h4>@yield('title')</h4>
            </div>

                <div class="modal-body">
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>NPK</label>
                                <input type="text" class="form-control @error('npk') is-invalid @enderror" value="{{ old('npk') }}"
                                    name="npk">
                                @error('npk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Pegawai</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" name="nama">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                {{-- <input type="text" class="form-control datepicker" name="tanggal_lahir"> --}}
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}" name="tanggal_lahir">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                    <option>Silakan pilih</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor Hp</label>
                                <input type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp">
                                @error('nohp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan">
                                @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>TMT</label>
                                <input type="date" class="form-control @error('tmt') is-invalid @enderror" name="tmt">
                                @error('tmt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>File Foto</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="image">
                                @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <img src="" id="showImage" class="img-fluid" width="100px">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('index') }}" class="btn btn-secondary">Close</a>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection


@section('jslibrary')
<script src="/assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Generet foto data pegawai -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@stop
