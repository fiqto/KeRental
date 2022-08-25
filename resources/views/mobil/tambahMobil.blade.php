@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Tambah Mobil') }}</div>

                <div class="card-body">
                    <form action="/mobil/store/" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="nama_mobil" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="harga_mobil" class="form-label">Harga Sewa /hari</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rp. </span>
                                <input type="number" class="form-control" id="harga_mobil" name="harga_mobil" required="required">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="status" name="status" required="required">
                                    <option selected>Choose...</option>
                                    <option value="1">Sedang Sewa</option>
                                    <option value="0">Belum Sewa</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-success mt-2 mb-3" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
