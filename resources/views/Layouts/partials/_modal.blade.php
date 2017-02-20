<!-- Modal -->

<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">@yield('modal-title')</h4>
      </div>
      <div class="modal-body">
        @yield('form')
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
        {{ csrf_field() }}
      @yield('endform')
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-primary btn-lg button-modal primer" data-toggle="modal" data-target="#myModal">
  @yield('button')
</button>


    </div>
    <div class="col-md-1"></div>
  </div>
</div>
