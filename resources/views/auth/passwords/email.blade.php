@extends('layouts.app')

@section('content')
<div class="login-bg" style="background-image: url('{{asset('/public/front/images/login-bg.jpg')}}')">
    <div class="bg-dis">
        <div class="login-wrapper">         
            <div class="logo">
                <h1>R<span>OAD</span> LINK</h1>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="">Email address</label>                            
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif                           
                </div>

                <div class="form-group">                            
                    <button type="submit" class="btn btn-secondary">
                        Send Password Reset Link
                    </button>                            
                </div>
            </form>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection
