@extends('layout/layout')
<!DOCTYPE html>
<html lang="en">
<body>
@section('guests')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
    @if (Auth::check())
    <a href="{{ url('/dashboard') }}">Home</a>
    @else
    <a href="{{ url('/login') }}">Login</a>
    <a href="{{ url('/register') }}">Register</a>
    @endif
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
        <strong>Cobain</strong>
        </div>

    <div class="row">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default ">
            <div data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-heading">
                <h4>
                <strong>Login</strong>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body form-group-row">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                                <button type="submit" class="btn btn-success col-md-12">
                                    Login
                                </button>
                    </form>
                </div>
                 </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-heading">
                <h4>
                <strong>Pendaftaran akun baru</strong>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body form-group-row">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input placeholder="name"id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input placeholder="email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input placeholder="password" id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                                <input id="password-confirm" placeholder="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <button type="submit" class="btn btn-primary col-md-12">
                                    Register
                                </button>
                    </form>
            </div>
        </div>
    </div>       
    <br><a href="/dashboard"><strong>dashboard(hapus pas kelar)</strong></a>
</div>
</div>
</div>
@endsection
@section('footer1')
 <footer class="footer text-center col-md-12">
  <p>Posted by: Candra</p>
  <p>Contact information: <a href="mailto:canraise@gmail.com">
  canraise@gmail.com</a>.</p>
</footer> 
@endsection
</body>
</html>		
