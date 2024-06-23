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

    td a {
        text-decoration: none;
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
                                <h1>Prestasi Siswa</h1>
                                <a href="{{ route('prestasisiswa.create') }}" class="btn btn-primary mb-3">Tambah Prestasi</a>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Nama Ekstrakurikuler</th>
                                            <th>File Berkas</th>
                                            <th>Deskripsi</th>
                                            <th>Tahun Ajaran</th> <!-- Update this line -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prestasiSiswas as $prestasi)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $prestasi->siswa->nama }}</td>
                                                <td>{{ $prestasi->ekstrakurikuler->nama_ekstrakurikuler }}</td>
                                                <td><a href="{{ asset('storage/' . $prestasi->berkas) }}" target="_blank">{{ basename($prestasi->berkas) }}</a></td> <!-- Update this line -->
                                                <td>{{ $prestasi->deskripsi }}</td>
                                                <td>{{ $prestasi->tahun_ajaran }}</td> <!-- Update this line -->
                                                <td>
                                                    <a href="{{ route('prestasisiswa.edit', $prestasi->id_prestasisiswa) }}" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('prestasisiswa.destroy', $prestasi->id_prestasisiswa) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus prestasi ini?')">
                                                            <i class="fas fa-trash-alt"></i>
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

