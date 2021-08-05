<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\C_tab;

class listtwoController extends Controller
{
    public function listtwo(Request $req){
        $data = C_tab::all();
        return view('listtwo',['pro_pms'=>$data]);
     }
}
