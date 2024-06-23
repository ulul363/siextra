@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Tambah Pengajuan Pertemuan</h1>
                                <form action="{{ route('pengajuanpertemuan.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nis">NIS Siswa</label>
                                        <input type="text" class="form-control" id="nis" name="nis" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip_pembina">NIP Pembina</label>
                                        <input type="text" class="form-control" id="nip_pembina" name="nip_pembina"
                                            required>
                                    </div>
                                    <!-- tambahkan input untuk tanggal_pengajuan dan status -->
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
