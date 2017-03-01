@extends('Layouts.master')

@section('title')
Management
@endsection


@section('manage')
class="active"
@endsection

@section('slider')
  @include('Layouts.partials._slider-kelas')
@endsection

@section('content')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
      <h1 class="text-center text-home"><hr>Manajemen Data</hr></h1>
    </div>
  </div>
</div>
@endsection


@section('content2')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>Data Siswa</h1>
          <h5 class="text text-capitalize">Manajemen data siswa tempat untuk membuat , menghapus , mengedit dan mengatur data dari siswa </h5>
          <a href="{{ route('manage.xrpl1') }}" class="link-manage"><h4 class="text-center">X RPL 1</h4></a>
          <a href="{{ route('manage.xirpl1') }}" class="link-manage"><h4 class="text-center">XI RPL 1</h4></a>
          <a href="{{ route('manage.xiirpl1') }}" class="link-manage"><h4 class="text-center">XII RPL 1</h4></a>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>Data Guru</h1>
          <h5 class="text text-capitalize">Manajemen data guru tempat untuk membuat , menghapus , mengedit dan mengatur data dari guru</h5>
          <a href="{{ route('head') }}" class="link-manage"><h4 class="text-center">Kepala Jurusan</h4></a>
          <a href="{{ route('normative') }}" class="link-manage"><h4 class="text-center">Guru Normatif</h4></a>
          <a href="{{ route('productive') }}" class="link-manage"><h4 class="text-center">Guru Produktif</h4></a>
          <a href="{{ route('counseling') }}" class="link-manage"><h4 class="text-center">Bimbingan Konseling</h4></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
