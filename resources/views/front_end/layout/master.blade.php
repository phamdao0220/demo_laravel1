<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('front-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/style.css')}}">
    @yield('css')

</head>

<body>
@include('front_end.layout.header')

@yield('content')
@include('front_end.layout.footer')

<script src="{{asset('front-end/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front-end/js/jquery.sticky.js')}}"></script>
<script src="{{asset('front-end/js/jquery.easing.1.3.min.js')}}"></script>
<script src="{{asset('front-end/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/js/bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/js/script.slider.js')}}"></script>
@yield('js')

</body>
</html>
