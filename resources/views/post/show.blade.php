@extends('layouts/app')
@section('content')
<div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List Artikel</div>
                        <div class="panel-body">
    <div class="row">
        <div class="panel-group col-md-12">

            <div class="panel panel-default ">
                <div href="#col{{$post->id}}" class="panel-heading">
                    <h4>
                    <strong>{{$post->title}}</strong>
                    <small>{{$post->created_at->diffforHumans()}}</small>
                    <br>
                    </h4>
                </div>
            <div id="col{{$post->id}}" class="panel-collapse ">
                <div class="panel-body form-group-row">
                    <div class="row container col-md-10 col-md-offset-1 text-justify mr-auto">
                    konten artikel {{$post->content}} 
                    <small><br>Kategori : {{$post->category->name}}</small>
                    <br>

                <br><hr>
                    </div>
                    <div class="row container col-md-8 col-md-offset-3 text-justify mr-auto">
@foreach($post->comments()->get() as $comment)
                    <h4>Komentar <em><a href="#">{{$comment->user->name}}</a></em>:</h4>
isi komentar {{$comment->message}}<br>
<small>{{$comment->created_at}}</small>
@endforeach
                    <hr>
                    <form class="form-group has-feedback{{$errors->has('title') ? 'has error' : ''}}" action="{{route('post.comment.store',$post)}}" method="post">
                    {{csrf_field()}}
<div class="col-md-10">
<textarea name="message" id="" cols="30" style="height:80px" class="form-control" placeholder="tulis komentar yang banyak"></textarea>
            @if($errors->has('message'))
            <span class="help-block alert-warning">
            <p>{{$errors->first('message')}}</p>
            </span>
            @endif
</div>
<div class="col-md-2">
<input type="submit" value="komentari" class="btn btn-primary pull-right" style="height:80px">
</div></form>
                    </div>

                </div>
            </div>
        </div>

                  
    </div>
                       </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

