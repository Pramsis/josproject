@extends('Layouts.master')

@section('title')
Recap
@endsection


@section('recap')
class="active"
@endsection

@section('slider')
<div id="myCarousel" class="carousel slide slider-kelas" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner slider-kelas" role="listbox">
    <div class="item active slider-kelas">
      <img src="{{ asset('css/images/people-coffee-notes-tea.jpg') }}">
      <div class="carousel-caption">
        <h2>Created Your Life Algorithm</h2>
        <h4>Pramsis - Leader</h4>
      </div>
    </div>

    <div class="item slider-kelas">
      <img src="{{ asset('css/images/leave-board-hand-learn-54597.jpeg') }}">
      <div class="carousel-caption">
        <h2>Schools Can't Give You A Success,  But School Can Give You Spirit</h2>
        <h4>Fahmi - The Expert</h4>
      </div>
    </div>

    <div class="item slider-kelas">
      <img src="{{ asset('css/images/pexels-photo-207580.jpeg') }}">
      <div class="carousel-caption">
        <h2>Hacking Like A Magic ,We Have Know About Identity Of Target </h2>
        <h4>Abihu - Hackerman</h4>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection

@section('content')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
      <h1 class="text-center text-home"><hr>Rekapitulasi Data</hr></h1>
    </div>
  </div>
</div>
@endsection



@section('content2')
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
