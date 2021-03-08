<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('login');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            if(Auth::attempt(['email' => $request->input('login'),'password'=>$request->input('password')])){
               return redirect()->route('dash');
               
            }
            else {
         
                return redirect()->route('login')->with(['error' => 'invalide Username or password!!']);
            }
        }
       

        return view('login');
    }

    public function logout(){

        Session::flush();
        return redirect()->route('login')->with(['success' => 'logout succefuly']);
    }

    public function dash(){
        return view('dashboard');
    }



    /****
     * 
     * Show Profile 
     * Edite Profile 
     * 
     */

    public function settings(){
        
        return view('settings',['user'=> Auth::user()]);
    }

    public function checkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_password'];
        $check_password = Auth::user()->password;
        if(Hash::check($current_password,$check_password)){
            return "true";
            die;
        }else {
            return "false";
            die;
        }
    }

    public function profile_edit(Request $request ){
      
      $user = User::findOrFail(Auth::id());
        $data = $request->all();
        $current_password = $data['current_password'];
       
        if(Hash::check($current_password,$user->password)){
            if( $data['new_password'] === $data['confirm_password']){
                $user->password = Hash::make($data['new_password']);
                $user->save();
               return redirect()->route('settings')->with(['success' => 'Password change successfuly']);
            }
            return redirect()->route('settings')->with(['error' => 'New password not equal to confirm password']);
          
        }
        return redirect()->route('settings')->with(['error' => 'current password not correct']);


    }
    
}


