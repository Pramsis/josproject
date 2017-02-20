@extends('Layouts.crud')

@section('title')
Update Productive
@endsection

@section('manage')
class="active"
@endsection

@section('header')
@include('Layouts.partials._modal')
@endsection

@section('modal-title')
Create Data On Table Productive Teacher
@endsection

@section('button')
Create Data On Table Productive Teacher
@endsection


@section('form')
<form action="{{ route('productive') }}" method="post">
  <input type="number" name="nip" class="form-control update" placeholder="NIP">
   @if( $errors->has('nip'))
    <p> {{ $errors->first('nip') }}</p>
  @endif
  <input type="text" name="nama" class="form-control update" placeholder="Nama">
  @if( $errors->has('nama'))
   <p> {{ $errors->first('nama') }}</p>
 @endif
 <input type="password" name="password" class="form-control update" placeholder="password">
 @if( $errors->has('password'))
  <p> {{ $errors->first('password') }}</p>
@endif
  <select class="form-control update" name="jen_kel">
    <option class="form-control">Pria</option>
    <option class="form-control">Wanita</option>
  </select>
  <input type="text" name="type_guru" class="form-control update" value="Productive">
  @if( $errors->has('type_guru'))
   <p> {{ $errors->first('type_guru') }}</p>
 @endif
  <input type="text" name="mapel" class="form-control update" placeholder="Mata Pelajaran">
  @if( $errors->has('mapel'))
   <p> {{ $errors->first('mapel') }}</p>
 @endif
 <input type="text" name="level" class="form-control update" value="Guru">
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
        <a href="{{ route('editguru', $Masterguru->id_guru)}}" class="btn btn-primary">Edit</a>
        <input type="submit" name="submit" class="btn btn-danger" value="Delete">
      </form>
    </td>
  </tr>

  @endforeach

@endsection
