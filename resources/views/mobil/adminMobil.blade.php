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
                            <a href="/mobil/tambah" class="btn btn-primary" type="button">Tambah Mobil</a>
                            <a href="#" class="btn btn-success mx-2" type="button">Cetak PDF</a>
                        </div>
                        <div class="col-sm-6 mt-2 mb-3">
                            <form action="/mobil/cari/" class="d-flex">
                                <input class="form-control me-2" name="cari" type="search" placeholder="Search Name" value="{{ old('cari') }}">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Mobil</th>
                            <th scope="col">
                                Nama Mobil 
                                <span class="float-end">
                                    <a href="/mobil/namaasc" class="bi bi-arrow-up"></a>
                                    <a href="/mobil/namadesc" class="bi bi-arrow-down"></a>
                                </span>
                            </th>
                            <th scope="col">
                                Harga Sewa /hari
                                <span class="float-end">
                                    <a href="/mobil/hargaasc" class="bi bi-arrow-up"></a>
                                    <a href="/mobil/hargadesc" class="bi bi-arrow-down"></a>
                                </span>
                            </th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($daftar_mobil as $p)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">Mobil{{ $p->id_mobil }}</td>
                                <td class="align-middle">{{ $p->nama_mobil }}</td>
                                <td class="align-middle">@currency($p->harga_mobil)</td>
                                @if ($p->status == 1)
                                <td class="align-middle">Sedang Sewa</td>
                                @else
                                <td class="align-middle">Belum Sewa</td>
                                @endif
                                <td class="align-middle">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="/mobil/edit/{{ $p->id_mobil }}" class="btn btn-warning" type="button">Edit</a>
                                        <a href="/mobil/hapus/{{ $p->id_mobil }}" class="btn btn-danger" type="button">Hapus</a>
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
