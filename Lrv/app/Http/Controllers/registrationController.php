<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\B_tab;
use Validator;

class registrationController extends Controller
{
    public function registration(Request $req){
        return view('registration');
     }

     public function submit(Request $req){
        $data= $req->all();
        B_tab::create($data);
        return redirect ('/listthr');
    }

    public function reg(Request $req){
        $rules = [
            'name'=>'required|min:5',
            'uname'=>'required|min:5',
            'gmail'=>'required|gmail',
            'password'=> 'required|min:5'
        ];
        $this->validate($req , $rules);
        return $req->all();
   }
   public function edit($id){
    //echo $id;
    $user= B_tab::find($id);
    return view('edit')->with('user',$user);
    }
    public function update(Request $req, $id){
    //echo $id;
    $user= B_tab::find($id);
    $user->name=$req->name;
    $user->uname=$req->uname;
    $user->id=$req->id;
    $user->gmail=$req->gmail;
    $user->save();
    return redirect('/listthr');
   }
   public function delete($id)
   {
    B_tab::find($id)->delete();
    return redirect()->back();
   }

}

