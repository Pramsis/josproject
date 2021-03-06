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
  <body onload="startTime()" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('Layouts.partials._navigation')

    @yield('slider')

    @yield('content')

    @yield('content2')

    @yield('content3')

    @yield('content4')

    @yield('content5')

    @yield('content6')

    @include('layouts.partials._footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/clock.js') }}"></script>
    <script src="{{ asset('js/googleMap.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyComhy9ExIPwmmGW1AJVzB5Ki-tYUPCvE8&callback=myMap"></script>
    <script src="{{ asset('jquery.js')}}"></script>
    <script src="{{ asset('jquery-1.11.3.min.js')}}"></script>
  </body>
</html>
