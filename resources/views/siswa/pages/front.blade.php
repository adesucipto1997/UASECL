@include("theme.head")
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">{{ $block_title }}</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <div class="form-group">
            <a href="{{ url('siswa/add') }}" class="btn btn-success"><li class="fa fa-plus"></li> Tambah</a>
          </div>
          <table class="table">
              <thead>
                <th>Foto</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Actions</th>
              </thead>
              <tbody>
                @foreach($data as $value)
                <tr>
                  <td><img style='width:auto;height:100px' src='{{url($value->foto)}}'/></td>
                  <td>{{$value->nama_lengkap}}</td>
                  <td>{{strtoupper($value->jk)}}</td>
                  <td>{{$value->kelas->nama_kelas}}</td>
                  <td>
                    <a class="btn btn-danger" href="{{url('siswa/hapus/'.$value->id_siswa)}}">Hapus</a>
                    <a class="btn btn-warning" href="{{url('siswa/update/'.$value->id_siswa)}}">Update</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@include("theme.foot")
