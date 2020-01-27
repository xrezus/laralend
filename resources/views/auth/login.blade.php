@extends('layouts.auth')

@section('content')
    <form method="POST" class="form-horizontal m-t-30" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter email" autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter password" autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <div class="form-group">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    <i class="mdi mdi-lock"></i> {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary w-md waves-effect waves-light">
                {{ __('Login') }}
            </button>
        </div>
    </form>
@endsection
