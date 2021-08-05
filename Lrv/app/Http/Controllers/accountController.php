<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    public function account(Request $req){
        return view('account');
     }
     public function acc(Request $req){
      $rules = [
         'name'=>'required|min:8',
         'id'=> 'required|max:7'
       ];
       $this->validate($req , $rules);
       return $req->all();
     }
}

