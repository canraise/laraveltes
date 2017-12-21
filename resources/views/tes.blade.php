<!--nanti dihapus kalo udah production-->
@extends('layout/layout')

<!DOCTYPE html>
<html lang="en">
<head>
@yield('head')

</head>
<body>
@section('a')
    <div class="content">
        <div class="title m-b-md">
        <strong>Cobain</strong>
        </div>

    <div class="row">
        <div class="panel-group col-md-10" id="accordion">
            <div class="panel panel-default ">
            <div data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-heading">
                <h4>
                <strong>Judul Artikel 1</strong>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body form-group-row">
<div class="row">
isi artikel 1   
</div>
<div class="row">
komentar orang  
</div>
<div class="row">
<textarea class="col-md-12" name="" id="" cols="30" rows="10"></textarea>
                   <input class="btn btn-success col-md-12"type="submit" value="Komentari"></p>                
</div>

              </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-heading">
                <h4>
                <strong>Judul artikel 2</strong>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
<div class="row">
isi artikel 2   
</div>
<div class="row">
komentar orang  
</div>
<div class="row">
<textarea class="col-md-12" name="" id="" cols="30" rows="10"></textarea>
                   <input class="btn btn-success col-md-12"type="submit" value="Komentari"></p>                
</div>
        </div>
    </div>       
    <br><a href="/dashboard"><strong>dashboard(hapus pas kelar)</strong></a>
</div>

<div class="col-md-2 bg-danger">
<div class="row">
<h4>username</h4>
</div>
<a href="#">Lihat post member lain</a><br>
<div>
<a href="#">Artikel1</a><br>
<a href="#">Artikel2</a><br>
<a href="#">Artikel3</a><br>
</div>
</div>
</div>

@endsection
@yield('a');
</body>
</html>		
