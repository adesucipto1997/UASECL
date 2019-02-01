@include("theme.head")
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">{{ $block_title }}</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        {!! $alert !!}
      </div>
      <div class="col-md-12">
        <form class="" action="{{url('/login')}}" method="post">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username">
          </div>
          {{csrf_field()}}
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-sign-in"></i> Masuk
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include("theme.foot")
