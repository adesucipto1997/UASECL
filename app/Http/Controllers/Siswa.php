<?php

namespace Ade\Http\Controllers;
use Validator;
use Illuminate\Http\Request;

class Siswa extends Controller
{
  public function home()
  {
    $alert = "";
    $model = \Ade\SiswaModel::all();
    return view("siswa.pages.front")->with(["title"=>"Data Siswa","block_title"=>"Data Siswa","alert"=>$alert,"data"=>$model]);
  }
  public function addpost(Request $req)
  {
    $alert = "<div class='alert alert-danger'>Gagal Tambah Data</div>";

    $validator = Validator::make($req->all(), [
            "foto"=>"mimes:jpeg,jpg,png,bmp,gif"
    ]);
    if ($validator->fails()) {
      $alert = "<div class='alert alert-danger'>File tidak diperbolehkan</div>";
      return view("siswa.pages.add")->with(["title"=>"Data Siswa","block_title"=>"Data Siswa","alert"=>$alert]);
    }
    $model = new \Ade\SiswaModel;
    $model->nama_lengkap = $req->input("nama_lengkap");
    $model->jk = $req->input("jk");
    $model->id_kelas = $req->input("id_kelas");
    $path = $req->file("foto");
    $path = $path->store(null,'local_upload');
    $model->foto = "upload/".$path;
    if ($model->save()) {
      $alert = "<div class='alert alert-success'>Sukses Tambah Data</div>";
    }
    $data_kelas = \Ade\KelasModel::all();
    return view("siswa.pages.add")->with(["title"=>"Data Siswa","block_title"=>"Data Siswa","alert"=>$alert,"kelas_data"=>$data_kelas]);
  }
  public function add()
  {
    $alert = "";
    $data_kelas = \Ade\KelasModel::all();
    return view("siswa.pages.add")->with(["title"=>"Data Siswa","block_title"=>"Data Siswa","alert"=>$alert,"kelas_data"=>$data_kelas]);
  }
  public function edit($id)
  {
    $alert = "";
    $data = \Ade\SiswaModel::where(["id_siswa"=>$id])->first();
    $data_kelas = \Ade\KelasModel::all();
    return view("siswa.pages.edit")->with(["title"=>"Update Data Siswa","block_title"=>"Update Data Siswa","alert"=>$alert,"data"=>$data,"kelas_data"=>$data_kelas]);
  }
  public function editpost(Request $req,$id)
  {
    $alert = "<div class='alert alert-danger'>Gagal Update Data</div>";

    $validator = Validator::make($req->all(), [
            "foto"=>"mimes:jpeg,jpg,png,bmp,gif"
    ]);
    if ($validator->fails()) {
      $alert = "<div class='alert alert-danger'>File tidak diperbolehkan</div>";
      return view("siswa.pages.add")->with(["title"=>"Data Siswa","block_title"=>"Data Siswa","alert"=>$alert]);
    }
    $model = \Ade\SiswaModel::find($id);
    $model->nama_lengkap = $req->input("nama_lengkap");
    $model->jk = $req->input("jk");
    $model->id_kelas = $req->input("id_kelas");
    if ($req->file("foto") != null) {
      $path = $req->file("foto");
      $path = $path->store(null,'local_upload');
      $model->foto = "upload/".$path;
    }
    if ($model->save()) {
      $alert = "<div class='alert alert-success'>Sukses Update Data</div>";
    }
    $data_kelas = \Ade\KelasModel::all();
    $data = \Ade\SiswaModel::find($id)->first();
    return view("siswa.pages.edit")->with(["title"=>"Update Data Siswa","block_title"=>"Update Data Siswa","alert"=>$alert,"data"=>$data,"kelas_data"=>$data_kelas]);
  }
  public function hapus($id)
  {
    $del = \Ade\SiswaModel::find($id);
    $del->delete();
    return redirect("/siswa");
  }
}
