@extends('layouts/app')
@section('content')
<div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cobain Bikin Artikel Baru</div>
                <div class="panel-body">
<form action="{{ route('post.store')}}" method="post" accept="image/*" enctype="multipart/form-data">
{{csrf_field()}}
        <div class="form-group has-feedback{{$errors->has('title') ? 'has error' : ''}}">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Post title">
            @if($errors->has('title'))
            <span class="help-block alert-warning">
            <p>{{$errors->first('title')}}</p>
            </span>
            @endif
        </div>
            <input type="hidden" class="form-control" name="user_id" value="{{str_slug(Auth::user()->id)}}">
        <div class="form-group">
            <label for="">Kategori</label>
            <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group has-feedback{{$errors->has('content') ? 'has error' : ''}}">
            <label for="">Content</label>
            <textarea name="content" rows="5" class="form-control"  placeholder="Post Content">{{old('content')}}</textarea>
            @if($errors->has('content'))
            <span class="help-block alert-warning">
            <p>{{$errors->first('content')}}</p>
            </span>
            @endif
        </div>
        <div class="form-group">
        <input type="file" name="foto" class="form-control" value="foto" id="foto" style="height:40px;padding-bottom:45px">
</div>
            <input type="submit" class="btn btn-primary" value="save" >
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
