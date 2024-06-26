@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: black; font-size: 30px; text-align: center ">
                    <span><i class="bi bi-person-bounding-box"></i> </span>
                    {{ __('Login') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                <span><i class="bi bi-envelope"></i></span>
                                {{ __('E-mail') }}
                        </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="exemplo@exemplo.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">
                                <span><i class="bi bi-key"></i> </span>
                                {{ __('Senha') }}
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <span> <i class="bi bi-box-arrow-in-right"></i></span>
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="card-body">
                        <div class="row mb-3 justify-content-md-center ">{{__('Não tem uma conta?')}}
                            <a href="{{ route('register')}}"> Cadastre-se </a>
                            <span> </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 justify-content-md-center">
                            <a href="#" class="col-md-1"> <span> <i class="bi bi-google"></i></span></a>
                            <a href="#"class="col-md-1"> <span> <i class="bi bi-facebook"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
