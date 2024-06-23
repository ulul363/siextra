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
                                <h1>Daftar Prestasi Ekstrakurikuler</h1>
                                <br>
                                <a href="{{ route('prestasiekstrakurikuler.create') }}" class="btn btn-primary">Tambah Prestasi</a>
                                <br><br>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Ekstrakurikuler</th>
                                            <th>Prestasi</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prestasi as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->ekstrakurikuler->nama_ekstrakurikuler }}</td>
                                                <td>{{ $item->nama_prestasi }} - {{ $item->deskripsi }}</td>
                                                <td>{{ $item->tahun_ajaran }}</td>
                                                <td>
                                                    <a href="{{ route('prestasiekstrakurikuler.edit', $item->id_prestasi) }}" class="btn btn-info btn-sm">Edit</a>
                                                    <form action="{{ route('prestasiekstrakurikuler.destroy', $item->id_prestasi) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
