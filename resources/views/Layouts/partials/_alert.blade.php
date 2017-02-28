
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <!-- alert nama lengkap dan password untuk login -->

    @if( $errors->has('nama'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom Nama Harus Di Isi!
        </div>
    @endif
    @if( $errors->has('password'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom Password Harus Di Isi Minimal 6 Karakter!
        </div>
    @endif

    <!-- alert guru -->

    @if( $errors->has('nip'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom NIP Harus Di Isi!
        </div>
    @endif
    @if( $errors->has('mapel'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom Mata Pelajaran Harus Di Isi!
        </div>
    @endif

    <!-- alert-siswa -->

    @if( $errors->has('nisn'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom NISN Harus Di Isi!
        </div>
    @endif
    @if( $errors->has('tanggal_lahir'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom Tanggal Lahir Harus Di Isi!
        </div>
    @endif
    @if( $errors->has('alamat'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom Alamat Lahir Harus Di Isi!
        </div>
    @endif
    @if( $errors->has('telepon'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom telepon Lahir Harus Di Isi!
        </div>
    @endif
    @if( $errors->has('agama'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom Agama Lahir Harus Di Isi!
        </div>
    @endif

    <!-- alert admin -->

    @if( $errors->has('alamat'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom Password Harus Di Isi!
        </div>
    @endif
    @if( $errors->has('telepon'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> Maaf Kolom Tanggal Lahir Harus Di Isi!
        </div>
    @endif

    <!-- alert jurnal -->

    @if( $errors->has('todo'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Yah! Mohon Maaf</strong> Kolom Isi Jurnal Harus Di Isi Dan Maksimal 25 Karakter!
        </div>
    @endif

    @if( $alert = Session::get('alert-success'))
      <div class="alert alert-success alert-dismissible alert-style" role="alert">
        <button type="button" class="close position-button-text" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p class="position-button-text"><b>Yeahhh!!!</b> {{ $alert }} </p>
      </div>
    @endif



    </div>
  </div>
</div>


