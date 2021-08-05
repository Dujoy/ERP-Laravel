<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\E_tab;

class manageController extends Controller
{
      public function manage(Request $req){
        return view('manage');
      }
     public function submit(Request $req){
      $data= $req->all();
      E_tab::create($data);
      return redirect ('/manage');
  }
}
