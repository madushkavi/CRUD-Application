<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    //
    public function index()
    {    $login = Login::all();
        return view('user.login');
        
    }
    public function create()
    {
        return view('user.register');
    }
    public function checklogin(Request $request){
        //validation
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|alphaNum|min:5'
        ]);
        //Authentication
        $user_data=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        );
        if(Auth::attempt($user_data)){
            //return redirect();
            return view('user/intro',['success','msg'=>'Successfully login']);
        }
        else {
            return back()->with('error','Wrong login');
        }
    }
    public function store(Request $request)
    {// dd $request;
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $login = new Login([
            'name'=>$request->get('name'),
            'age'=>$request->get('age'),
            'gender'=>$request->get('gender'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            
        ]);
        $login->save();
        return redirect('/')->with('success','saved successfully');
    }
    public function update(Request $request, $id)
    {  
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $login=Login::find($id);
        $login->name=$request->get('name');
        $login->age=$request->get('age');
        $login->gender=$request->get('gender');
        $login->email=$request->get('email');
        $login->password=$request->get('password');
        $login->save();

        return redirect('/')->with('success','update successfully');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    } 
}
