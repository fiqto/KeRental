@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Daftar Akun') }}</div>

                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="d-flex col-sm-6 mt-2 mb-3">
                        </div>
                        <div class="col-sm-6 mt-2 mb-3">
                            <form action="/akun/cari/" class="d-flex">
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
                                Nama 
                                <span class="float-end">
                                    <a href="/akun/namaasc" class="bi bi-arrow-up"></a>
                                    <a href="/akun/namadesc" class="bi bi-arrow-down"></a>
                                </span>
                            </th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $p)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $p->name }}</td>
                                <td class="align-middle">{{ $p->email }}</td>
                                @if ($p->is_admin == 1)
                                <td class="align-middle">Admin</td>
                                @else
                                <td class="align-middle">User</td>
                                @endif
                                <td class="align-middle">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="/akun/edit/{{ $p->id }}" class="btn btn-warning" type="button">Edit</a>
                                        <a href="/akun/hapus/{{ $p->id }}" class="btn btn-danger" type="button">Hapus</a>
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
