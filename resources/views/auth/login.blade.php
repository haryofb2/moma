@extends('layout.authentication')
@extends('layouts.app')

@section('title', 'Login')


@section('content')

<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                <img src="{{url('/')}}/assets/img/logo_mom.png" alt="MOMAcademy">
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Login to your account</p>
                </div>
                <div class="body">
                    {{-- <form class="form-auth-small" action="{{route('dashboard.analytical')}}"> --}}
                        <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class=" form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Login') }}</button>
                            <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a
                                        href="{{route('authentication.forgot-password')}}">Forgot password?</a></span>
                                <span>Don't have an account? <a href="{{route('register')}}">Register</a></span>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop