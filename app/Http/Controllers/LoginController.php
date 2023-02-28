<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('user/login');
    }
    public function successlogin(){
        return view('user/intro',['success','msg'=>'Successfully login']);
    }
    public function checklogin(Request $request){
        //validation
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|alphaNum|min:5'
        ]);
    }
}
