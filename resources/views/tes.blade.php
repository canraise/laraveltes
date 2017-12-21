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
        <div class="panel panel-default">
            <div data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-heading">
                <h4>
                <strong>Pendaftaran akun baru</strong>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body form-group-row">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('store') }}">
                        {{ csrf_field() }}
                        <div class="{{ $errors->has('judul') ? ' has-error' : '' }}">
                                <input placeholder="judul"id="judul" type="text" class="form-control" name="judul" value="{{ ('judul') }}" required autofocus>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="{{ $errors->has('konten') ? ' has-error' : '' }}">
                                <input placeholder="konten" id="konten" type="konten" class="form-control" name="konten" value="{{ ('konten') }}" required>

                                @if ($errors->has('konten'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('konten') }}</strong>
                                    </span>
                                @endif
                        </div>
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
