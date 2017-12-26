<!DOCTYPE html>
<html lang="en">
@section('head')
<head>
    <title>Cobain</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style type="text/css">
    html, body {
        background-color: #fff;
        color: #000;
        font-family: sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
    .panel-heading{
        cursor:pointer;
    }
    p,input{
        color: #000;
        font-family:  sans-serif;
        font-weight: 200;
    }
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        color: #000;
        font-size: 84px;
        font-family:'Raleway';
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .m-b-md {
        margin-bottom: 30px;
    }
    .blk {
        display:block;
    }
    .bs-example{
        margin: 20px;
    }
    </style>
</head>
    @endsection
    @yield('head')

<body>

<!--pake if buat ngatur autorisasi-->
<div class="container">
       @yield('guests')
       @yield('admin')
       @yield('member')

</div>
 <footer class="footer text-center col-md-12">
@yield('footer1')
 </footer>
 <footer class="footer text-center col-md-10">
@yield('footer')
 </footer>
</body>


</html>



