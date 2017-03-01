@extends('Layouts.crud')

@section('title')
Data Guru Produktif
@endsection

@section('manage')
class="active"
@endsection

@section('header')
@include('Layouts.partials._modal')
@endsection

@section('modal-title')
Buat Data Guru Produktif
@endsection

@section('slider')
  @include('Layouts.partials._slider-kelas')
@endsection

@section('content')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
      <h1 class="text-center text-home"><hr>Data Guru Produktif</hr></h1>
    </div>
  </div>
</div>
@endsection

@section('content2')
@include('Layouts.partials._alert')
@endsection

@section('form')
<form action="{{ route('productive') }}" method="post">
  <input type="number" name="nip" class="form-control update" placeholder="NIP">
  <input type="text" name="nama" class="form-control update" placeholder="Nama">
  <input type="text" name="username" class="form-control update" placeholder="Username">
  <input type="password" name="password" class="form-control update" placeholder="password">
  <select class="form-control update" name="jen_kel">
    <option class="form-control">Pria</option>
    <option class="form-control">Wanita</option>
  </select>
  <input type="hidden" name="type_guru" class="form-control update" value="Productive">
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
  <th>Aksi</th>
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
  <tr>
    <td colspan="10">
    <center>
    <button type="button" class="btn btn-primary button-modal" data-toggle="modal" data-target="#myModal">Buat Data Guru Produktif</button>
    </center>
    </td>
  <tr>
@endsection
