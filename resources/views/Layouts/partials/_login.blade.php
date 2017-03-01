/* Login */

<div class="header">
  <div class="row">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid ">
        <div class="col-md-2">
          <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <p class="navbar-textcolor">Jurnal Online Sekolah</p>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          @if( $alert = Session::get('alert-fail'))
            <div class="alert alert-danger alert-dismissible alert-style" role="alert">
              <button type="button" class="close position-button-text" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <p class="position-button-text"><b>Yah Maaf!</b> {{ $alert }} </p>
            </div>
         @endif
        </div>
        <div class="col-md-6">
          <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <form class="form-inline" action="/loginjos" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control form-login" placeholder="Username"  name="username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-login" id="pwd" placeholder="Password" name="password">
              </div>
              <button type="submit" name="submit" class="btn btn-default">Masuk</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>

