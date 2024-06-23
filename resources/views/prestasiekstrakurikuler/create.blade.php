@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Tambah Prestasi Ekstrakurikuler</h1>
                                <br>
                                <form action="{{ route('prestasiekstrakurikuler.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_ekstrakurikuler">Nama Ekstrakurikuler</label>
                                        <select name="id_ekstrakurikuler" class="form-control" required>
                                            @foreach ($ekstrakurikulers as $ekstrakurikuler)
                                                <option value="{{ $ekstrakurikuler->id }}">{{ $ekstrakurikuler->nama_ekstrakurikuler }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_prestasi">Nama Prestasi</label>
                                        <input type="text" name="nama_prestasi" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_ajaran">Tahun Ajaran</label>
                                        <input type="text" name="tahun_ajaran" class="form-control" required>
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
