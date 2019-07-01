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
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '9a22ee3a46c3bcd0f4d2f458593160bbe76aada9';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <style>
        .btn{
            box-shadow: unset !important;
        }
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
        @media only screen and (max-width: 600px) {
            .fixed-top-sm {
                position: absolute;
                background-color: rgb(51, 51, 51);
            }
            .carrousel-sm{
                padding-top: 5.2rem
            }
            .carousel-caption {
                top: 5% !important;
            }
            .carousel-caption {
                font-size: 12px !important;
            }
            .carousel-caption h2{
                font-size: 14px !important;
            }
            .carousel-caption a{
                margin: 0px !important;
                padding: 0 2px !important;
                font-size: 10px !important;
            }
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