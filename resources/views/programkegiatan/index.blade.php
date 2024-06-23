@extends('layouts.master')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Daftar Program Kegiatan</h1>
                            <br>
                            <a href="{{ route('programkegiatan.create') }}" class="btn btn-primary" id="btn-create">
                                Tambah Program Kegiatan
                            </a>
                            <br><br>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Program</th>
                                        <th>Deskripsi</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Ekstrakurikuler</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programkegiatans as $programkegiatan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $programkegiatan->nama_program }}</td>
                                        <td>{{ $programkegiatan->deskripsi }}</td>
                                        <td>{{ $programkegiatan->tahun_ajaran }}</td>
                                        <td>{{ $programkegiatan->ekstrakurikuler->nama_ekstrakurikuler }}</td>
                                        <td>
                                            <a href="{{ route('programkegiatan.show', $programkegiatan->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('programkegiatan.edit', $programkegiatan->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i> 
                                            </a>
                                            <form action="{{ route('programkegiatan.destroy', $programkegiatan->id) }}" method="POST" style="display:inline-block;">
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
