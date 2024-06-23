@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Edit Kehadiran</h1>
                                <form action="{{ route('kehadiran.update', $kehadiran->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nis">NIS</label>
                                        <input type="number" class="form-control" id="nis" name="nis"
                                            value="{{ $kehadiran->nis }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_jadwalekstrakurikuler">Jadwal Ekstrakurikuler</label>
                                        <select class="form-control" id="id_jadwalekstrakurikuler"
                                            name="id_jadwalekstrakurikuler" required>
                                            @foreach ($jadwals as $jadwal)
                                                <option value="{{ $jadwal->id_jadwal }}"
                                                    {{ $kehadiran->id_jadwalekstrakurikuler == $jadwal->id_jadwal ? 'selected' : '' }}>
                                                    {{ $jadwal->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                                            value="{{ $kehadiran->tanggal }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_file">Upload Berkas</label>
                                        <input type="file" class="form-control" id="nama_file" name="nama_file"
                                            accept="application/pdf">
                                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah
                                            file.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
