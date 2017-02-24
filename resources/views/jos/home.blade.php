@extends('layouts.master')

@section('title')
Jurnal Online Sekolah
@endsection

@section('home')
class="active"
@endsection

@section('slider')
<div id="myCarousel" class="carousel slide slider" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner slider" role="listbox">
    <div class="item active slider">
      <img src="{{ asset('css/images/people-coffee-notes-tea.jpg') }}">
      <div class="carousel-caption">
        <h2>Created Your Life Algorithm</h2>
        <h4>Pramsis - Leader</h4>
      </div>
    </div>

    <div class="item slider">
      <img src="{{ asset('css/images/leave-board-hand-learn-54597.jpeg') }}">
      <div class="carousel-caption">
        <h2>Schools Can't Give You A Success,  But School Can Give You Spirit</h2>
        <h4>Fahmi - The Expert</h4>
      </div>
    </div>

    <div class="item slider">
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
<div class="container text-center">
  <hr>
  <h1>Deskripsi Singkat</h1>
  <p><em>Jurnal Online Sekolah</em></p>
  <p>We have created a fictional band website. Lorem ipsum..</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
        <img src="{{ asset('css/images/abihu.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
        <img src="{{ asset('css/images/abihu.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
        <img src="{{ asset('css/images/abihu.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
    </div>
  </div>
</div>
@endsection


@section('content2')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <hr>
      <h1 class="text-center text-home">Lihat Siapa Saja Yang Datang Hari Ini</h1>
    </div>
  </div>
</div>
@endsection

@section('content3')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover table-home">
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

           <tr>
            <td>{{ $no++ }}</td>
            <td>25910</td>
            <td>Abihu</td>
            <td>X RPL 1</td>
            <td>Tepat Waktu</td>
            <td>2017-02-17 06:36:43</td>
          </tr>

           <tr>
            <td>{{ $no++ }}</td>
            <td>25910</td>
            <td>Abihu</td>
            <td>X RPL 1</td>
            <td>Tepat Waktu</td>
            <td>2017-02-17 06:36:43</td>
          </tr>

           <tr>
            <td>{{ $no++ }}</td>
            <td>25910</td>
            <td>Abihu</td>
            <td>X RPL 1</td>
            <td>Tepat Waktu</td>
            <td>2017-02-17 06:36:43</td>
          </tr>

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
