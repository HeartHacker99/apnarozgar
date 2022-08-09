<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\orders;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $gigs = Gig::all();
        return view( 'home', compact('gigs'));
    }
    public function error()
    {
        return view( 'error');
    }

    public function about()
    {
        $role = Auth::user()->role;
        if($role != '1')  // Freelancer == 1
        {
            return view( 'about.about');
        }
        return "404 Not Found Lala";
    }
    public function how()
    {
        return view( 'about.how');
    }
    public function why()
    {
        return view( 'about.why');
    }

    public function dashboard()
    {
        $gigs = Gig::all();
        $role = Auth::user()->role;
        if($role == '1')  // Freelancer == 1
        {
            $data=orders::select('order_id','created_at')->get()->groupBy(function($data){
                return Carbon::parse($data->created_at)->format('M');
            });

            $months=[];
            $monthCount=[];
            foreach($data as $month => $values){
                $months[]=$month;
                $monthCount[]=count($values);
            }

            return view('dashboard',['data'=>$data,'months'=>$months,'monthCount'=>$monthCount]);
        }
        elseif($role == '0')
        {
            $user = User::where('email', '=', Auth::user()->email)->first();
            dd($user);
            return view( 'employer_dashboard',  compact('gigs'));

        }
        elseif($role == '2')
        {
            $data = User::select('id','created_at')->get()->groupBy(function ($data){
                return Carbon::parse($data->created_at)->format('M');
            });

            $month =[];
            $monthCount = [];

            foreach ($data as $month => $values)
            {
                $months[] = $month;
                $monthCount[] = count($values);
            }
            return view( 'admin.admin_dashboard', ['data' => $data, 'months' => $months, 'monthCount' => $monthCount ]);
        }
    }


}
