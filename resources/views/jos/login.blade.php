@extends('layouts.t_login')

@section('title')
Login
@endsection

@section('slider')
<div id="myCarousel" class="carousel slide slider"data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner slider" role="listbox">
    <div class="item active slider">
      <img src="{{ asset('css/images/people-coffee-notes-tea.jpg') }}">
      <div class="carousel-caption">
        <h2>Buatlah Algoritma Hidupmu</h2>
        <h4>Pramsis - Ketua Tim</h4>
      </div>
    </div>

    <div class="item slider">
      <img src="{{ asset('css/images/leave-board-hand-learn-54597.jpeg') }}">
      <div class="carousel-caption">
        <h2>Sekolah Tidak Bisa Memberikanmu Kesuksesan, Tapi Sekolah Bisa Memberikanmu Semangat</h2>
        <h4>Fahmi - Paling Menguasai Hal</h4>
      </div>
    </div>

    <div class="item slider">
      <img src="{{ asset('css/images/pexels-photo-207580.jpeg') }}">
      <div class="carousel-caption">
        <h2>Meretas Seperti Sulap , Kita Bisa Tahu Tentang Identitas Orang tersebut Secara Mendalam</h2>
        <h4>Abihu - Peretas</h4>
      </div>
    </div>
  </div>
</div>

@endsection
