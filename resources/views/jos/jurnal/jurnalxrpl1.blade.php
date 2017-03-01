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
Isi Jurnal Di Kelas X RPL 1
@endsection


@section('slider')
  @include('Layouts.partials._slider-kelas')
@endsection

@section('content')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
      <h1 class="text-center text-home"><hr>Jurnal Kelas X RPL 1</hr></h1>
    </div>
  </div>
</div>
@endsection

@section('content2')
  @include('Layouts.partials._alert')
@endsection

@section('form')
<form action="{{ route('jurnal.xrpl1') }}" method="post">
  <input type="hidden" id="myDate" name="date" class="form-control">
  <input type="hidden" name="kelas" class="form-control update" value="X RPL 1">
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
