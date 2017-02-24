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
<div class="container text-justify">
  <hr class="horizontal">
  <h1 class="text-center">Deskripsi Singkat</h1>
  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
</div>
@endsection

@section('content2')
<div class="container text-center">
  <hr class="horizontal">
  <h1 class="text-opinion">Pendapat Dari Siswa</h1>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Fahmi Akbar Dzul Fikri</strong></p><br>
        <img src="{{ asset('css/images/Fahmi-Akbar-DzulFikri.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Alhamdulilah, Berkat adanya Jurnal Online Sekolah bisa memudahkan saya dalam hal absensi dan lebih efisien semoga aplikasi ini lebih di kembangkan lagi ketahap yang lebih profesional</p>
        <p>Murid SMKN 2 Surabaya Jurusan RPL</p>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Abihu Presly Haezer</strong></p><br>
        <img src="{{ asset('css/images/abihu.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Syukur , Jurnal online sekolah memang top dan membuat saya agar tidak kedepan ruang piket untuk mengambil buku jurnal sehingga saya bisa datang lebih cepat dikelas apalagi kelas saya ada di paling belakang</p>
        <p>Murid SMKN 2 Surabaya Jurusan RPL</p>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Dimas Pramudya Sumarsis</strong></p><br>
        <img src="{{ asset('css/images/pramsis.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Dengan Adanya Aplikasi ini jurnal online sekolah , membuat para guru semakin mudah dan ingat dalam mengisi jurnal harian sekolah dan tidak perlu mengecek kehadiran dengan memanggil murid satu persatu</p>
        <p>Murid SMKN 2 Surabaya Jurusan RPL</p>
    </div>
  </div>
</div>
@endsection


@section('content3')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <hr class="horizontal">
      <h1 class="text-center text-table">Lihat Siapa Saja Yang Datang Hari Ini</h1>
    </div>
  </div>
</div>
@endsection

@section('content4')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover table-home text-center">
        <thead>
          <th class="text-center">#</th>
          <th class="text-center">NISN</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Kelas</th>
          <th class="text-center">Status</th>
          <th class="text-center">Datang Pada</th>
        </thead>

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
