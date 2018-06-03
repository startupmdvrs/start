@extends('layouts.app')

@section('content')
<div class="login-bg" style="background-image: url('{{asset('/public/front/images/login-bg.jpg')}}')">
    <div class="bg-dis">
        <div class="login-wrapper">         
            <div class="logo">
                <h1>R<span>OAD</span> LINK</h1>
            </div>
            <form class="forgot-pass-form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="">Email address</label>                            
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif                            
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="">Password</label>                        
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif                           
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="">Confirm Password</label>                        
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif                           
                </div>
                <div class="form-group">                      
                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>                     
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
