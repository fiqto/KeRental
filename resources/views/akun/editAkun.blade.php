@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Edit Akun') }}</div>

                <div class="card-body">
                    @foreach($users as $p)
                    <form action="/akun/update/" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->id }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" value="{{ $p->name }}" id="name" name="name" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" value="{{ $p->email }}" id="email" name="email" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="is_admin" class="form-label">Status</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="is_admin" name="is_admin" required="required">
                                    @if ($p->is_admin == 1)
                                        <option selected value="1">Choose...</option>
                                        <option value="1">Admin</option>
                                        <option value="0">User</option>
                                    @else
                                        <option selected value="0">Choose...</option>
                                        <option value="1">Admin</option>
                                        <option value="0">User</option>
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
