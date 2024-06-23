@extends('layouts.master')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Detail Pengajuan Pertemuan</h1>
                            <p><strong>ID Pengajuan:</strong> {{ $pengajuanPertemuan->id }}</p>
                            <p><strong>NIS Siswa:</strong> {{ $pengajuanPertemuan->nis }}</p>
                            <p><strong>NIP Pembina:</strong> {{ $pengajuanPertemuan->nip_pembina }}</p>
                            <p><strong>Tanggal Pengajuan:</strong> {{ $pengajuanPertemuan->tanggal_pengajuan }}</p>
                            <p><strong>Status:</strong> {{ $pengajuanPertemuan->status }}</p>
                            <p><a href="{{ route('pengajuanpertemuan.edit', $pengajuanPertemuan->id) }}" class="btn btn-primary">Edit</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
