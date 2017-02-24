@extends('Layouts.crud')

@section('title')
Admin
@endsection

@section('manage')
class="active"
@endsection

@section('header')
@include('Layouts.partials._modal')
@endsection

@section('modal-title')
Create Data On Admin Table
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
      <h1 class="text-center text-home"><hr>Data Admin</hr></h1>
    </div>
  </div>
</div>
@endsection


@section('form')
<form action="{{ route('Admin') }}" method="post">
  <input type="text" name="nama" class="form-control update" placeholder="Nama">
  @if( $errors->has('nama'))
   <p> {{ $errors->first('nama') }}</p>
 @endif
 <input type="password" name="password" class="form-control update" placeholder="Password">
 @if( $errors->has('password'))
  <p> {{ $errors->first('password') }}</p>
@endif
  <input type="text" name="alamat" class="form-control update" placeholder="Alamat">
  @if( $errors->has('alamat'))
   <p> {{ $errors->first('alamat') }}</p>
 @endif
 <input type="number" name="telepon" class="form-control update" placeholder="Telepon">
 @if( $errors->has('telepon'))
  <p> {{ $errors->first('telepon') }}</p>
@endif


@endsection

@section('endform')
</form>
@endsection



@section('table')
<tr>
  <th>#</th>
  <th>Nama</th>
  <th>Alamat</th>
  <th>Telepon</th>
  <th>Action</th>
</tr>

<?php $no=1; ?>

  @foreach($Admin as $Admin)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $Admin->nama }}</td>
    <td>{{ $Admin->alamat }}</td>
    <td>{{ $Admin->telepon }}</td>
    <td>
      <form class="" action="/manage/admin/{{ $Admin->id_admin }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <a href="{{ route('editadmin', $Admin->id_admin)}}" class="btn btn-primary">
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
    <td colspan="5">
    <center>
    <button type="button" class="btn btn-primary button-modal" data-toggle="modal" data-target="#myModal">Buat Admin</button>
    </center>
    </td>
  <tr>
@endsection
