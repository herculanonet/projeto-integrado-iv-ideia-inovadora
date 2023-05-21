@extends('layout')
@section('title', 'Faça seu Login')
@section('content')
<main class="signup-form">
    <div class="cotainer p-3 bg-body-tertiary rounded-3">
        <div class="row mb-4 justify-content-center">
            <div class="col-md-6">
                <div class="text-center mt-3 p-3 mb-3">
                    <svg class="bi" width="72" height="72">
                        <use xlink:href="#b-bootstrap" />
                    </svg>
                </div>
                <div class="card border-0">
                    <h3 class="p-3 mt-3 card-header bg-transparent border-0 text-center">Faça seu Login</h3>
                    <div class="card-body">
                        <form action="{{ route('login.post') }}" method="POST" class="form-signin">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="email" name="email" placeholder="Email" id="email_address" class="rounded form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="Password" id="password" class="rounded form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Lembrar-Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection