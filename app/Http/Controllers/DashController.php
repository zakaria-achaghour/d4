<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\ClientChart;
use App\User;

class DashController extends Controller
{
    
    public function index(){
        $chart = new ClientChart;
       /* $chart->labels(['One', 'Two', 'Three', 'Four']);
        $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);




        $data = User::groupBy('age')
    ->get()
    ->map(function ($item) {
        // Return the number of persons with that age
        return count($item);
    });

$chart = new SampleChart;
$chart->labels($data->keys());
$chart->dataset('My dataset', 'line', $data->values());
*/
        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();

        
        $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('My dataset', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);

        return view('dashboard', ['chart' => $chart]));
    }

}
