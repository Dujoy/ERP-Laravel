<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deletebuyController extends Controller
{
    public function deletebuy(Request $req){
        return view('deletebuy');
     }
     public function del(Request $req){
         $rules = [
            'id'=>'required|min:5'
         ];
         $this->validate($req , $rules);
         return $req->all();
      }
}
