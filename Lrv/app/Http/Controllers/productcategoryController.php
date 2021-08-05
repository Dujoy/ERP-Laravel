<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcategoryController extends Controller
{
    public function productcategory(Request $req){
        return view('productcategory');
     }
     public function ctg(Request $req){
      $rules = [
         'name'=>'required|min:7',
         'Brand'=>'required|max:8',
         'category'=>'required|max:8'
      ];
       $this->validate($req , $rules);
       return $req->all();
   
     }
}
