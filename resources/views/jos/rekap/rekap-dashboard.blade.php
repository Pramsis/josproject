@extends('Layouts.master')

@section('title')
Recap
@endsection


@section('recap')
class="active"
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>X RPL 1</h1>
          <h5 class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam</h5>
          <a href="{{ route('rekapAbsenXrpl1') }}"><h4 class="text-center">Absen</h4></a>
          <a href="{{ route('rekapJurnalXrpl1') }}"><h4 class="text-center">Jurnal</h4></a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>XI RPL 1</h1>
          <h5 class="text">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h5>
          <a href="{{ route('rekapAbsenXirpl1') }}"><h4 class="text-center">Absen</h4></a>
          <a href="{{ route('rekapJurnalXirpl1') }}"><h4 class="text-center">Jurnal</h4></a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>XII RPL 1</h1>
          <h5 class="text">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h5>
          <a href="{{ route('rekapAbsenXiirpl1') }}"><h4 class="text-center">Absen</h4></a>
          <a href="{{ route('rekapJurnalXiirpl1') }}"><h4 class="text-center">Jurnal</h4></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
