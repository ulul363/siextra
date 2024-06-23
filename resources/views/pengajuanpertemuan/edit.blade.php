@extends('layouts.master')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Edit Pengajuan Pertemuan</h1>
                            <form action="{{ route('pengajuanpertemuan.update', $pengajuanPertemuan->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nis">NIS Siswa</label>
                                    <input type="text" class="form-control" id="nis" name="nis" value="{{ $pengajuanPertemuan->nis }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="nip_pembina">NIP Pembina</label>
                                    <input type="text" class="form-control" id="nip_pembina" name="nip_pembina" value="{{ $pengajuanPertemuan->nip_pembina }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
                                    <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" value="{{ $pengajuanPertemuan->tanggal_pengajuan }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="Menunggu" {{ $pengajuanPertemuan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                        <option value="Disetujui" {{ $pengajuanPertemuan->status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                                        <option value="Ditolak" {{ $pengajuanPertemuan->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    </select>
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
