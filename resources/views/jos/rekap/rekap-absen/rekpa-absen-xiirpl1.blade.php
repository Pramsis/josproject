@extends('Layouts.t_kelas')

@section('title')
Rekap X RPL 1
@endsection

@section('recap')
class="active"
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
