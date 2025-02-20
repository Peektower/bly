<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::BLY::  Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    @include('partials.admin.inc_top')
</head>
<body>
<div id="ebazar-layout" class="theme-blue">

    <!-- sidebar -->
    @include('partials.admin.side-bar')

    <!-- main body area -->
    @yield('content')

</div>

@include('partials.admin.inc_bottom')

</body>
</html>
