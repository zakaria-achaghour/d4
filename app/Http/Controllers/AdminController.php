<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
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
            if(Auth::attempt(['username' => $request->input('login'),'password'=>$request->input('password')])){
               return redirect()->route('dash');
               
            }
            else {
         
                return redirect()->route('login')->with(['error' => "invalide Nom d'utilisateur ou mot de passe !!"]);
            }
        }
       

        return view('login');
    }

    public function logout(){

        Session::flush();
        return redirect()->route('login');
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
/**--------------------------------------------------------------------------
 * --------------------------------------------------------------------------
 */
     // method return view
    public function profile_edit(Request $request){
        if($request->isMethod('put')){
            $request->validate([
                'firstname' => 'required|min:3',
                'lastname' => 'required|min:3',
                'email' => 'required|email',
                'username' =>'required|min:3',
                'current_password' => ['required', new MatchOldPassword],
                'new_password'=> 'required|min:8',
                'confirm_password' => 'required|same:new_password'
            ]);
          
          $user = User::findOrFail(Auth::id());
            $data = $request->all();
            $current_password = $data['current_password'];
           
            if(Hash::check($current_password,$user->password)){
                if( $data['new_password'] === $data['confirm_password']){
                    $user->password = Hash::make($data['new_password']);
                    $user->save();
                   return redirect()->route('profile_edit');
                }
              
            }
            return redirect()->route('profile_edit');
    
        }

        return view('edit_profile',['user'=> Auth::user()]);
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


  

/**=============================================================== */
/**=============================================================== */
// Account Settings
/**=============================================================== */


 
 

    public function settings(Request $request){
        if($request->isMethod('put')){

       $user = User::findOrFail(Auth::id());
       $user->locale = $request->input('locale');
       $user->save();

       return redirect()->route('settings');
        }



        return view('settings',['user'=> Auth::user()]);

    }
    
}


