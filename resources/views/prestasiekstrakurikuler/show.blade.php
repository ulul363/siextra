@extends('layouts.master')

@section('content')
    <!-- Page Content -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Detail Prestasi Ekstrakurikuler</h1>
                                <br>
                                <div class="form-group">
                                    <label for="id_ekstrakurikuler">ID Ekstrakurikuler</label>
                                    <p>{{ $prestasi->id_ekstrakurikuler }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="nama_prestasi">Nama Prestasi</label>
                                    <p>{{ $prestasi->nama_prestasi }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <p>{{ $prestasi->deskripsi }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <p>{{ $prestasi->tanggal }}</p>
                                </div>
                                <a href="{{ route('prestasiekstrakurikuler.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
