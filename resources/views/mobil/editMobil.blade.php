@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Edit Akun') }}</div>

                <div class="card-body">
                    @foreach($daftar_mobil as $p)
                        <form action="/mobil/update/" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id_mobil" value="{{ $p->id_mobil }}">
                            <div class="mb-3">
                                <label for="nama_mobil" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="{{ $p->nama_mobil }}" id="nama_mobil" name="nama_mobil" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="harga_mobil" class="form-label">Harga Sewa /hari</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="number" class="form-control" value="{{ $p->harga_mobil }}" id="harga_mobil" name="harga_mobil" required="required">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="status" name="status" required="required">
                                        @if ($p->status == 1)
                                            <option value="1" selected>Sedang Sewa</option>
                                            <option value="0">Belum Sewa</option>
                                        @else
                                            <option value="1">Sedang Sewa</option>
                                            <option value="0" selected>Belum Sewa</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-success mt-2 mb-3" type="submit">Simpan</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
