<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditsellerController extends Controller
{
    public function Editseller(Request $req){
        return view('Editseller');
     }
     public function Edi(Request $req){
      $rules = [
         'id'=>'required|min:4',
         'name'=>'required|max:5'
       ];
       $this->validate($req , $rules);
       return $req->all();
     }
}
