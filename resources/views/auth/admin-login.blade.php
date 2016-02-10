@extends('layouts.admin')

@section('content')
        <!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ url('/login') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-title">
            <span class="form-title">Welcome.</span>
            <span class="form-subtitle">Please login.</span>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
        </div>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Enter Email" name="email" value="{{ old('email') }}"/>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-block uppercase">Login</button>
        </div>
        <div class="form-actions">
            <div class="pull-left">
                <label class="rememberme check">
                    <input type="checkbox" name="remember" value="1"/>Remember me </label>
            </div>
            <div class="pull-right forget-password-block">
                <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
            </div>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="{{ url('/password/email') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-title">
            <span class="form-title">Forget Password ?</span>
            <span class="form-subtitle">Enter your e-mail to reset it.</span>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn btn-default">Back</button>
            <button type="submit" class="btn btn-primary uppercase pull-right">Send Password Reset Link</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
</div>
<div class="copyright hide">
    2016 &copy; Hostel Management System
</div>
<!-- END LOGIN -->
@endsection