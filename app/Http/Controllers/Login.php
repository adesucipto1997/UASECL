<?php

namespace Ade\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function home(Request $req)
    {
      return view("login.pages.home")->with(["title"=>"Halaman Masuk","block_title"=>"Halaman Masuk","alert"=>""]);
    }
    public function homepost(Request $req)
    {
      $model = new \Ade\AdminModel;
      $r = $model->where(["username"=>$req->input("username"),"password"=>md5($req->input("password"))])->get();
      if (count($r) > 0) {
        session(["type"=>"admin"]);
        return redirect("/");
      }else {
        $alert = "<div class='alert alert-danger'>Login Gagal </div>";
        return view("login.pages.home")->with(["title"=>"Halaman Masuk","block_title"=>"Halaman Masuk","alert"=>$alert]);
      }
    }
}
