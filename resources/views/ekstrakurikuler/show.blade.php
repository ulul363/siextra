@extends('layouts.master')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Detail Ekstrakurikuler</h1>
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID Ekstrakurikuler</th>
                                    <td>{{ $ekstrakurikuler->id_ekstrakurikuler }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ekstrakurikuler</th>
                                    <td>{{ $ekstrakurikuler->nama_ekstrakurikuler }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Pembina</th>
                                    <td>{{ $ekstrakurikuler->nama }}</td>
                                </tr>
                                <tr>
                                    <th>NIP Pembina</th>
                                    <td>{{ $ekstrakurikuler->nip_pembina }}</td>
                                </tr>
                            </table>
                            
                            <a href="{{ route('ekstrakurikuler.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
