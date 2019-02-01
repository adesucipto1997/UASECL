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
        <form class="" action="{{url('/siswa/update/'.$data->id_siswa)}}" method="post" enctype="multipart/form-data">
          <div class="form-group">
            {{csrf_field()}}
            <label for="">Nama Lengkap</label>
            <input type="text" class="form-control" value="{{$data->nama_lengkap}}" name="nama_lengkap" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select class="form-control" name="jk">
              @if($data->jk == "laki-laki")
              <option value="laki-laki" selected>Laki - Laki</option>
              <option value="perempuan">Perempuan</option>
              @else
              <option value="laki-laki">Laki - Laki</option>
              <option value="perempuan" selected>Perempuan</option>
              @endif
            </select>
          </div>
          <div class="form-group">
            <label for="">Kelas</label>
            <select class="form-control" name="id_kelas">
              <option>== Pilih ==</option>
              @foreach($kelas_data as $val)
              @if($data->id_kelas != $val->id_kelas)
              <option value="{{$val->id_kelas}}">{{$val->nama_kelas}}</option>
              @else
              <option value="{{$val->id_kelas}}" selected>{{$val->nama_kelas}}</option>
              @endif
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
