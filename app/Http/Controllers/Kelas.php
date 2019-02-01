<?php

namespace Ade\Http\Controllers;

use Illuminate\Http\Request;

class Kelas extends Controller
{
    public function home()
    {
      $alert = "";
      $data = \Ade\KelasModel::all();
      return view("kelas.pages.front")->with(["title"=>"Data Kelas","block_title"=>"Data Kelas","alert"=>$alert,"data"=>$data]);
    }
    public function add()
    {
      return view("kelas.pages.add")->with(["title"=>"Tambah Kelas","block_title"=>"Tambah Kelas","alert"=>""]);
    }
    public function addpost(Request $req)
    {
      $model = new \Ade\KelasModel;
      $model->nama_kelas = $req->input("nama_kelas");
      if($model->save()){
        $alert = "<div class='alert alert-success'>Data Kelas Di Simpan</div>";
      }else {
        $alert = "<div class='alert alert-danger'>Data Kelas Di Gagalkan</div>";
      }
      return view("kelas.pages.add")->with(["title"=>"Tambah Kelas","block_title"=>"Tambah Kelas","alert"=>$alert]);
    }
    public function edit(Request $req,$id)
    {
      $model = \Ade\KelasModel::where(["id_kelas"=>$id])->first();
      $alert = "";
      if ($req->isMethod("post")) {
        $modeling = \Ade\KelasModel::find($id);
        $modeling->nama_kelas = $req->input("nama_kelas");
        if ($modeling->save()) {
          $alert = "<div class='alert alert-success'>Data Kelas Di Update</div>";
        }else {
          $alert = "<div class='alert alert-danger'>Data Kelas Di Gagalkan</div>";
        }
      }
      return view("kelas.pages.edit")->with(["title"=>"Update Kelas","block_title"=>"Update Kelas","alert"=>$alert,"data"=>$model]);
    }
    public function hapus(Request $req,$id)
    {
      $model = \Ade\KelasModel::find($id);
      if ($model->delete()) {
        $alert = "<div class='alert alert-success'>Data Kelas Di Hapus</div>";
      }else {
        $alert = "<div class='alert alert-danger'>Data Kelas Gagal Di Hapus</div>";
      }
      $data = \Ade\KelasModel::all();
      return view("kelas.pages.front")->with(["title"=>"Data Kelas","block_title"=>"Data Kelas","alert"=>$alert,"data"=>$data]);
    }
}
