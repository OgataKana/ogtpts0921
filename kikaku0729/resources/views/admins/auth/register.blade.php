@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('admin_name') ? ' has-error' : '' }}">
                            <label for="admin_name" class="col-md-4 control-label">admin_Name</label>

                            <div class="col-md-6">
                                <input id="admin_name" type="text" class="form-control" name="admin_name" value="{{ old('admin_name') }}" required autofocus>

                                @if ($errors->has('admin_name'))
                                        <strong>{{ $errors->first('admin_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('admin_email') ? ' has-error' : '' }}">
                            <label for="admin_email" class="col-md-4 control-label">admin_E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="admin_email" type="email" class="form-control" name="admin_email" value="{{ old('admin_email') }}" required>

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
                            <label for="admin_password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="admin_password-confirm" type="password" class="form-control" name="admin_password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection