@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Tambah Kehadiran</h1>
                                <form action="{{ route('kehadiran.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nis">Nama Siswa</label>
                                        <select class="form-control" id="nis" name="nis" required>
                                            @foreach ($siswas as $siswa)
                                                <option value="{{ $siswa->nis }}">{{ $siswa->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('nis')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="id_ekstrakurikuler">Nama Ekstrakurikuler</label>
                                        <select class="form-control" id="id_ekstrakurikuler" name="id_ekstrakurikuler"
                                            required>
                                            @foreach ($ekstrakurikulers as $ekstrakurikuler)
                                                <option value="{{ $ekstrakurikuler->id_ekstrakurikuler }}">
                                                    {{ $ekstrakurikuler->nama_ekstrakurikuler }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_ekstrakurikuler')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_file">Nama File</label>
                                        <input type="text" class="form-control" id="nama_file" name="nama_file" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_file_upload">Upload Berkas (PDF maksimal 2MB)</label>
                                        <input type="file" class="form-control" id="nama_file_upload"
                                            name="nama_file_upload" accept="application/pdf" required>
                                        @error('nama_file_upload')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                                            value="{{ old('tanggal') }}" required>
                                        @error('tanggal')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
