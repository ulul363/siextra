<style>
    .pcoded-navbar {
        height: 100vh;
        overflow-y: auto;
        background-color: #343a40;
    }

    .navbar-wrapper {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .navbar-content {
        flex-grow: 1;
    }
</style>

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
                                <h1>Pengajuan Pertemuan</h1>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Pengajuan</th>
                                            <th>NIP Pembina</th>
                                            <th>NIS</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Alasan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuanPertemuan as $pengajuan)
                                            <tr>
                                                <td>{{ $pengajuan->id }}</td>
                                                <td>{{ $pengajuan->nip_pembina }}</td>
                                                <td>{{ $pengajuan->nis }}</td>
                                                <td>{{ $pengajuan->tanggal_pengajuan }}</td>
                                                <td>{{ $pengajuan->alasan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
