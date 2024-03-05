<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="{{ asset('') }}assets/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/apexcharts.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/prism.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/rangeslider.css">
    {{-- <link rel="stylesheet" href="{{ asset('') }}assets/css/sweetalert.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('') }}assets/css/quill.snow.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
    <script src="{{ asset('') }}vendor/sweetalert/sweetalert.all.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <title>PMB - UNIBA MADURA</title>
</head>

<body>

    @include('sweetalert::alert')

    @include('layouts.menu_admin')


    @yield('content')

    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('') }}assets/js/dragdrop.js"></script>
    <script src="{{ asset('') }}assets/js/rangeslider.min.js"></script>
    <script src="{{ asset('') }}assets/js/sweetalert.js"></script>
    <script src="{{ asset('') }}assets/js/quill.min.js"></script>
    <script src="{{ asset('') }}assets/js/data-table.js"></script>
    <script src="{{ asset('') }}assets/js/prism.js"></script>
    <script src="{{ asset('') }}assets/js/clipboard.min.js"></script>
    <script src="{{ asset('') }}assets/js/feather.min.js"></script>
    <script src="{{ asset('') }}assets/js/simplebar.min.js"></script>
    <script src="{{ asset('') }}assets/js/apexcharts.min.js"></script>
    <script src="{{ asset('') }}assets/js/amcharts.js"></script>
    <script src="{{ asset('') }}assets/js/custom/ecommerce-chart.js"></script>
    <script src="{{ asset('') }}assets/js/custom/custom.js"></script>

</body>


</html>
