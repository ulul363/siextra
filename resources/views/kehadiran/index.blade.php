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
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Daftar Kehadiran</h1>
                                <br>
                                <a href="{{ route('kehadiran.create') }}" class="btn btn-primary">Tambah Kehadiran</a>
                                <br>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Nama Ekstrakurikuler</th>
                                            <th>Nama File</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kehadirans as $kehadiran)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>{{ $kehadiran->siswa->nama }}</td>
                                                <td>{{ $kehadiran->ekstrakurikuler->nama }}</td>
                                                <td>{{ $kehadiran->nama_file }}</td>
                                                <td>{{ $kehadiran->tanggal }}</td>
                                                <td>
                                                    <a href="{{ route('kehadiran.show', $kehadiran->id) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('kehadiran.edit', $kehadiran->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('kehadiran.destroy', $kehadiran->id) }}" method="POST" style="display:inline-block;" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
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
        </div>
    </div>
@endsection
