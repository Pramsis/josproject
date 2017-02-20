@extends('Layouts.t_about')

@section('title')
Editing Data Head
@endsection

@section('manage')
class="active"
@endsection



@section('jumbotron')
<h1>Edit</h1>
    <form action="{{ route('teacher.update', $Masterguru->id_guru) }}" method="post">
      <input type="number" name="nip" class="form-control update" value="{{ $Masterguru->nip }}">
      <input type="text" name="nama" class="form-control update" value="{{ $Masterguru->nama }}">
      <select class="form-control update" name="jen_kel">
        <option class="form-control">Pria</option>
        <option class="form-control">Wanita</option>
      </select>
      <input type="text" name="type_guru" class="form-control update" value="{{ $Masterguru->type_guru }}">
      <input type="text" name="mapel" class="form-control update" value="{{ $Masterguru->level }}">
      <input type="text" name="level" class="form-control update" value="{{ $Masterguru->mapel }}">
      <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}
    <button type="submit" name="submit" class="btn btn-primary btn-update">Save Changes</button>
  </form>
@endsection
