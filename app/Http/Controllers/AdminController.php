<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __contruct()
    {
      $this->middleware('auth:admin');
    }

    public function index(){
      return view('admin');
    }
}
