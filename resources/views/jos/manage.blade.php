@extends('Layouts.master')

@section('title')
Management
@endsection


@section('manage')
class="active"
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>Class Data</h1>
          <h5 class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam</h5>
          <a href="{{ route('manage.xrpl1') }}"><h4 class="text-center">X RPL 1</h4></a>
          <a href="{{ route('manage.xirpl1') }}"><h4 class="text-center">XI RPL 1</h4></a>
          <a href="{{ route('manage.xiirpl1') }}"><h4 class="text-center">XII RPL 1</h4></a>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>Teacher Data</h1>
          <h5 class="text">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h5>
          <a href="{{ route('head') }}"><h4 class="text-center">Head Of Department</h4></a>
          <a href="{{ route('normative') }}"><h4 class="text-center">Normative Teacher</h4></a>
          <a href="{{ route('productive') }}"><h4 class="text-center">Productive Teacher</h4></a>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>Administrator</h1>
          <h5 class="text">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h5>
          <a href="{{ route('Admin') }}"><h4 class="text-center">Admin</h4></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
