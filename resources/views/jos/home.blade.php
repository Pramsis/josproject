@extends('layouts.master')

@section('title')
Jurnal Online Sekolah
@endsection


@section('home')
class="active"
@endsection

@section('slider')
<div id="myCarousel" class="carousel slide slider" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner slider" role="listbox">
    <div class="item active slider">
      <img src="{{ asset('css/images/people-coffee-notes-tea.jpg') }}">
      <div class="carousel-caption">
        <h2>Created Your Life Algorithm</h2>
        <h4>Pramsis - Leader</h4>
      </div>
    </div>

    <div class="item slider">
      <img src="{{ asset('css/images/leave-board-hand-learn-54597.jpeg') }}">
      <div class="carousel-caption">
        <h2>Schools Can't Give You A Success,  But School Can Give You Spirit</h2>
        <h4>Fahmi - The Expert</h4>
      </div>
    </div>

    <div class="item slider">
      <img src="{{ asset('css/images/pexels-photo-207580.jpeg') }}">
      <div class="carousel-caption">
        <h2>Hacking Like A Magic ,We Have Know About Identity Of Target </h2>
        <h4>Abihu - Hackerman</h4>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control slider" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control slider" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <hr class="horizontal">
      @if( Auth::guard('web')->user() )
        <h1 class="text-center text-gede text-table"><script src="{{ asset('js/greetings.js') }}"></script><br> {{ auth::guard('web')->user()->nama }}</h1>
      @elseif( Auth::guard('guru')->user()->level == 'Guru' )
        <h1 class="text-center text-gede text-table"><script src="{{ asset('js/greetings.js') }}"></script><br> {{ auth::guard('guru')->user()->nama }}</h1>
      @elseif( Auth::guard('guru')->user()->level == 'Admin')
        <h1 class="text-center text-gede text-table"><script src="{{ asset('js/greetings.js') }}"></script><br> Admin - {{auth::guard('guru')->user()->nama }}</h1>
      @endif
        <h2 class="text-center"><b>Tuangkan Pikiranmu Disini</b></h2>
        <br><br>
        <form method="post" action="{{ route('home') }}">
          <input type="text" name="main-focus" class="form-control input-lg form-main-focus">
          {{ csrf_field() }}
        </form>
        <?php
          if(isset($_POST['main-focus']))
          {
            $nama = $_POST['main-focus'];
            echo "<center><h2><b>Dalam Pikiran Saya</b> $nama</h2></center>";
          }
        ?>

    </div>
  </div>
</div>
@endsection

@section('content2')
<div class="container text-justify">
  <hr class="horizontal">
  <h1 class="text-center">Deskripsi Singkat - Jurnal Online Sekolah</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
          <h3 class="text-justify">Assalamu'alaikum</h3>
          <h3 class="text-justify">Kami hadir dari masalah yang sering muncul disekolah yaitu masalah absensi dan jurnal . sering kali kita
          terkadang lupa dalam absensi dan mengisi jurnal . dan kadang juga ada kesalahan teknis seperti lupa dalam mengambil jurnal di depan piket
          dan  guru yang tidak masuk kelas karena berbagai alasan . ya! masalah masalah seperti ini selalu menghambat proses belajar mengajar kita
          karena absensi kita akan direkap dan dijadikan syarat kenaikan kelas. jika absen kita tidak teratur dan bolong bolong. Ya? itu resikonya.</h3>
          <h3 class="text-justify">Oleh karena itu jurnal online sekolah hadir untuk membantu anda menyelesaikan masalah itu semua. Dengan mengandalkan teknologi
          dan sumber daya manusia yang terampil diharapkan dapat memberikan efek yang siginifikan bagi perkembangan . Dengan Login Dan sekali klik maka otomatis kita telah masuk
          absensi dan guru juga mudah. Demikian Saya Samapaikan happy Schooling :)</h3>

          <a href="http://www.twitter.com/pramsisrajawali" target="_blank"><h3>Dimas Pramudya Sumarsis</h3></a>
      </div>
    </div>
  </div>
</div>

</div>
@endsection

@section('content3')
<div class="container text-center">
  <hr class="horizontal">
  <h1 class="text-opinion">Pendapat Dari Siswa</h1>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Fahmi Akbar Dzul Fikri</strong></p><br>
        <img src="{{ asset('css/images/Fahmi-Akbar-DzulFikri.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Alhamdulilah, Berkat adanya Jurnal Online Sekolah bisa memudahkan saya dalam hal absensi dan lebih efisien semoga aplikasi ini lebih di kembangkan lagi ketahap yang lebih profesional</p>
        <p>Murid SMKN 2 Surabaya Jurusan RPL</p>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Abihu Presly Haezer</strong></p><br>
        <img src="{{ asset('css/images/abihu.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Syukur , Jurnal online sekolah memang top dan membuat saya agar tidak kedepan ruang piket untuk mengambil buku jurnal sehingga saya bisa datang lebih cepat dikelas apalagi kelas saya ada di paling belakang</p>
        <p>Murid SMKN 2 Surabaya Jurusan RPL</p>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Dimas Pramudya Sumarsis</strong></p><br>
        <img src="{{ asset('css/images/pramsis.jpg') }}" class="img-circle person" alt="Random Name" width="255" height="255">
        <p>Dengan Adanya Aplikasi ini jurnal online sekolah , membuat para guru semakin mudah dan ingat dalam mengisi jurnal harian sekolah dan tidak perlu mengecek kehadiran dengan memanggil murid satu persatu</p>
        <p>Murid SMKN 2 Surabaya Jurusan RPL</p>
    </div>
  </div>
</div>
@endsection

@section('content4')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <hr class="horizontal">
      <h1 class="text-center text-table">Pastikan Kamu Sudah Berada Di Sekolah</h1>
    </div>
  </div>
</div>
<div id="googleMap"></div>
@endsection


@section('content5')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <hr class="horizontal">
      <h1 class="text-center text-table">Lihat Siapa Saja Yang Datang Hari Ini</h1>
    </div>
  </div>
</div>
@endsection

@section('content6')
<div class="container">
  <div class="row">
    <div class="col-md-12">
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

        </table>
    </div>
  </div>
</div>
@endsection

