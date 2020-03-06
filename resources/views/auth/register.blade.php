
<?php 
  use App\Category;
  use App\Employeer;
?>
@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 8%">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white text-center"> <h5>{{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</h5></div>
                    <div class="card-body bg-light">
                        @isset($url)
                        <form action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                          @csrf
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">{{ __('Employeer Name') }}</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group col-md-2">
                              <label for="exampleFormControlInput1">Location</label>
                              <input type="text" class="form-control" name="location">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputZip">Mobile</label>
                              <input type="text" class="form-control" name="mobile">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Website</label>
                                <input type="text" class="form-control"  name="Website">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea class="form-control" rows="3" name="address"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">About Company</label>
                            <textarea class="form-control" rows="3" name="company_type"></textarea>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Password</label>
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary col-lg-2 font-weight-bold text-center">Register</button>
                          </div>
                        </form>
                       <!--  <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                            @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Employeer Name') }}</label>

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
                            <label for="name" class="col-md-1 col-form-label text-md-left">{{ __('Website') }}</label>
                            <div class="col-md-4">
                                <input id="website" type="text" class="form-control" name="website">
                            </div>
                            <label for="email" class="col-md-1 col-form-label text-md-left">{{ __('Email') }}</label>
                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label">{{ __('Company Type') }}</label>
                            <div class="col-md-4">
                                <input id="company_type" type="text" class="form-control" name="company_type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text">{{ __('Full Address') }}</label>
                            <div class="col-md-6">
                                <textarea id="address" type="text" class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text">{{ __('Mobile') }}</label>
                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-lg-2 col-form-label text">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="password-confirm" class="col-md-2 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!--User Login/Register-->
                    
                        @else
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                        <div class="form-group row">
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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                                <button type="submit" class="btn btn-primary">
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
