@extends('Layouts.t_about')

@section('title')
Editing Data Admin
@endsection

@section('manage')
class="active"
@endsection



@section('jumbotron')
<h1>Edit</h1>
    <form action="{{ route('admin.update', $Admin->id_admin) }}" method="post">
      <input type="text" name="nama" class="form-control update" value="{{ $Admin->nama }}">
      <input type="text" name="alamat" class="form-control update" value="{{ $Admin->alamat }}">
      <input type="text" name="telepon" class="form-control update" value="{{ $Admin->telepon }}">
      <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}
    <button type="submit" name="submit" class="btn btn-primary btn-update">Save Changes</button>
  </form>
@endsection
