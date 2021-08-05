<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B_tab;

class loginController extends Controller
{
    public function login(Request $req){
        return view('login');
     }
     public function log(Request $req){
     /* $rules = [
         'uname'=>'required|min:3',
         'password'=>'required|max:5'
      ];
      $this->validate($req , $rules);
      return $req->all();*/

     /* if($req->uname==$req->password)
         {
             //echo "Valid user!";
             //set session or cookie
            return redirect('/Home');
         }
         else{
             //echo "Invalid user!";
            // $req->session()->flash('msg','Invalid username or password');
             //return redirect('/login');
             return redirect('/login');
         }*/
         $result= B_tab::where('name',$req->name)
                ->where('password',$req->password)
                       ->get();

               if(count($result)>0)
             {
                //echo "Valid user!";
                // $req->session()->put('uname',$req->uname);
                  //set session or cookie
                return redirect('/Home');
           }
           else{
              //echo "Invalid user!";
               /// $req->session()->flash('msg','Invalid username or password');
              //return redirect('/login');
             return redirect('/login');
           }

     }
}
    

