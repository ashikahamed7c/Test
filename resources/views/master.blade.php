<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/') }}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/') }}css/modern-business.css" rel="stylesheet">

</head>

@include('includes.header')

@yield('slider')
@yield('content')

@include('includes.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('/') }}vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ ('/') }}vendor/bootstrap/js/bootstrap.js"></script>

</html>
