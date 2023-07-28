@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
      
            <div style="width: 28rem; margin-top: 5rem" class="card">
                <div  class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Aquí colocamos el formulario de inicio de sesión -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button style="background-color: rgb(0, 172, 216)" type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                @if (Route::has('password.request'))
                                    <div class="mt-2 text-center">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                    <div class="mt-2 text-center">
                                        <a href="{{ route('register') }}" class="underline text-sm text-gray-600 hover:text-gray-900">{{ __('Crear cuenta Nueva') }}</a>
                                    </div>
                                @endif
                            </form>
                        </div>
                        <div class="col-md-4">
                            <!-- Aquí colocas la imagen -->
                            <img style="width: 9rem,height:9rem" src="{{ asset('images/cteen_logo_sinfondo.png') }}" alt="Imagen ilustrativa" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
