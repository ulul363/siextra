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

                                <h1>Daftar Pembina</h1>
                                <br>
                                <a href="{{ route('pembina.create') }}" class="btn btn-primary">Tambah Pembina</a>
                                <br>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>NIP Pembina</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pembinas as $pembina)
                                            <tr>
                                                <td>{{ $pembina->nip_pembina }}</td>
                                                <td>{{ $pembina->nama }}</td>
                                                <td>{{ $pembina->email }}</td>
                                                <td>{{ $pembina->no_hp }}</td>
                                                <td>{{ $pembina->alamat }}</td>
                                                <td>
                                                    <a href="{{ route('pembina.show', $pembina->nip_pembina) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('pembina.edit', $pembina->nip_pembina) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form
                                                        action="{{ route('pembina.destroy', $pembina->nip_pembina) }}"
                                                        method="POST" style="display:inline-block;"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
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
