@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Edit Prestasi Siswa</h1>
                                <form action="{{ route('prestasisiswa.update', $prestasiSiswa->id_prestasisiswa) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nis">Nama Siswa</label>
                                        <select name="nis" class="form-control">
                                            @foreach ($siswas as $siswa)
                                                <option value="{{ $siswa->nis }}" {{ $siswa->nis == $prestasiSiswa->nis ? 'selected' : '' }}>{{ $siswa->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_ekstrakurikuler">Nama Ekstrakurikuler</label>
                                        <select name="id_ekstrakurikuler" class="form-control">
                                            @foreach ($ekstrakurikulers as $ekstrakurikuler)
                                                <option value="{{ $ekstrakurikuler->id_ekstrakurikuler }}" {{ $ekstrakurikuler->id_ekstrakurikuler == $prestasiSiswa->id_ekstrakurikuler ? 'selected' : '' }}>{{ $ekstrakurikuler->nama_ekstrakurikuler }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="berkas">File Berkas</label>
                                        <input type="file" name="berkas" class="form-control">
                                        <a href="{{ asset('storage/' . $prestasiSiswa->berkas) }}" target="_blank">{{ basename($prestasiSiswa->berkas) }}</a>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control">{{ $prestasiSiswa->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_ajaran">Tahun Ajaran</label>
                                        <input type="text" name="tahun_ajaran" class="form-control" value="{{ $prestasiSiswa->tahun_ajaran }}">
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
