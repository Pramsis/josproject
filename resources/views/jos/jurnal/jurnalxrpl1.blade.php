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
Insert Data On Journal X RPL 1
@endsection

@section('button')
Create Data On Journal X RPL 1
@endsection


@section('form')
<form action="{{ route('jurnal.xrpl1') }}" method="post">
  <input type="hidden" id="myDate" name="date" class="form-control">
  <input type="hidden" name="kelas" class="form-control update" value="X RPL 1">
  <input type="text" name="todo" class="form-control update" placeholder="To Do Class Mate">
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
@endsection
