@extends('Layouts.t_kelas')

@section('title')
XI RPL 1
@endsection

@section('class')
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
      <h1 class="text-center text-home">Siswa Dari XI RPL 1</h1>
    </div>
  </div>
</div>
@endsection

@section('table')
<thead>
  <th>#</th>
  <th>ID Siswa</th>
  <th>NISN</th>
  <th>Nama</th>
  <th>Jenis Kelamin</th>
  <th>Kelas</th>
  <th>Tanggal Lahir</th>
  <th>Alamat</th>
  <th>Telepon</th>
  <th>Agama</th>
</thead>

<?php

$no=1;
// $Absen = App\Models\Absen::find(9);

?>

  @foreach($Mastersiswas as $Mastersiswa)
    <?php $Absen = App\Models\Absen::find($Mastersiswa->id_siswa) ?>
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $Mastersiswa->id_siswa }}</td>
    <td>{{ $Mastersiswa->nisn }}</td>
    <td>{{ $Mastersiswa->nama }}</td>
    <td>{{ $Mastersiswa->jen_kel }}</td>
    <td>{{ $Mastersiswa->kelas }}</td>
    <td>{{ $Mastersiswa->tanggal_lahir }}</td>
    <td>{{ $Mastersiswa->alamat }}</td>
    <td>{{ $Mastersiswa->telepon }}</td>
    <td>{{ $Mastersiswa->agama }}</td>
  <tr>
@endforeach


@endsection

@section('content2')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
    <hr>
      <h1 class="text-center text-home text-kelas">Absensi Kehadiran X RPL 1</h1>
      <table class="table table-hover table-home text-center">
        <thead>
          <th class="text-center">#</th>
          <th class="text-center">NISN</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Kelas</th>
          <th class="text-center">Status</th>
          <th class="text-center">Datang Pada</th>
        </thead>



        <?php

        $no=1;

        ?>

        @foreach( $Absens as $Absen)
          <?php $Mastersiswa = App\Models\Mastersiswa::find($Absen->id_siswa) ?>
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $Mastersiswa->nisn }}</td>
            <td>{{ $Mastersiswa->nama }}</td>
            <td>{{ $Mastersiswa->kelas}}</td>
            <td>{{ $Absen->status }}</td>
            <td>{{ $Absen->kedatangan }}</td>
          </tr>

        @endforeach
          <tr>
            <td colspan="10">
            <center>
            <button type="button" class="btn btn-primary button-modal" data-toggle="modal" data-target="#myModal">Buat Izin Khusus Siswa Yang Tidak Masuk</button>
            </center>
            </td>
          <tr>
        </table>
    </div>
  </div>
</div>
@endsection

@section('form')
<form action="/absensi-izin" method="post">
  <input type="text" name="id_siswa" placeholder="Masukkan ID Siswa" class="form-control update">
  <input type="hidden" name="kelas" value="XI RPL 1" class="form-control update">
  <input type="hidden" value="Tidak Masuk" name="kedatangan" class="form-control">
  <input type="text" name="status" class="form-control update" placeholder="Masukkan Alasan Mengapa Tidak Masuk">
@endsection

@section('endform')
</form>
@endsection
