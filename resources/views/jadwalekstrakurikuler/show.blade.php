@extends('layouts.master')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Detail Jadwal Ekstrakurikuler</h1>
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">Kode Jadwal</p>
                                    <p class="card-title">Hari: {{ $jadwalEkstrakurikuler->hari }}</p>
                                    <p class="card-text">Waktu: {{ $jadwalEkstrakurikuler->waktu }}</p>
                                    <p class="card-text">Lokasi: {{ $jadwalEkstrakurikuler->lokasi }}</p>
                                    <p class="card-text">Ekstrakurikuler: {{ $jadwalEkstrakurikuler->ekstrakurikuler->nama_ekstrakurikuler }}</p>
                                    <p class="card-text">Status: {{ $jadwalEkstrakurikuler->status }}</p>
                                </div>
                            </div>
                            <br>
                            <a href="{{ route('jadwalekstrakurikuler.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
