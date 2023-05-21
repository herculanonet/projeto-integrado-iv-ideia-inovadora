@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Minha Dashboard') }}</div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    Você esta logado como <span class="font-weight-bold text-uppercase">"{{ auth()->user()->name }}"</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection