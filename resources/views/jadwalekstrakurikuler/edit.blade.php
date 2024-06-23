@extends('layouts.master')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Edit Jadwal Ekstrakurikuler</h1>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('jadwalekstrakurikuler.update', $jadwalEkstrakurikuler->id_jadwalekstrakurikuler) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="hari">Hari</label>
                                    <input type="text" name="hari" class="form-control" value="{{ $jadwalEkstrakurikuler->hari }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="waktu">Waktu</label>
                                    <input type="time" name="waktu" class="form-control" value="{{ $jadwalEkstrakurikuler->waktu }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control" value="{{ $jadwalEkstrakurikuler->lokasi }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="id_ekstrakurikuler">Ekstrakurikuler</label>
                                    <select name="id_ekstrakurikuler" class="form-control" required>
                                        @foreach($ekstrakurikulers as $ekstrakurikuler)
                                        <option value="{{ $ekstrakurikuler->id_ekstrakurikuler }}" {{ $jadwalEkstrakurikuler->id_ekstrakurikuler == $ekstrakurikuler->id_ekstrakurikuler ? 'selected' : '' }}>{{ $ekstrakurikuler->nama_ekstrakurikuler }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="aktif" {{ $jadwalEkstrakurikuler->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="tidak aktif" {{ $jadwalEkstrakurikuler->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                    </select>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('jadwalekstrakurikuler.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
