@extends('layouts.app')

@section('content')
<div class="container my-height">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        {{-- <div class="col-6">
            @php

                if (Hash::check('classe55'., Auth::user()->password)) {
                    echo "Verificata";
                } else {
                    echo "non Verificata";
                }
                @endphp
        </div> --}}
@endsection

