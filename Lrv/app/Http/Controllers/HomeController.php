<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(Request $req){
        return view('Home');
     }
     public function check1(Request $req){
        echo "welcome";
     }

     /*public function Durjoy(Request $req){ //session
      if($req->session()->has('email')){
       return view('Home');
    }
    else{
       $req->session()->flash('msg','Invalid request');
       return redirect('/login');
    }
 }*/

}
