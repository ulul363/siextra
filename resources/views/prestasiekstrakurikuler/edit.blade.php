@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Edit Prestasi Ekstrakurikuler</h1>
                                <br>
                                <form action="{{ route('prestasiekstrakurikuler.update', $prestasi->id_prestasi) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="id_ekstrakurikuler">Nama Ekstrakurikuler</label>
                                        <select name="id_ekstrakurikuler" class="form-control" required>
                                            @foreach ($ekstrakurikulers as $ekstrakurikuler)
                                                <option value="{{ $ekstrakurikuler->id_ekstrakurikuler }}" {{ $prestasi->id_ekstrakurikuler == $ekstrakurikuler->id_ekstrakurikuler ? 'selected' : '' }}>{{ $ekstrakurikuler->nama_ekstrakurikuler }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_prestasi">Nama Prestasi</label>
                                        <input type="text" name="nama_prestasi" class="form-control" value="{{ $prestasi->nama_prestasi }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" required>{{ $prestasi->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="berkas">Berkas</label>
                                        <input type="file" name="berkas" class="form-control">
                                        @if ($prestasi->berkas)
                                            <p><a href="{{ asset('storage/' . $prestasi->berkas) }}" target="_blank">Lihat Berkas Saat Ini</a></p>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
