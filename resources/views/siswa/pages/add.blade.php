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
        <form class="" action="{{url('/siswa/add')}}" method="post" enctype="multipart/form-data">
          <div class="form-group">
            {{csrf_field()}}
            <label for="">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select class="form-control" name="jk">
              <option value="laki-laki">Laki - Laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Kelas</label>
            <select class="form-control" name="id_kelas">
              <option>== Pilih ==</option>
              @foreach($kelas_data as $val)
              <option value="{{$val->id_kelas}}">{{$val->nama_kelas}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Foto</label>
            <input type="file" class="form-control" name="foto" placeholder="">
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
