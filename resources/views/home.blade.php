@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                                    
                    <div class="row mt-3">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body bg-primary text-white">
                                    <h5 class="card-title">Total Mobil</h5>
                                    <h4 class="card-subtitle mb-2 "> {{ $cars }} </h4>
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
