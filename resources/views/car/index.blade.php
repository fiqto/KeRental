@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Daftar Mobil') }}</div>

                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="d-flex col-sm-6 mt-2 mb-3">
                            <a href="{{ route('cars.create') }}" class="btn btn-primary" type="button">Tambah Mobil</a>
                            {{-- <a href="#" class="btn btn-success mx-2" type="button">Cetak PDF</a> --}}
                        </div>
                        <div class="col-sm-6 mt-2 mb-3">
                            <form action="#" class="d-flex">
                                <input class="form-control me-2" name="cari" type="search" placeholder="Search Name" value="{{ old('cari') }}">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Mobil</th>
                            <th scope="col">Harga Sewa /hari</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($cars as $car)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $car->name }}</td>
                                <td class="align-middle">{{ $car->price }}</td>
                                @if ($car->status == 1)
                                <td class="align-middle">Sedang Sewa</td>
                                @else
                                <td class="align-middle">Belum Sewa</td>
                                @endif
                                <td class="align-middle">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning mb-2" type="button">Edit</a>
                                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </div>    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
