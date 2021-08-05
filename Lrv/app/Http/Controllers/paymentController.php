<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\C_tab;

class paymentController extends Controller
{
    public function payment(Request $req){
        return view('payment');
     }
     public function pay(Request $req){
      $rules = [
         'name'=>'required|min:4',
         'id' => 'requried',
         'payment'=>'required|max:5'
      ];
       $this->validate($req , $rules);
       return $req->all();
     }
     public function submit(Request $req){
      $data= $req->all();
      C_tab::create($data);
      return redirect ('/listtwo');
  }
}
