@extends('layouts.app')

@section('content')
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
<a href="{{ url('/home', $user->id) }}" onclick="return confirm('Yakin mau cobain hapus data ini?')" class="label label-danger">Delete</a>
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
                    @foreach($data as $user)
            <div class="panel panel-default ">
                <div data-toggle="collapse" data-parent="#accordion" href="#col{{$user->id}}" class="panel-heading">
                    <h4>
                    <strong>Judul artikel {{$user->name}}</strong>
                    </h4>
                </div>
            <div id="col{{$user->id}}" class="panel-collapse collapse">
                <div class="panel-body form-group-row">
                    <div class="row container col-md-10 col-md-offset-1 text-justify mr-auto">
                    konten artikel {{$user->name}} 
                    vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus.
Vivamus a mi. Morbi neque. Aliquam erat volutpat. Integer ultrices lobortis eros.
                    <hr></div>
                    @foreach($artikelnya as $artikel)
                    <div class="row container col-md-8 col-md-offset-3 text-justify mr-auto">
                    <h4>komentar {{$artikel->judul}}:</h4>
isi komentar {{$artikel->konten}}<br>
                    <hr>
                    </div>
                    @endforeach
                    <div class="col-md-8 col-md-offset-3 text-justify mr-auto">
<!--
                    komentar ini diganti jadi ajax
<textarea class="col-md-12" name="" id="" cols="30" rows="10"></textarea>
-->
				<button type="button" class="btn btn-success col-md-12" data-toggle="modal" data-target="#create-item">

					  Komentari

				</button>

                    </div>
                </div>
            </div>
        </div>
 @endforeach
                  
    <br><a href="/"><strong>index(hapus pas kelar)</strong></a>
    </div>
                       </div>
                        @endif
            </div>
        </div>
</div>
@endsection
