@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>Selamat Datang (Dashboard)</h1>
                    <p>sebagai admin</p>
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body bg-primary text-white">
                                    <h5 class="card-title">Total Mobil</h5>
                                    <h4 class="card-subtitle mb-2 "> {{ $daftar_mobil }} </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body bg-success text-white">
                                    <h5 class="card-title">Total Sedang Sewa</h5>
                                    <h4 class="card-subtitle mb-2 "> 5 </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body bg-warning text-white">
                                    <h5 class="card-title">Total User</h5>
                                    <h4 class="card-subtitle mb-2 "> {{ $users }} </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
