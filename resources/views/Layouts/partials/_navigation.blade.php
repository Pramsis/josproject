

<div class="header">
  <div class="row">
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="{{ route('home') }}">Jurnal Online Sekolah</a>
          </div>
           <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
              @if( Auth::guard('web')->user() )
              <li @yield('recap')><a href="{{ route('rekap') }}">Recap</a></li>
              <li @yield('class')><a href="{{ route('class') }}">Class</a></li>
              <li @yield('about')><a href="{{ route('about') }}">About</a></li>
              <li><a href="/logoutjos">Log Out</a></li>
              @elseif( Auth::guard('guru')->user() )
              <li @yield('recap')><a href="{{ route('rekap') }}">Recap</a></li>
              <li @yield('class')><a href="{{ route('class') }}">Class</a></li>
              <li @yield('jurnal')><a href="{{ route('jurnal') }}">Everyday Journal</a></li>
              <li @yield('about')><a href="{{ route('about') }}">About</a></li>
              <li><a href="/logoutjos">Log Out</a></li>
              @elseif( Auth::guard('administrator')->user() )
              <li @yield('recap')><a href="{{ route('rekap') }}">Recap</a></li>
              <li @yield('class')><a href="{{ route('class') }}">Class</a></li>
              <li @yield('jurnal')><a href="{{ route('jurnal') }}">Everyday Journal</a></li>
              <li @yield('manage')><a href="{{ route('manage') }}">Management Data</a></li>
              <li @yield('about')><a href="{{ route('about') }}">About</a></li>
              <li><a href="/logoutjos">Logout</a></li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </div>
</div>
