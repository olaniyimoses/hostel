@extends('layouts.front')

@section('content')
    <br/><br/><br/><br/><br/><br/>
    <div class="col-md-6 col-sm-offset-3">
        <div class="featured-box featured-box-secundary default">
            <div class="box-content">
                <h4>Register An Account</h4>
                <form action="{{ url('/register') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label>Firstname</label>
                                <input type="text" value="{{ old('firstname') }}" placeholder="Enter Firstname" name="firstname" required class="form-control input-sm">
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label>Lastname</label>
                                <input type="text" value="{{ old('lastname') }}" placeholder="Enter Firstname" name="lastname" required class="form-control input-sm">
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label>Sex</label>
                                <select name="gender" required class="form-control input-sm">
                                    <option value="">Select</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input type="email" value="{{ old('email') }}" placeholder="Enter Email Address" name="email" required autocomplete="off" class="form-control input-sm">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <label>Password</label>
                                <input type="password" name="password"  required placeholder="Enter Password" class="form-control input-sm">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label>Re-enter Password</label>
                                <input type="password" placeholder="Enter Password again" name="password_confirmation" required autocomplete="off" class="form-control input-sm">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <input type="submit" value="Register" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
