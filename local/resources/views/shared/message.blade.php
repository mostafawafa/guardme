@if(session('message'))
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('message') }}
      </div>
    </div>
  </div>
@endif