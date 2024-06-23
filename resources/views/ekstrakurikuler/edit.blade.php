@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Edit Ekstrakurikuler</h1>
                                <form action="{{ route('ekstrakurikuler.update', $ekstrakurikuler->id_ekstrakurikuler) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="id_ekstrakurikuler">ID Ekstrakurikuler</label>
                                        <input type="text" class="form-control" id="id_ekstrakurikuler"
                                            name="id_ekstrakurikuler" value="{{ $ekstrakurikuler->id_ekstrakurikuler }}"
                                            readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ekstrakurikuler">Nama Ekstrakurikuler</label>
                                        <input type="text" class="form-control" id="nama_ekstrakurikuler"
                                            name="nama_ekstrakurikuler" value="{{ $ekstrakurikuler->nama_ekstrakurikuler }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Pembina</label>
                                        <input type="text" class="form-control" id="nama"
                                            name="nama" value="{{ $ekstrakurikuler->nama }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip_pembina">NIP Pembina</label>
                                        <select class="form-control" id="nip_pembina" name="nip_pembina" required>
                                            @foreach ($pembinas as $pembina)
                                                <option value="{{ $pembina->nip_pembina }}"
                                                    {{ $ekstrakurikuler->nip_pembina == $pembina->nip_pembina ? 'selected' : '' }}>
                                                    {{ $pembina->nip_pembina }}
                                                </option>
                                            @endforeach
                                        </select>
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
