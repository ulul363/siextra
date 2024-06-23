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

    .table-success {
        background-color: #d4edda; /* Warna hijau */
    }

    .table-secondary {
        background-color: #f8d7da; /* Warna abu */
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
                                <h1>Jadwal Ekstrakurikuler</h1>
                                <a href="{{ route('jadwalekstrakurikuler.create') }}" class="btn btn-primary mb-3">Tambah Jadwal Ekstrakurikuler</a>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Ekstrakurikuler</th>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jadwalekstrakurikulers as $jadwalekstrakurikuler)
                                            <tr class="{{ $jadwalekstrakurikuler->status == 'aktif' ? 'table-success' : 'table-secondary' }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $jadwalekstrakurikuler->ekstrakurikuler->nama_ekstrakurikuler }}</td>
                                                <td>{{ $jadwalekstrakurikuler->hari }}</td>
                                                <td>{{ $jadwalekstrakurikuler->waktu }}</td>
                                                <td>{{ $jadwalekstrakurikuler->status }}</td>
                                                <td>
                                                    <a href="{{ route('jadwalekstrakurikuler.show', $jadwalekstrakurikuler->id) }}" class="btn btn-info btn-sm">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('jadwalekstrakurikuler.edit', $jadwalekstrakurikuler->id) }}" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-edit"></i> 
                                                    </a>
                                                    <form action="{{ route('jadwalekstrakurikuler.destroy', $jadwalekstrakurikuler->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus program kegiatan ini?')">
                                                            <i class="fa fa-trash"></i>
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

