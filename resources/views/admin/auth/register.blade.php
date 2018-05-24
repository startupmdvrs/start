@extends('layouts.admin_login')

@section('title','Login')

@section('body-class','hold-transition login-page')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('dashboard')}}"><b>Demo</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><b>Sign Up Here</b></p>
        {{Form::open(array('url'=>route('postAdminRegisterPage'),'method' => 'post','role'=>'form','class'=>'form-group'))}}
            {{ csrf_field() }}

            <!-- Error Part-->
            {{-- @include('admin.myerrorSection') --}}

            <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', old('name'), array('placeholder' => 'Name','class'=>'form-control','required'=>'required')) }}
                <span style="color:red">{{ $errors->first('name') }}</span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                {{ Form::label('email', 'Email Address') }}
                {{ Form::email('email', old('email'), array('placeholder' => 'Email','class'=>'form-control','required'=>'required')) }}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span style="color:red">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password',array('placeholder' => 'Password','class'=>'form-control','required'=>'required')) }}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span style="color:red">{{ $errors->first('password') }}</span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                {{ Form::label('password_confirmation', 'Confirm Password') }}
                {{ Form::password('password_confirmation',array('placeholder' => 'Confirm Password','class'=>'form-control','required'=>'required')) }}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span style="color:red">{{ $errors->first('password_confirmation') }}</span>
            </div>
            
            <div class="row">
                <div class="col-xs-8">
                    <a href="{{route('getAdminLoginPage')}}">Sign in</a>
                    {{-- <a href="{{route('getAdminLoginPage')}}">Login</a><br> --}}
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                  {{ Form::submit('Sign Up',array('class'=>'btn btn-primary btn-block btn-flat')) }}
                </div>
                <!-- /.col -->
            </div>
        <!-- </form> -->
        {{Form::close()}}
        
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
    </div>
  <!-- /.login-box-body -->
</div>
@endsection