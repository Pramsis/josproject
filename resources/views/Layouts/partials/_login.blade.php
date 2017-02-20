/* Login */

<div class="header">
  <div class="row">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="col-md-6">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Jurnal Online Sekolah</a>
          </div>
        </div>
        <div class="col-md-6">
          <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <form class="form-inline" action="/loginjos" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama"  name="nama">
                @if( $errors->has('nisn'))
                 <p> {{ $errors->first('nisn') }}</p>
                @endif
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
                @if( $errors->has('password'))
                 <p> {{ $errors->first('password') }}</p>
                @endif
              </div>
              <button type="submit" name="submit" class="btn btn-default">Login</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>

