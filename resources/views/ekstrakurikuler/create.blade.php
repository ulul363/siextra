@extends('layouts.master')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Tambah Ekstrakurikuler</h1>
                            <form id="createForm" action="{{ route('ekstrakurikuler.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="id_ekstrakurikuler">ID Ekstrakurikuler</label>
                                    <input type="text" class="form-control" id="id_ekstrakurikuler"
                                        name="id_ekstrakurikuler" value="{{ $newId }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ekstrakurikuler">Nama Ekstrakurikuler</label>
                                    <input type="text" class="form-control" id="nama_ekstrakurikuler"
                                        name="nama_ekstrakurikuler" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Pembina</label>
                                    <select class="form-control" id="nama" name="nama" required>
                                        @foreach ($pembinas as $pembina)
                                        <option value="{{ $pembina->nama }}" data-nip="{{ $pembina->nip_pembina }}">
                                            {{ $pembina->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nip_pembina">NIP Pembina</label>
                                    <input type="text" class="form-control" id="nip_pembina" name="nip_pembina" readonly>
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

{{-- Script untuk mengatur NIP Pembina --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const namaSelect = document.getElementById('nama');
        const nipInput = document.getElementById('nip_pembina');

        namaSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const selectedNIP = selectedOption.getAttribute('data-nip');
            nipInput.value = selectedNIP;
        });

        // Set NIP Pembina saat halaman pertama kali dimuat
        const selectedOption = namaSelect.options[namaSelect.selectedIndex];
        const selectedNIP = selectedOption.getAttribute('data-nip');
        nipInput.value = selectedNIP;
    });
</script>
@endsection
