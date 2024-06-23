@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Detail Program Kegiatan</h1>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $programKegiatan->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Program</th>
                                        <td>{{ $programKegiatan->nama_program }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td>{{ $programKegiatan->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tahun Ajaran</th>
                                        <td>{{ $programKegiatan->tahun_ajaran }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ekstrakurikuler</th>
                                        <td>{{ $programKegiatan->ekstrakurikuler->nama_ekstrakurikuler }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
