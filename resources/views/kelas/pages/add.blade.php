@include("theme.head")
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">{{ $block_title }}</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        {!!$alert!!}
      </div>
      <div class="col-md-12">
        <form class="" action="{{url('/kelas/add')}}" method="post">
          <div class="form-group">
            {{csrf_field()}}
            <label for="">Nama Kelas</label>
            <input type="text" class="form-control" name="nama_kelas" placeholder="">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">
              Simpan Data
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include("theme.foot")
