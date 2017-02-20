@extends('Layouts.crud')

@section('title')
Update XI RPL 1
@endsection

@section('manage')
class="active"
@endsection

@section('header')
@include('Layouts.partials._modal')
@endsection

@section('modal-title')
Create Data On Table XI RPL 1
@endsection

@section('button')
Create Data On Table XI RPL 1
@endsection


@section('form')
<form action="/manage/update-xirpl1" method="post">
  <input type="number" name="nisn" class="form-control update"  maxlength="5" placeholder="NISN">
  @if( $errors->has('nisn'))
   <p> {{ $errors->first('nisn') }}</p>
  @endif
  <input type="text" name="nama" class="form-control update" maxlength="255" placeholder="Nama">
  @if( $errors->has('nama'))
   <p> {{ $errors->first('nama') }}</p>
  @endif
  <input type="password" name="password" class="form-control update" maxlength="255" placeholder="Password">
  @if( $errors->has('password'))
   <p> {{ $errors->first('password') }}</p>
 @endif
  <select class="form-control update" name="jen_kel">
    <option class="form-control">Pria</option>
    <option class="form-control">Wanita</option>
  </select>
  <input type="text" name="kelas" class="form-control update" maxlength="25" value="X RPL 1">
  @if( $errors->has('kelas'))
   <p> {{ $errors->first('kelas') }}</p>
  @endif
  <input type="date" name="tanggal_lahir" class="form-control update" maxlength="6" min="1990-01-01" placeholder="Tanggal Lahir">
  @if( $errors->has('tanggal_lahir'))
   <p> {{ $errors->first('tanggal_lahir') }}</p>
  @endif
  <input type="text" name="alamat" class="form-control update" maxlength="255" placeholder="Alamat">
  @if( $errors->has('alamat'))
   <p> {{ $errors->first('alamat') }}</p>
  @endif
  <input type="number" name="telepon" class="form-control update" maxlength="12" placeholder="Telepon">
  @if( $errors->has('telepon'))
   <p> {{ $errors->first('telepon') }}</p>
  @endif
  <input type="text" name="agama" class="form-control update" maxlength="10" placeholder="Agama">
  @if( $errors->has('agama'))
   <p> {{ $errors->first('agama') }}</p>
  @endif
  <input type="text" name="level" class="form-control update" maxlength="10" value="Siswa">
  @if( $errors->has('level'))
   <p> {{ $errors->first('level') }}</p>
@endif

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
  <th>Action</th>
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
        <a href="{{ route('editsiswa', $Mastersiswa->id_siswa)}}" class="btn btn-primary">Edit</a>
        <input type="submit" name="submit" class="btn btn-danger" value="Delete">
      </form>
    </td>
  </tr>
  @endforeach
@endsection
