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

@section('button')
Create Data On Admin
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
        <a href="{{ route('editadmin', $Admin->id_admin)}}" class="btn btn-primary">Edit</a>
        <input type="submit" name="submit" class="btn btn-danger" value="Delete">
      </form>
    </td>
  </tr>

  @endforeach

@endsection
