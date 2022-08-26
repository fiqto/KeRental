@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Tambah Mobil') }}</div>

                <div class="card-body">
                    <form action="{{ route('cars.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="name" name="name" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga Sewa /hari</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rp. </span>
                                <input type="number" class="form-control" id="price" name="price" required="required">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="status" name="status" required="required">
                                    <option selected value="0">Choose...</option>
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
