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
                            <h1>Daftar Ekstrakurikuler</h1>
                            <br>
                                <a href="{{ route('ekstrakurikuler.create') }}" class="btn btn-primary">Tambah Ekstrakurikuler</a>
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Ekstrakurikuler</th>
                                            <th>Nama Pembina</th>
                                            <th>NIP Pembina</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ekstrakurikulers as $ekstrakurikuler)
                                            <tr>
                                                <td>{{ $ekstrakurikuler->id_ekstrakurikuler }}</td>
                                                <td>{{ $ekstrakurikuler->nama_ekstrakurikuler }}</td>
                                                <td>{{ $ekstrakurikuler->pembina->nama }}</td>
                                                <td>{{ $ekstrakurikuler->nip_pembina }}</td>
                                                <td>
                                                    <a href="{{ route('ekstrakurikuler.show', $ekstrakurikuler->id_ekstrakurikuler) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                        <i class="fas fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('ekstrakurikuler.edit', $ekstrakurikuler->id_ekstrakurikuler) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('ekstrakurikuler.destroy', $ekstrakurikuler->id_ekstrakurikuler) }}" method="POST" style="display:inline-block;" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
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

