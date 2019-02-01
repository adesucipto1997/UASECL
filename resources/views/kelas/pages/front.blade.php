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
            <a href="{{ url('kelas/add') }}" class="btn btn-success"><li class="fa fa-plus"></li> Tambah</a>
          </div>
          <table class="table">
              <thead>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Actions</th>
              </thead>
              <tbody>
                @foreach($data as $value)
                <tr>
                  <td>{{$value->id_kelas}}</td>
                  <td>{{$value->nama_kelas}}</td>
                  <td>
                    <a class="btn btn-danger" href="{{url('/kelas/hapus/')."/".$value->id_kelas}}">Hapus</a>
                    <a class="btn btn-warning" href="{{url('/kelas/update/')."/".$value->id_kelas}}">Update</a>
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
