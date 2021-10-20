<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Charts\ClientChart;
use App\Client;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

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
        $chart = new ClientChart();

        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();

/*$monthly_client = DB::table('client')
        ->select(DB::raw('count(id) as total'), DB::raw('MONTH(created_at) as month'))
        ->groupBy('month')
        ->get();
*/
     /*   $monthly_client = DB::table('clients')
             ->select(DB::raw('count(*) as client_count'),DB::raw('MONTH(created_at) as month'))
             ->groupBy('month')
             ->get();
*/
            /* $user_info = DB::table('users')
                 ->select('gender', DB::raw('count(*) as total'))
                 ->groupBy('gender')
                 ->get();
            /* $clients =Client::whereYear('created_at', Carbon::now()->year)
                    ->select(DB::raw("MONTH(created_at) as month"),DB::raw("count('month') as client_count"))
                        ->groupby('month')
                        ->get()

                    $users = DB::table('clients')
                                 ->select(DB::raw("count('id') as total"),DB::raw("MONTH(created_at) as month"))
                                 ->groupBy('month')
                                 ->get();

dd($users);
$clients = null;
                for ($i=1; $i <=12 ; $i++) { 
                   $clients[$i] =Client::whereMonth('created_at', $i)
                   ->select(DB::raw('count(id) as data'), DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                       ->groupby('month')
                       ->get();
                    
                }*/

              /*dd( User::whereMonth('created_at', '3')
                        ->select(DB::raw("count(*) as total"))
                        ->get());
                        
                dd(DB::table('users')
                   ->select(DB::raw("count(*) as total"),DB::raw("Date(created_at) as date"))
                   ->groupby('date')
                   ->get());
                dd(User::whereYear('created_at', Carbon::now()->year)
                ->select(DB::raw("MONTH(created_at) month"),DB::raw("count('month') as vistors_count"))
                       ->groupby('month')
                       ->get());
                dd(DB::table('users')
                ->select(('created_at'))
                ->get());
*/
$users = User::all();
/*dd($users->groupBy(function($item) {
    return [$item->created_at->format('M')];
})
);*/
$data=[];
for ($i=1; $i <=12 ; $i++) { 
    $data[$i] = User::whereMonth('created_at', $i)
            ->count();
}

        $jan = Client::whereDate('created_at', today())->count();
        $chart->labels(["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"]);
        $chart->dataset('Clients', 'bar', [$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11],$data[12]]);

        return view('dashboard', ['chart' => $chart]);
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


