@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Daftar Sewa') }}</div>

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
                            <th scope="col">
                                Nama Mobil 
                                <span class="float-end">
                                    <a href="/mobil/namaasc" class="bi bi-arrow-up"></a>
                                    <a href="/mobil/namadesc" class="bi bi-arrow-down"></a>
                                </span>
                            </th>
                            <th scope="col">
                                Nama Penyewa
                                <span class="float-end">
                                    <a href="/mobil/hargaasc" class="bi bi-arrow-up"></a>
                                    <a href="/mobil/hargadesc" class="bi bi-arrow-down"></a>
                                </span>
                            </th>
                            <th scope="col">
                                Mulai Sewa
                                <span class="float-end">
                                    <a href="/mobil/hargaasc" class="bi bi-arrow-up"></a>
                                    <a href="/mobil/hargadesc" class="bi bi-arrow-down"></a>
                                </span>
                            </th>
                            <th scope="col">
                                Akhir Sewa
                                <span class="float-end">
                                    <a href="/mobil/hargaasc" class="bi bi-arrow-up"></a>
                                    <a href="/mobil/hargadesc" class="bi bi-arrow-down"></a>
                                </span>
                            </th>
                            <th scope="col">Total Tagihan</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">1</td>
                                <td class="align-middle">Mitsubishi Xpander</td>
                                <td class="align-middle">Ardiansyah Bisma</td>
                                <td class="align-middle">14-08-2022</td>
                                <td class="align-middle">20-08-2022</td>
                                <td class="align-middle">Rp. 3.000.000</td>
                                <td class="align-middle">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="#" class="btn btn-warning" type="button">Edit</a>
                                        <a href="#" class="btn btn-danger" type="button">Hapus</a>
                                    </div> 
                                </td>
                            </tr>
                            {{-- @foreach($sewa_mobil as $p) --}}
                            {{-- <tr> --}}
                                {{-- <td class="align-middle">{{ $loop->iteration }}</td> --}}
                                {{-- Nama Mobil dari Tabel Daftar Mobil --}}
                                {{-- <td class="align-middle">{{ $p->nama_mobil }}</td>  --}}
                                {{-- Nama Penyewa dari Tabel User --}}
                                {{-- <td class="align-middle">{{ $p->name }}</td> --}}
                                {{-- <td class="align-middle">{{ $p->awal_sewa }}</td> --}}
                                {{-- <td class="align-middle">{{ $p->akhir_sewa }}</td> --}}
                                {{-- Harga Sewa Hasil Penjumlahan Harga harian Dengan Jumlah Hari Sewa --}}
                                {{-- <td class="align-middle">@currency($p->harga_sewa)</td> --}}
                                {{-- <td class="align-middle"> --}}
                                    {{-- <div class="d-grid gap-2 d-md-block"> --}}
                                        {{-- <a href="/mobil/edit/{{ $p->id_mobil }}" class="btn btn-warning" type="button">Edit</a> --}}
                                        {{-- <a href="/mobil/hapus/{{ $p->id_mobil }}" class="btn btn-danger" type="button">Hapus</a> --}}
                                    {{-- </div>     --}}
                                {{-- </td> --}}
                            {{-- </tr> --}}
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
