@extends('layout/layout')
<head>
@yield('head')
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-10 text-center">
<h1>Post Article</h1>
</div>

    <div class="row">
        <div class=" col-md-10" >                  
                    <div class="col-md-10 col-md-offset-1 text-justify mr-auto">
<input type="text" class="col-md-12" name="" id="" placeholder="Judul artikel"></textarea>
<textarea class="col-md-12" name="" id="" cols="30" rows="10"placeholder="Konten artikelnya"></textarea>
                    <input class="btn btn-success col-md-12"type="submit" value="Komentari"></p>                
                    </div>
        </div>
    <div class="col-md-2">
        <div class="row">
        <h4>username</h4>
        </div>
    <a href="/dashboard">List Artikel</a><br>
    <a href="#">logout</a><br>
    </div>
</div>       
@section('footer')
  <p>Posted by: Candra</p>
  <p>Contact information: <a href="mailto:canraise@gmail.com">
  canraise@gmail.com</a>.</p>
</footer> 
@endsection

<br><a href="/"><strong>index(hapus pas kelar)</strong></a>
