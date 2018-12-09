@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="user">

            
                <header class="user__header">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                    <h1 class="user__title">Sign in if you already have an account.</h1>
                </header>

                    <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" placeholder="Email" type="email" class="form__input" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form__input" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                        <!--
                        <div class="form__group">
                                <div class="checkbox">
                                    <label>
                                        <input class="checkRemember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>
                        -->

                        <div class="form__group">
                                <a class="btnn" type="submit" style="width:100%;color:white;" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                </a>
                                <button type="submit" class="btnn">
                                    Login
                                </button>
                        </div>
                    </form>
                
            
    </div>
</div>

@endsection


