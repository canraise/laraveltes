@extends('layouts/app')
@section('content')
<div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if(Auth::user()->name=='admin')
                <div class="panel-heading"><h1>Tabel Member</h1></div>
                @else
                <div class="panel-heading"><h1>List Semua Artikel</h1></div>
                @endif
                        @if(Auth::user()->name=='admin')
                        <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="5%">Id</th>
                        <th width="20%">Namauser</th>
                        <th width="15%">Email</th>
                        <th width="10%">Action</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach($data as $user)
                        <tr>
                            <td class="table-text">
                                <div>{{$user->id}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->name}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$user->email}}</div>
                            </td>
                            <td>
                            @if($user->name=='admin')
                            @else
                        <a href="{{ url('edit', $user->id) }}" class="label label-warning">Edit</a>
<a href="{{ url('/post', $user->id) }}" onclick="return confirm('Yakin mau cobain hapus data ini?')" class="label label-danger">Delete</a>
                            @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>    
                </table>
            </div>
        </div>        
                       </div>

                        @else
                        <div class="panel-body">
    <div class="row">
        <div class="panel-group col-md-12" id="accordion">
                    @foreach($posts as $post)
            <div class="panel panel-default ">
                <div data-toggle="collapse" data-parent="#accordion" href="#col{{$post->id}}" class="panel-heading">
                    <h4>
                    <strong>{{$post->title}}</strong>
                    <em> by {{$post->user->name}} </em>
                    <small>{{$post->updated_at->diffforHumans()}}</small>
                    <small>
                    <div class="pull-right">
                    <strong>({{$post->comments->count()}}) Komentar</strong>
                    </div>
                    </small>                                        
                    </h4>
                </div>
            <div id="col{{$post->id}}" class="panel-collapse collapse">
                <div class="panel-body form-group-row">
                    <div class="row container col-md-10 col-md-offset-1 text-justify mr-auto">
                    konten artikel {{str_limit($post->content, 400,' ...')}} 
                    <small><br>Kategori : {{$post->category->name}}</small>
                    <br>
                        @if(Auth::user()->name==$post->user->name)
                                        <div class="pull-right">
                                        <form action="{{route('post.destroy',$post)}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">
                    Hapus
                    </button>
                    </form>
                    </div>
                                        <div class="pull-right">
                                        <a href="{{route('post.edit',$post)}}" class="btn btn-warning">Edit</a>
                                        </div>
                                        <div class="pull-right">
                                        <a href="{{route('post.show',$post)}}" class="btn btn-info">Selengkapnya</a>
                                        </div>

@else
                                        <div class="pull-right">
                                        <a href="{{route('post.show',$post)}}" class="btn btn-info">Selengkapnya</a>
                                        </div>
@endif
                <br>
                    </div>
                    <div class="col-md-8 col-md-offset-3 text-justify mr-auto">
                    </div>
                </div>
            </div>
        </div>
 @endforeach
                  
    </div>
                       </div>
                  {!!$posts->render()!!}
@endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection

