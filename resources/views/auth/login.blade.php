@extends('layouts.front')

@section('content')
    <br/><br/><br/><br/><br/><br/>

    <div role="main" class="main shop">

        <div class="container">

            <hr class="tall">

            <div class="row">
                <div class="col-md-12">

                    <div class="row featured-boxes login">
                        <div class="col-md-6 col-sm-offset-3">
                            <div class="featured-box featured-box-secundary default">
                                <div class="box-content">
                                    <h4>I'm a Returning Client</h4>
                                    <form action="{{ url('/login') }}" method="post">
                                        {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="form-group{!! $errors->has('email') ? ' has-error' : '' !!}">
                                                <div class="col-md-12">
                                                    <label>E-mail Address</label>
                                                    <input type="text" value="" name="email" placeholder="Email" required class="form-control input-sm">
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
                                                <div class="col-md-12">
                                                    <a class="pull-right" href="#">(Lost Password?)</a>
                                                    <label>Password</label>
                                                    <input type="password" name="password" placeholder="Password" required class="form-control input-sm">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
														<span class="remember-box checkbox">
															<label for="rememberme">
                                                                <input type="checkbox" id="rememberme" name="remember">Remember Me
                                                            </label>
														</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                    <p class="sign-up-info text-center">Don't have an account yet? <a href="{{ url('/register') }}">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection