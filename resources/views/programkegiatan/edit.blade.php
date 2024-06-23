@extends('layouts.master')

@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Edit Program Kegiatan</h1>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('programkegiatan.update', $programKegiatan->id) }}" method="POST" id="form-edit">
                                    @csrf
                                    @method('PUT')
                                
                                    <div class="form-group">
                                        <label for="nama_program">Nama Program</label>
                                        <input type="text" class="form-control" id="nama_program" name="nama_program" value="{{ $programKegiatan->nama_program }}" required>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $programKegiatan->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_ajaran">Tahun Ajaran</label>
                                        <select class="form-control" id="tahun_ajaran" name="tahun_ajaran" required>
                                            @foreach($tahunAjaranOptions as $key => $value)
                                                <option value="{{ $key }}" {{ $programKegiatan->tahun_ajaran == $key ? 'selected' : '' }}>
                                                    {{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="id_ekstrakurikuler">Ekstrakurikuler</label>
                                        <select class="form-control" id="id_ekstrakurikuler" name="id_ekstrakurikuler" required>
                                            @foreach ($ekstrakurikulers as $ekstrakurikuler)
                                                <option value="{{ $ekstrakurikuler->id_ekstrakurikuler }}"
                                                    {{ $programKegiatan->id_ekstrakurikuler == $ekstrakurikuler->id_ekstrakurikuler ? 'selected' : '' }}>
                                                    {{ $ekstrakurikuler->nama_ekstrakurikuler }}
                                                </option>
                                            @endforeach
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
