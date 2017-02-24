

<div class="header">
  <div class="row">
   <nav class="navbar navbar-default navbar-fixed-top navbar-color">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="{{ route('home') }}">
                  <p class="navbar-textcolor">Jurnal Online Sekolah</p>
              </a>
          </div>
           <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
              @if( Auth::guard('web')->user() )
              <li @yield('recap')><a href="{{ route('rekap') }}">Rekapitulasi</a></li>
              <li @yield('class')><a href="{{ route('class') }}">Kelas</a></li>
              <li @yield('about')><a href="{{ route('about') }}">Tentang</a></li>
              <li><a href="/logoutjos">Keluar</a></li>
              @elseif( Auth::guard('guru')->user() )
              <li @yield('recap')><a href="{{ route('rekap') }}">Rekapitulasi</a></li>
              <li @yield('class')><a href="{{ route('class') }}">Kelas</a></li>
              <li @yield('jurnal')><a href="{{ route('jurnal') }}">Jurnal Sehari Hari</a></li>
              <li @yield('manage')><a href="{{ route('manage') }}">Manajemen Data</a></li>
              <li @yield('about')><a href="{{ route('about') }}">Tentang</a></li>
              <li><a href="/logoutjos">Keluar</a></li>
              @elseif( Auth::guard('administrator')->user() )
              <li @yield('recap')><a href="{{ route('rekap') }}">Rekap</a></li>
              <li @yield('class')><a href="{{ route('class') }}">Kelas</a></li>
              <li @yield('jurnal')><a href="{{ route('jurnal') }}">Jurnal Sehari Hari</a></li>
              <li @yield('manage')><a href="{{ route('manage') }}">Manajemen Data</a></li>
              <li @yield('about')><a href="{{ route('about') }}">Tentang</a></li>
              <li><a href="/logoutjos">Keluar</a></li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </div>
</div>
