
<?php 
  use App\Category;
  use App\Employeer;
?>
@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 8%">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="border:solid 1px white; border-radius: 10px;">
                <div class="card-header bg-white text-center" style="border:solid 1px white;">
                    Join with <img src="https://www.pinclipart.com/picdir/big/198-1980971_sixdays-bremen-transparent-loading-circle-gif-clipart.png" width="20px" height="20px"/><b> pportunity</b>
                    <h6 class="mt-5">{{ isset($url) ? ucwords($url) : ""}} {{ __('Registration') }}</h6>
                </div>
                    <div class="card-body bg-light" style="border-radius: 10px;">
                        @isset($url)
                       <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                            @csrf
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>{{ __('Employeer Name') }}</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('Website') }}</label>
                                <input id="website" type="text" class="form-control" name="website">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label>Mobile</label>
                              <input type="text" class="form-control" name="mobile">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" rows="3" name="address"></textarea>
                          </div>
                          <div class="form-group">
                            <label>About Company</label>
                            <textarea class="form-control" rows="3" name="company_type"></textarea>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-primary col-lg-2 font-weight-bold text-center">Register</button>
                          </div>
                        </form>
                    <!--User Login/Register-->
                    
                        @else
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <div class="form-group row pt-3" width="70%">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
