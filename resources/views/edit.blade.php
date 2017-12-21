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


    <div class="row">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default ">
            <div data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-heading">
                <h4>
                <strong>Update</strong>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse">
                <div class="panel-body form-group-row " >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('update', $tampiledit->id) }}">
                        {{ csrf_field() }}
                        <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-1">
                                <label for="mail">Email:</label>
                                </div>
                                <div class="col-md-offset-5 col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $tampiledit->email }}"  required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>
                        <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-1">
                                <label for="mail">Password:</label>
                                </div>
                                <div class="col-md-offset-5 col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $tampiledit->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>
                                <button type="submit" class="btn btn-warning col-md-12">
                                    Update
                                </button>
                    </form>
                </div>
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

