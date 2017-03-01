@extends('Layouts.t_kelas')

@section('title')
X RPL 1
@endsection

@section('class')
class="active"
@endsection

@section('content')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
      <hr>
      <h1 class="text-center text-home">Siswa Dari X RPL 1</h1>
    </div>
  </div>
</div>
@endsection

@section('table')
<thead>
  <th>#</th>
  <th>ID Siswa</th>
  <th>NISN</th>
  <th>Nama</th>
  <th>Jenis Kelamin</th>
  <th>Kelas</th>
  <th>Tanggal Lahir</th>
  <th>Alamat</th>
  <th>Telepon</th>
  <th>Agama</th>
</thead>

<?php

$no=1;
// $Absen = App\Models\Absen::find(9);

?>

  @foreach($Mastersiswas as $Mastersiswa)
    <?php $Absen = App\Models\Absen::find($Mastersiswa->id_siswa) ?>
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $Mastersiswa->id_siswa }}</td>
    <td>{{ $Mastersiswa->nisn }}</td>
    <td>{{ $Mastersiswa->nama }}</td>
    <td>{{ $Mastersiswa->jen_kel }}</td>
    <td>{{ $Mastersiswa->kelas }}</td>
    <td>{{ $Mastersiswa->tanggal_lahir }}</td>
    <td>{{ $Mastersiswa->alamat }}</td>
    <td>{{ $Mastersiswa->telepon }}</td>
    <td>{{ $Mastersiswa->agama }}</td>
  <tr>
@endforeach


@endsection

@section('content2')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
    <hr>
      <h1 class="text-center text-home text-kelas">Absensi Kehadiran X RPL 1</h1>
      @include('Layouts.partials._alert')
      <table class="table table-hover table-home text-center">
        <thead>
          <th class="text-center">#</th>
          <th class="text-center">NISN</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Kelas</th>
          <th class="text-center">Status</th>
          <th class="text-center">Datang Pada</th>
        </thead>



        <?php

        $no=1;

        ?>

        @foreach( $Absens as $Absen)
          <?php $Mastersiswa = App\Models\Mastersiswa::find($Absen->id_siswa) ?>
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $Mastersiswa->nisn }}</td>
            <td>{{ $Mastersiswa->nama }}</td>
            <td>{{ $Mastersiswa->kelas}}</td>
            <td>{{ $Absen->status }}</td>
            <td>{{ $Absen->kedatangan }}</td>
          </tr>

        @endforeach

          @if(! Auth::guard('web')->user())
            <tr>
              <td colspan="10">
              <center>
              <button type="button" class="btn btn-primary button-modal" data-toggle="modal" data-target="#myModal">Buat Izin Khusus Siswa Yang Tidak Masuk</button>
              </center>
              </td>
            <tr>
          @endif

        </table>
    </div>
  </div>
</div>
@endsection

@section('form')
<form action="/absensi-izin" method="post">
  <input type="text" name="id_siswa" placeholder="Masukkan ID Siswa" class="form-control update">
  <input type="hidden" name="kelas" value="X RPL 1" class="form-control update">
  <input type="hidden" value="Tidak Masuk" name="kedatangan" class="form-control">
  <input type="text" name="status" class="form-control update" placeholder="Masukkan Alasan Mengapa Tidak Masuk">
@endsection

@section('endform')
</form>
@endsection
