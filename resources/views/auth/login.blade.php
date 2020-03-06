@extends('layout.app')

@section('content')
<div class="container" style="margin-top: 8%">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="border:;">
                <div class="card-header bg-white"> <h4>{{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</h4></div>

                    <div class="card-body">
                        @isset($url)
                        <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                        @else
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @endisset
                        
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right"><b>Email</b></label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right"><b>Password</b></label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <b>Login</b>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-sm btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                            </div>
                        </div>
                    <div class="m-2 text-center pt-4">
                        <label>Not a member yet?</label> 
                        @isset($url)
                            <a href='{{ url("register/$url") }}' style="text-decoration: underline; color: blue;">JOIN NOW</a> as an Employeer
                        @else
                            <a href='/register' style="text-decoration: underline; color: blue;">JOIN NOW </a>as a Job Seeker
                        @endisset
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
