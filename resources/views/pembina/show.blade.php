@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Detail Pembina</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="nip_pembina">NIP Pembina</label>
                            <input type="text" class="form-control" id="nip_pembina" value="{{ $pembina->nip_pembina }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" value="{{ $pembina->nama }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="{{ $pembina->email }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_hp">No HP</label>
                            <input type="text" class="form-control" id="no_hp" value="{{ $pembina->no_hp }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" value="{{ $pembina->alamat }}" readonly>
                        </div>
                        <a href="{{ route('pembina.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
