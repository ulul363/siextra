@extends('layouts.master')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Tambah Program Kegiatan</h1>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('programkegiatan.store') }}" method="POST" id="form-create">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_program">Nama Program</label>
                                    <input type="text" class="form-control" id="nama_program" name="nama_program" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_ajaran">Tahun Ajaran</label>
                                    <select class="form-control" id="tahun_ajaran" name="tahun_ajaran" required>
                                        @foreach($tahunAjaranOptions as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_ekstrakurikuler">Ekstrakurikuler</label>
                                    <select class="form-control" id="id_ekstrakurikuler" name="id_ekstrakurikuler" required>
                                        @foreach($ekstrakurikulers as $ekstrakurikuler)
                                        <option value="{{ $ekstrakurikuler->id_ekstrakurikuler }}">{{ $ekstrakurikuler->nama_ekstrakurikuler }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
