<?php

namespace Ade\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home()
    {
      return view("home.pages.front")->with(["title"=>"Beranda","block_title"=>"Beranda"]);
    }
}
