<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function __construct(){
      $this->middleware("auth");
    }
    public function index()
    {
        return view("dashboard.product.index");
    }
    public function add()
    {
        return view("dashboard.product.add",["title" =>"product","methodname"=>"add"]);
    }
    public function store( Request $re)
    {
        dd($re);
    }

}
