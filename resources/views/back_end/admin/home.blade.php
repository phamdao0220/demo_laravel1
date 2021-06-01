<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
          content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('back-end/assets/images/favicon.png')}}">
    <link href="{{asset('back-end/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/dist/css/style.min.css')}}" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    @toastr_css
</head>

<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('back_end.admin.header')
    @include('back_end.admin.sidebar')

    <div class="page-wrapper">
        @yield('content')
        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionExample">
    @include('back_end.admin.footer')
</div>
        <script src="{{asset('back-end/assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
        <script src="{{asset('back-end/assets/extra-libs/sparkline/sparkline.js')}}"></script>
        <script src="{{asset('back-end/dist/js/waves.js')}}"></script>
        <script src="{{asset('back-end/dist/js/sidebarmenu.js')}}"></script>
        <script src="{{asset('back-end/dist/js/custom.min.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/flot/excanvas.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/flot/jquery.flot.time.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/flot/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
        <script src="{{asset('back-end/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('back-end/dist/js/pages/chart/chart-page-init.js')}}"></script>
</body>
@jquery
@toastr_js
@toastr_render
</html>
