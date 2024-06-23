@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Tambah Prestasi Siswa</h1>
                                <form action="{{ route('prestasisiswa.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nis">Nama Siswa</label>
                                        <select name="nis" class="form-control">
                                            @foreach ($siswas as $siswa)
                                                <option value="{{ $siswa->nis }}">{{ $siswa->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_ekstrakurikuler">Nama Ekstrakurikuler</label>
                                        <select name="id_ekstrakurikuler" class="form-control">
                                            @foreach ($ekstrakurikulers as $ekstrakurikuler)
                                                <option value="{{ $ekstrakurikuler->id_ekstrakurikuler }}">{{ $ekstrakurikuler->nama_ekstrakurikuler }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="berkas">File Berkas</label>
                                        <input type="file" name="berkas" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_ajaran">Tahun Ajaran</label>
                                        <input type="text" name="tahun_ajaran" class="form-control" placeholder="2023/2024">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
