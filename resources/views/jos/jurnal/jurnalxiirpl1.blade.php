@extends('Layouts.crud')

@section('title')
Everyday Journal
@endsection


@section('jurnal')
class="active"
@endsection

@section('header')
@include('Layouts.partials._modal')
@endsection

@section('modal-title')
Isi Jurnal Di Kelas XII RPL 2
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
      <h1 class="text-center text-home"><hr>Jurnal Kelas XII RPL 1</hr></h1>
    </div>
  </div>
</div>
@endsection

@section('content2')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
    @if( $errors->has('todo'))
      <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> Maaf Anda Harus Mengisi Kolom Jurnal!
      </div>
    @endif
    </div>
  </div>
</div>
@endsection

@section('form')
<form action="{{ route('jurnal.xiirpl1') }}" method="post">
  <input type="hidden" id="myDate" name="date" class="form-control">
  <input type="hidden" name="kelas" class="form-control update" value="XII RPL 1">
  <input type="text" name="todo" class="form-control input-lg update" placeholder="Kamu Mau Isi Apa Hari Ini {{ Auth::guard('guru')->user()->nama}} ?">
  <input type="hidden" name="nama_guru" class="form-control update" value="{{ Auth::guard('guru')->user()->nama }}">
@endsection

@section('endform')
</form>
@endsection


@section('table')

<tr>
  <th>#</th>
  <th>Time Teaching</th>
  <th>Class</th>
  <th>Todo Classmate</th>
  <th>Teacher</th>
</tr>

<?php $no=1; ?>

@foreach($Masterjurnals as $Masterjurnal)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $Masterjurnal->date }}</td>
    <td>{{ $Masterjurnal->kelas}}</td>
    <td>{{ $Masterjurnal->todo }}</td>
    <td>{{ $Masterjurnal->nama_guru }}</td>
  <tr>
@endforeach
  <tr>
    <td colspan="5">
    <center>
    <button type="button" class="btn btn-primary button-modal primer" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
      <strong>Isi Jurnal</strong></button>
    </center>
    </td>
  <tr>

@endsection
