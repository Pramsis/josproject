@extends('Layouts.crud')

@section('title')
Update Class XII RPL 2
@endsection

@section('manage')
class="active"
@endsection

@section('header')
@include('Layouts.partials._modal')
@endsection

@section('modal-title')
Buat Data Siswa Baru Di Tabel XII RPL 1
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
      <h1 class="text-center text-home"><hr>Data Kelas XII RPL 1</hr></h1>
    </div>
  </div>
</div>
@endsection

@section('content2')
@include('Layouts.partials._alert')
@endsection

@section('form')
<form action="/manage/update-xirpl1" method="post">
  <input type="number" name="nisn" class="form-control update"  maxlength="5" placeholder="NISN">
  <input type="text" name="nama" class="form-control update" maxlength="255" placeholder="Nama">
  <input type="password" name="password" class="form-control update" maxlength="255" placeholder="Password">
  <select class="form-control update" name="jen_kel">
    <option class="form-control">Pria</option>
    <option class="form-control">Wanita</option>
  </select>
  <input type="hidden" name="kelas" class="form-control update" maxlength="25" value="XI RPL 1">
  <input type="date" name="tanggal_lahir" class="form-control update" maxlength="6" min="1990-01-01" placeholder="Tanggal Lahir">
  <input type="text" name="alamat" class="form-control update" maxlength="255" placeholder="Alamat">
  <input type="number" name="telepon" class="form-control update" maxlength="12" placeholder="Telepon">
  <input type="text" name="agama" class="form-control update" maxlength="10" placeholder="Agama">
  <input type="hidden" name="level" class="form-control update" maxlength="10" value="Siswa">

@endsection

@section('endform')
</form>
@endsection

@section('table')
<tr>
  <th>#</th>
  <th>NISN</th>
  <th>Nama</th>
  <th>Jenis Kelamin</th>
  <th>Kelas</th>
  <th>Tanggal Lahir</th>
  <th>Alamat</th>
  <th>Telepon</th>
  <th>Agama</th>
  <td>Action</td>
</tr>

<?php $no=1; ?>

  @foreach($Mastersiswas as $Mastersiswa)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $Mastersiswa->nisn }}</td>
    <td>{{ $Mastersiswa->nama }}</td>
    <td>{{ $Mastersiswa->jen_kel }}</td>
    <td>{{ $Mastersiswa->kelas }}</td>
    <td>{{ $Mastersiswa->tanggal_lahir }}</td>
    <td>{{ $Mastersiswa->alamat }}</td>
    <td>{{ $Mastersiswa->telepon }}</td>
    <td>{{ $Mastersiswa->agama }}</td>
    <td>
      <form class="" action="/manage/update-xrpl1/{{$Mastersiswa->id_siswa}}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <a href="{{ route('editsiswa', $Mastersiswa->id_siswa)}}" class="btn btn-primary">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </a>
        <button type="submit" name="submit" class="btn btn-danger">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        </button>
      </form>
    </td>
  </tr>
  @endforeach
  <tr>
    <td colspan="10">
    <center>
    <button type="button" class="btn btn-primary button-modal" data-toggle="modal" data-target="#myModal">Buat Data Siswa Baru Di XII RPL 1</button>
    </center>
    </td>
  <tr>
@endsection
