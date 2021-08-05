<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B_tab;

class listthrController extends Controller
{
    public function listthr(Request $req){
        /*$data = B_tab::all();
        return view('listthr',['new_mmbs'=>$data]);*/
    

          $users=B_tab::all();
          return view('listthr')->with('listthr',$users);
     }
}
