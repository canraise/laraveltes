@extends('layout/layout')
<body>

{{$i=0}}

@if($i==1){
    @section('admin')
<h1>TABEL MEMBER</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="10%">Id</th>
                        <th width="45%">Namauser</th>
                        <th width="25%">Email</th>
                        <th width="35%">Action</th>
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
                                <a href="" class="label label-success">Details</a>
                                <a href="{{ url('edit', $user->id) }}" class="label label-warning">Edit</a>
<a href="{{ url('/dashboard', $user->id) }}" onclick="return confirm('Yakin mau hapus data ini sob?')" class="label label-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>    
                </table>
            </div>
        </div>        
@endsection
}    

@elseif($i==0){

@section('member')
<div class="row">
<div class="col-md-12 text-center">
<h1>List artikel & komen member</h1>
</div>
    <div class="row">
        <div class="panel-group col-md-10" id="accordion">
                    @foreach($data as $user)
            <div class="panel panel-default ">
                <div data-toggle="collapse" data-parent="#accordion" href="#col{{$user->id}}" class="panel-heading">
                    <h4>
                    <strong>Judul artikel {{$user->id}}</strong>
                    </h4>
                </div>
            <div id="col{{$user->id}}" class="panel-collapse collapse">
                <div class="panel-body form-group-row">
                    <div class="row container col-md-10 col-md-offset-1 text-justify mr-auto">
                    konten artikel {{$user->name}} 
                    Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede.
Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.
Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique.
Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna.
Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus.
Vivamus a mi. Morbi neque. Aliquam erat volutpat. Integer ultrices lobortis eros.
                    <hr></div>
                    @foreach($data as $user)
                    <div class="row container col-md-8 col-md-offset-3 text-justify mr-auto">
                    <h4>komentar {{$user->email}}:</h4>
isi komentar {{$user->id}}<br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede.                    
                    <hr>
                    </div>
                    @endforeach
                    <div class="col-md-8 col-md-offset-3 text-justify mr-auto">
                    komentar ini diganti jadi ajax
<textarea class="col-md-12" name="" id="" cols="30" rows="10"></textarea>
                    <input class="btn btn-success col-md-12"type="submit" value="Komentari"></p>                
                    </div>
                </div>
            </div>
        </div>
 @endforeach
                  
    <br>
    </div>

    <div class="col-md-2">
        <div class="row">
        <h4>username</h4>
        </div>
    <a href="/article">Bikin Artikel</a><br>
    <a href="#">logout</a><br>
    </div>
</div>
</div>
@endsection

}
@else{

<h1>Silahkan login dahulu atau buat akun <a href="/">Disini</a>
</h1>
}

@endif
@section('footer')
  <p>Posted by: Candra</p>
  <p>Contact information: <a href="mailto:canraise@gmail.com">
  canraise@gmail.com</a>.</p>
@endsection
   
</body>

<!--
    
di content ada lihat user diklik  masuk ke list artikel diklik ada komentar+form isi komentar dan submit




//Kalo ud kelar tambah validasi sama autentikasi dan autorisasi
//Validasi filter isian form
//Autentikasi registrasi
//Edit komen hanya komen user bersangkutan


//Relasi databasenya diatur broh
// bikin 3 tabel, tusert tartikel tkomen
//Table user 1-N table artikel
//Table Artikel 1-N table komen

-->