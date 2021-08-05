<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connnetController extends Controller
{
    public function connnet(Request $req){
        return view('connnet');
     }
     public function check1(Request $req){
        echo "welcome";
     }
}
