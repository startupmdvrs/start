@extends('layouts.app')

@section('content')
<div class="login-bg" style="background-image: url('{{asset('/public/front/images/login-bg.jpg')}}')">
    <div class="bg-dis">
        <div class="login-wrapper">         
            <div class="logo">
                <h1>R<span>OAD</span> LINK</h1>
            </div>
            <form class="login-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Email address</label>                       
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif                       
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>                       
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif                       
                    </div>
                    <div class="form-group">                       
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>                       
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button> <a class="link-typ1 fplink" href="{{ route('password.request') }}">forgot password ?</a>
                    <div class="fb-gmail-login">
                        <p>Or</p>
                        <div class="fb-gm">
                            <div>
                                <a class="fb-btn ">Login with facebook</a>
                            </div>
                            <div>       
                                <a class="gmail-btn "> Login with google</a>
                            </div>
                        </div>
                    </div>                  
            </form>            
        </div>
    </div>
</div>
@endsection
