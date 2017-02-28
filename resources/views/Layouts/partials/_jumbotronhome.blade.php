

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container">
        <div class="jumbotron">
          <h2><script src="{{ asset('js/greetings.js') }}"></script> {{ Auth::user()->nama }}</h2>
          <h3><script src="{{ asset('js/alasan.js') }}"></script></h3>
          <center><h1 id="txt"></h1></center>
          <form action="/absensi" method="post">
            {{ csrf_field() }}
            <?php $user = Auth::user()->id_siswa; ?>
            <input type="hidden" name="id_siswa" value="{{ Auth::user()->id_siswa }}">
            <input type="hidden" name="kelas" value="{{ Auth::user()->kelas }}">
            <input type="hidden" id="myDate" name="kedatangan" class="form-control">
            <input type="hidden" name="status" id="my_id">
            <center><input type="submit" class="btn btn-primary btn-lg" name="submit" id="my_id2"></center>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

