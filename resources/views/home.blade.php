@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>Selamat Datang</h1>
                    <p>Sebagai User</p>
                    <p class="fw-bold">Page Dashboard</p>
                    <p>- Menampilkan nama mobil yang disewa</p>
                    <p>- Menampilkan tanggal mulai sewa</p>
                    <p>- Menampilkan tanggal akhir sewa</p>
                    <p>- Menampilkan total harga</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
