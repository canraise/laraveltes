@extends('layouts/app')
@section('content')
<div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">EDIT</div>
                <div class="panel-body">
<form action="{{ route('post.update',$post)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Post title" value="{{$post->title}}">
        </div>
            <input type="hidden" class="form-control" name="user_id" value="{{str_slug(Auth::user()->id)}}">
        <div class="form-group">
            <label for="">Kategori</label>
            <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{$category->id}}"
            @if ($category->id === $post->category_id)
            selected
            @endif
            >{{$category->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="content" rows="5" class="form-control" placeholder="Post Content">{{$post->content}}</textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="save">
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection