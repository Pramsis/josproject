<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>JOS - @yield('title')</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



  </head>
  <body onload="tanggal()" id="myPage">

    @include('Layouts.partials._navigation')

    @include('Layouts.partials._slider-kelas')

    @yield('content')

    @yield('content2')

    @include('Layouts.partials._modal')

    @include('Layouts.partials._tablecrud')

    @include('layouts.partials._footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/clock.js') }}"></script>
    <script src="{{ asset('js/date.js') }}"></script>

  </body>
</html>
