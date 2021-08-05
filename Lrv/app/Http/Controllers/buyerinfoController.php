<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buyerinfoController extends Controller
{
    public function buyerinfo(Request $req){
        return view('buyerinfo');
     }
     public function check1(Request $req){
        echo "welcome";
     }
}
