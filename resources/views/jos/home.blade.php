@extends('layouts.t_about')

@section('title')
Jurnal Online Sekolah
@endsection

@section('home')
class="active"
@endsection

@section('jumbotron')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('css/images/startup-photos.jpg') }}" alt="New York">
      <div class="carousel-caption">
        <h2>Created Your Life Algorithm</h2>
        <p>Pramsis - Leader</p>
      </div>
    </div>

    <div class="item">
      <img src="{{ asset('css/images/leave-board-hand-learn-54597.jpeg') }}" alt="Chicago">
      <div class="carousel-caption">
        <h2>Schools Can't Give You A Success,  But School Can Give You Spirit</h2>
        <p>Fahmi - The Expert</p>
      </div>
    </div>

    <div class="item">
      <img src="{{ asset('css/images/pexels-photo-207580.jpeg') }}" alt="Los Angeles">
      <div class="carousel-caption">
        <h2>Hacking Like A Magic ,We Have Know About Identity Of Target </h2>
        <p>Abihu - Hackerman</p>
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
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center text-home">See Another Student In School</h1>
    </div>
  </div>
</div>
@endsection

@section('content2')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <tr>
          <th>#</th>
          <th>NISN</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Status</th>
          <th>Datang Pada</th>
        </tr>

        <?php $no=1; ?>


          <tr>
            <td>{{ $no++ }}</td>
            <td>25910</td>
            <td>Abihu</td>
            <td>X RPL 1</td>
            <td>Tepat Waktu</td>
            <td>2017-02-17 06:36:43</td>
          </tr>

        </table>
    </div>
  </div>
</div>
@endsection
