@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                @if($errors)
                    {{$errors}}
                @endif
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('admin_email') ? ' has-error' : '' }}">
                            <label for="admin_email" class="col-md-4 control-label">admin_E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="admin_email" type="email" class="form-control" name="admin_email" value="{{ old('admin_email') }}" required autofocus>

                                @if ($errors->has('admin_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('admin_password') ? ' has-error' : '' }}">
                            <label for="admin_password" class="col-md-4 control-label">admin_Password</label>

                            <div class="col-md-6">
                                <input id="admin_password" type="password" class="form-control" name="admin_password" required>

                                @if ($errors->has('admin_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="admin_remember" {{ old('admin_remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
