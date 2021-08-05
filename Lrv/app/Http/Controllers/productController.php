<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\A_tab;

class productController extends Controller
{

    public function add(Request $req){
        return view('add');
        //if($req->session()->has('email')){
            /*$users= A_tab::all();
            /*return view('list')->with('list',$users);
        //}
        /*else{
            $req->session()->flash('msg','Invalid request');
            return redirect('/login');
        }*/
     }
     public function ad(Request $req){
      $rules = [
         'name'=>'required',
         'id'=>'required'
      ];
      $this->validate($req , $rules);
      return $req->all();
    }


    public function submit1(Request $req){
        $data= $req->all();
        A_tab::create($data);
        return redirect ('/add');
    }
    //edit-delete
    public function Editseller($id){
        //echo $id;
        $user2= A_tab::find($id);
        return view('Editseller')->with('user2',$user2);
    }
    public function update1(Request $req, $id){
        //echo $id;
        $user2= A_tab::find($id);
        $user2->name=$req->name;
        $user2->id=$req->id;
        $user2->save();
        return redirect('/list');
    }
    public function delete1($id)
    {
        A_tab::find($id)->delete();
        return redirect()->back();
    }

}



