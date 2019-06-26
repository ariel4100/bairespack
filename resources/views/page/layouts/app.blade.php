<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">

{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Baires Pack</title>
    @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
        @if (LaravelLocalization::getCurrentLocale()!=$key)
            <meta property="og:locale:alternate" content="{{ $key }}">
        @endif
    @endforeach
    <link rel="icon" href="">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        document.__API_URL2 = '{{ url('/') }}';
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        .baires-color{
            color: #FEB80B;
        }
        .baires-fondo{
            background-color: #FEB80B;
        }
        .activo{
            border-bottom: 2px solid #FEB80B;
            /*color: #000000 !important;*/
        }
        .card{
            border-top: 5px solid #F2F2F2;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            /*color: #000000 !important;*/
        }
        .card:hover{
            border-top: 5px solid #FFB900;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
            box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15) !important;
            /*color: #000000 !important;*/
        }
    </style>
    @stack('style')
</head>
<body style="font-family: 'Montserrat', sans-serif; color: #595959;">
<div id="app">
    @include('page.partials.header')
    <main class=" ">
        @yield('content')
    </main>
    @include('page.partials.footer')
</div>

<!-- Optional JavaScript -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script>
    new WOW().init();
</script>
@stack('script')
</body>
</html>