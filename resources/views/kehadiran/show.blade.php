@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Detail Kehadiran</h1>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>NIS</th>
                                        <td>{{ $kehadiran->nis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ekstrakurikuler</th>
                                        <td>{{ $kehadiran->ekstrakurikuler->nama_ekstrakurikuler ?? 'Tidak ada data' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal</th>
                                        <td>{{ $kehadiran->tanggal }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama File</th>
                                        <td>{{ $kehadiran->nama_file }}</td>
                                    </tr>
                                </table>
                                <a href="{{ route('kehadiran.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
