@extends('Layouts.t_kelas')

@section('title')
Rekap XII RPL 1
@endsection

@section('recap')
class="active"
@endsection

@section('slider')
  @include('Layouts.partials._slider-kelas')
@endsection

@section('content')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
      <h1 class="text-center text-home">Rekap Absensi Dari XII RPL 1</h1>
    </div>
  </div>
</div>
@endsection

@section('table')
 <thead>
          <th>#</th>
          <th>NISN</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Status</th>
          <th>Datang Pada</th>
        </thead>



        <?php

        $no=1;
        // $sql = "SELECT master-siswa.nisn, master-siswa.nama, master-siswa.kelas, master-siswa.status
        //           FROM Absen
        //           INNER JOIN Mastersiswa
        //           ON absen.id_siswa=master-siswa.id_siswa";


         // foreach ($Absens as $Absen) {
        //   $Mastersiswa = App\Models\Mastersiswa::find($Absen->id_siswa);
        //   echo  $Mastersiswa->nama. ' Hari Ini ' . $Absen->status. '<br>' ;

        // }

        ?>

        @foreach( $Absens as $Absen)
          <?php $Mastersiswa = App\Models\Mastersiswa::find($Absen->id_siswa) ?>
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $Mastersiswa->nisn }}</td>
            <td>{{ $Mastersiswa->nama }}</td>
            <td>{{ $Mastersiswa->kelas }}</td>
            <td>{{ $Absen->status }}</td>
            <td>{{ $Absen->kedatangan }}</td>
          </tr>

        @endforeach


@endsection

