@extends('Layouts.t_kelas')

@section('title')
X RPL 1
@endsection

@section('class')
class="active"
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
  <th>Status Kehadiran</th>
</tr>

<?php $no=1; ?>

  @foreach($Mastersiswas as $key => $value)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $value->nisn }}</td>
    <td>{{ $value->nama }}</td>
    <td>{{ $value->jen_kel }}</td>
    <td>{{ $value->kelas }}</td>
    <td>{{ $value->tanggal_lahir }}</td>
    <td>{{ $value->alamat }}</td>
    <td>{{ $value->telepon }}</td>
    <td>{{ $value->agama }}</td>
  <tr>
  @endforeach

@endsection
