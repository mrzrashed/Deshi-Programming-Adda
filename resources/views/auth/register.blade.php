@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="user">

                <header class="user__header">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                    <h1 class="user__title">Lets start your awesome journey with us.</h1>
                </header>
                
                
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form__group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <input id="name" type="text" class="form__input" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus/>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="form__input" />

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                        <div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" placeholder="Password" class="form__input" name="password" required/>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form__group">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form__input" name="password_confirmation" required/>
                            
                        </div>

                        <div class="form__group">
                                <button class="btnn" type="submit">Register</button>
                        </div>
                    </form>
            
        </div>
    </div>
</div>
@endsection


