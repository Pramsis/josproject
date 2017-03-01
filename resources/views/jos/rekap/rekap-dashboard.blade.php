@extends('Layouts.master')

@section('title')
Recap
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
      <h1 class="text-center text-home"><hr>Rekapitulasi Data</hr></h1>
    </div>
  </div>
</div>
@endsection



@section('content2')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>X RPL 1</h1>
          <h5 class="text">Kumpulan Absensi Dan Jurnal Kelas X RPL 1</h5>
          <a href="{{ route('rekapAbsenXrpl1') }}"><h4 class="text-center">Absensi</h4></a>
          <a href="{{ route('rekapJurnalXrpl1') }}"><h4 class="text-center">Jurnal</h4></a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>XI RPL 1</h1>
          <h5 class="text">Kumpulan Absensi Dan Jurnal Kelas XI RPL 1</h5>
          <a href="{{ route('rekapAbsenXirpl1') }}"><h4 class="text-center">Absensi</h4></a>
          <a href="{{ route('rekapJurnalXirpl1') }}"><h4 class="text-center">Jurnal</h4></a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>XII RPL 1</h1>
          <h5 class="text">Kumpulan Absensi Dan Jurnal Kelas XII RPL 1</h5>
          <a href="{{ route('rekapAbsenXiirpl1') }}"><h4 class="text-center">Absensi</h4></a>
          <a href="{{ route('rekapJurnalXiirpl1') }}"><h4 class="text-center">Jurnal</h4></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
