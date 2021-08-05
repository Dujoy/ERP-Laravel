<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\A_tab;

class listController extends Controller
{
     public function list(Request $req){
        $data = A_tab::all();
        return view('list',['list'=>$data]);
     }
     
}
