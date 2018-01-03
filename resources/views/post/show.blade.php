@extends('layouts/app')
@section('content')
<div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
    <div class="row">
        <div class="panel-group col-md-12">

            <div class="panel panel-default ">
                <div href="#col{{$post->id}}" class="panel-heading text-wrap-auto">
                    <h4>
<span style="text-align:left;float:left">{{$post->title}} <small><em>{{$post->created_at}}</em> <br>Updated : {{$post->updated_at->diffforHumans()}}</small></span>
<span class="hidden-phone" style="text-align:right;float:right"> <small>  By : </small><em>{{$post->user->name}}</em></span>
<br><br>                    
                    </h4>
                </div>
            <div id="col{{$post->id}}" class="panel-collapse ">
                <div class="panel-body form-group-row">
                    <div class="row container col-md-10 col-md-offset-1 text-justify mr-auto">
                    <img src="{{ asset($post->foto)}}" alt="fotonya" width="200px" height="200px">
                    {{$post->content}} 
                    <small><br>Kategori : {{$post->category->name}}</small>
                    <br>
                <br><hr>
                    </div>
                    <div class="row container col-md-8 col-md-offset-3 text-justify mr-auto">
@foreach($post->comments()->get() as $comment)
                    <h4>Komentar <em>{{$comment->user->name}}</em>:</h4>
{{$comment->message}}<br>
<small>{{$comment->created_at}}</small>
@endforeach
                    <hr>
                    <form class="form-group has-feedback{{$errors->has('title') ? 'has error' : ''}}" action="{{route('post.comment.store',$post)}}" method="post">
                    {{csrf_field()}}
<div class="col-md-10">
<textarea name="message" id="" cols="30" style="height:80px;width:380px" class="form-control" placeholder="tulis komentar yang banyak"></textarea>
            @if($errors->has('message'))
            <span class="help-block alert-warning">
            <p>{{$errors->first('message')}}</p>
            </span>
            @endif
</div>
                        @if(Auth::user()->name==$post->user->name)
<div class="col-md-2">
<input name="user_id" type="hidden" value="{{Auth::user()->id}}" id="user_id">
<input name="post_id" type="hidden" value="{{$post->id}}" id="post_id">
<input type="submit" id="comment" value="Cobain Komentari" class="btn btn-primary pull-right" style="height:80px">
</div>
@else
<div class="col-md-2">
<input type="submit" id="comment" value="Cobain Komentari" class="btn btn-primary pull-right" style="height:80px">
</div>

@endif</form>
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
<script>
$('#comment').on('click',function(event){
$.ajax({
    type:'POST',
    url:'/post',
    dataType:'json',
    data:{
        '_token':$('input[name=_token').val(),
        'user_id':$('#user_id').val(),
        'post_id':$('#post_id').val(),
        'comment':$('#comment').val(),
    }
});
});
</script>
@endsection

