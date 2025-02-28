@extends('auth.template')
@section('title', __('Login'))

@section('contents')
    <div class="container container-tight py-4">
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">{{ __('Login to your account') }}</h2>
                <form action="{{ route('login-post') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">{{ __('Email') }}</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                               autocomplete="off">
                        @error('email')
                        <div class="invalid-feedback">{{ __("$message") }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label">{{ __('Password') }}</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               autocomplete="off">
                        @error('password')
                        <div class="invalid-feedback">{{ __("$message") }}</div>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{ __('Sign in') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
