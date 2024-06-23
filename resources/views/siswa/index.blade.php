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
                                <h1>Daftar Siswa</h1>
                                <br>
                                <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
                                <br>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>No HP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($siswas as $siswa)
                                                <tr>
                                                    <td>{{ $siswa->nis }}</td>
                                                    <td>{{ $siswa->nama }}</td>
                                                    <td>{{ $siswa->alamat }}</td>
                                                    <td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                                    <td>{{ $siswa->email }}</td>
                                                    <td>{{ $siswa->no_hp }}</td>
                                                    <td>
                                                        <a href="{{ route('siswa.show', $siswa->nis) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                            <i class="fas fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('siswa.edit', $siswa->nis) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('siswa.destroy', $siswa->nis) }}" method="POST" style="display:inline-block;" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
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
