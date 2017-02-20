@extends('Layouts.t_about')

@section('title')
Editing Data Class XI RPL 2
@endsection

@section('manage')
class="active"
@endsection



@section('jumbotron')
<h1>Edit</h1>
<form action="{{ route('student.update', $Mastersiswa->id_siswa) }}" method="post">
  <input type="number" name="nisn" class="form-control update"  maxlength="5" value="{{ $Mastersiswa->nisn }}">
  <input type="text" name="nama" class="form-control update" maxlength="255" value="{{ $Mastersiswa->nama }}">
  <select class="form-control update" name="jen_kel">
    <option class="form-control">Pria</option>
    <option class="form-control">Wanita</option>
  </select>
  <input type="text" name="kelas" class="form-control update" maxlength="25" value="{{ $Mastersiswa->kelas }}">
  <input type="date" name="tanggal_lahir" class="form-control update" maxlength="6" min="1990-01-01" value="{{ $Mastersiswa->tanggal_lahir }}">
  <input type="text" name="alamat" class="form-control update" maxlength="255" value="{{ $Mastersiswa->alamat }}">
  <input type="number" name="telepon" class="form-control update" maxlength="12" value="{{ $Mastersiswa->telepon }}">
  <input type="text" name="agama" class="form-control update" maxlength="10" value="{{ $Mastersiswa->agama }}">
  <input type="text" name="level" class="form-control update" maxlength="10" value="{{ $Mastersiswa->level }}">
  <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}
    <button type="submit" name="submit" class="btn btn-primary btn-update">Save Changes</button>
  </form>
@endsection
