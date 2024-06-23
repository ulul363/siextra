<!-- resources/views/siswa/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detail Siswa</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>NIS</th>
                        <td>{{ $siswa->nis }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $siswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $siswa->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $siswa->email }}</td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td>{{ $siswa->no_hp }}</td>
                    </tr>
                </table>
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
