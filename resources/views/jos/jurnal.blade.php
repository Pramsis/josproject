@extends('Layouts.master')

@section('title')
Everyday Journal
@endsection


@section('jurnal')
class="active"
@endsection

@section('slider')
  @include('Layouts.partials._slider-kelas')
@endsection

@section('content')
<div class="container">
  <div class="ro">
    <div class="col-md-12">
      <h1 class="text-center text-home"><hr>Jurnal Kelas</hr></h1>
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
          <h5 class="text">Model pendidikan kejuruan merupakan salah satu system pendidikan/edukasi yang dewasa ini sedang digalakkan. Pada model pendidikan kejuruan khususnya Sekolah Menengah Kejuruan dalam system pendidikannya banyak menitik beratkan pada training khusus yang unggul untuk profesi dan keahlian. Menginggat adanya keunggulan untuk profesi dan keahlian maka perlu adanya aspek kompetensi, prinsip lingkage and matching (jaringan dan aplikasi) harus dikembangkan. Paradigma pendidikan harus mulai berubah dari supply minded (orientasi jumlah) menjadi demand minded (kebutuhan) kedunia kerja.</h5>
            @if( Auth::guard('guru')->user() )
          <a href="{{ route('jurnal.xrpl1') }}" class="btn btn-primary">Lihat</a>
            @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>XI RPL 1</h1>
          <h5 class="text">Model pendidikan kejuruan merupakan salah satu system pendidikan/edukasi yang dewasa ini sedang digalakkan. Pada model pendidikan kejuruan khususnya Sekolah Menengah Kejuruan dalam system pendidikannya banyak menitik beratkan pada training khusus yang unggul untuk profesi dan keahlian. Menginggat adanya keunggulan untuk profesi dan keahlian maka perlu adanya aspek kompetensi, prinsip lingkage and matching (jaringan dan aplikasi) harus dikembangkan. Paradigma pendidikan harus mulai berubah dari supply minded (orientasi jumlah) menjadi demand minded (kebutuhan) kedunia kerja.</h5>
            @if( Auth::guard('guru')->user() )
          <a href="{{ route('jurnal.xirpl1') }}" class="btn btn-primary">Lihat</a>
            @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="css/images/forest-patrol-flat-wallpaper-background.jpg" alt="">
        <div class="caption">
          <h1>XII RPL 1</h1>
          <h5 class="text">Model pendidikan kejuruan merupakan salah satu system pendidikan/edukasi yang dewasa ini sedang digalakkan. Pada model pendidikan kejuruan khususnya Sekolah Menengah Kejuruan dalam system pendidikannya banyak menitik beratkan pada training khusus yang unggul untuk profesi dan keahlian. Menginggat adanya keunggulan untuk profesi dan keahlian maka perlu adanya aspek kompetensi, prinsip lingkage and matching (jaringan dan aplikasi) harus dikembangkan. Paradigma pendidikan harus mulai berubah dari supply minded (orientasi jumlah) menjadi demand minded (kebutuhan) kedunia kerja.</h5>
            @if( Auth::guard('guru')->user() )
          <a href="{{ route('jurnal.xiirpl1') }}" class="btn btn-primary">Lihat</a>
            @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
