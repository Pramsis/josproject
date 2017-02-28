@extends('Layouts.crud')

@section('title')
Update Normative
@endsection

@section('manage')
class="active"
@endsection

@section('header')
@include('Layouts.partials._modal')
@endsection

@section('modal-title')
Buat Data Guru Normatif
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
      <h1 class="text-center text-home"><hr>Data Guru Nornative</hr></h1>
    </div>
  </div>
</div>
@endsection

@section('content2')
@include('Layouts.partials._alert')
@endsection

@section('form')
<form action="{{ route('normative') }}" method="post">
  <input type="number" name="nip" class="form-control update" placeholder="NIP">
  <input type="text" name="nama" class="form-control update" placeholder="Nama">
 <input type="password" name="password" class="form-control update" placeholder="Password">
  <select class="form-control update" name="jen_kel">
    <option class="form-control">Pria</option>
    <option class="form-control">Wanita</option>
  </select>
  <input type="hidden" name="type_guru" class="form-control update" value="Normative">
  <input type="text" name="mapel" class="form-control update" placeholder="Mata Pelajaran">
 <input type="hidden" name="level" class="form-control update" value="Guru">
 @endsection

@section('endform')
</form>
@endsection


@section('table')
<tr>
  <th>#</th>
  <th>NIP</th>
  <th>Nama</th>
  <th>Jenis Kelamin</th>
  <th>Tipe Guru</th>
  <th>Mata Pelajaran</th>
  <th>Action</th>
</tr>

<?php $no=1; ?>

  @foreach($Mastergurus as $Masterguru)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $Masterguru->nip }}</td>
    <td>{{ $Masterguru->nama }}</td>
    <td>{{ $Masterguru->jen_kel }}</td>
    <td>{{ $Masterguru->type_guru }}</td>
    <td>{{ $Masterguru->mapel }}</td>
    <td>
      <form class="" action="/manage/update-head/{{ $Masterguru->id_guru }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <a href="{{ route('editguru', $Masterguru->id_guru)}}" class="btn btn-primary">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </a>
        <button type="submit" name="submit" class="btn btn-danger" value="Delete">
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        </button>
      </form>
    </td>
  </tr>

  @endforeach

@endsection
