<style>
    .pcoded-navbar {
        height: 100vh;
        overflow-y: auto;
        background-color: #343a40;
    }

    .navbar-wrapper {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .navbar-content {
        flex-grow: 1;
    }
</style>

@extends('layouts.master')

@section('content')
    <!-- Page Content -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Chats</h1>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Chat</th>
                                            <th>NIP Pembina</th>
                                            <th>NIS</th>
                                            <th>Pesan</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chats as $chat)
                                            <tr>
                                                <td>{{ $chat->id_chat }}</td>
                                                <td>{{ $chat->nip_pembina }}</td>
                                                <td>{{ $chat->nis }}</td>
                                                <td>{{ $chat->pesan }}</td>
                                                <td>{{ $chat->tanggal }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
