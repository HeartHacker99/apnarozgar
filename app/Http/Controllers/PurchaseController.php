<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\Upload;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class PurchaseController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        Purchase::create([
            'user_id' => Auth::user()->id,
            'to_user_id' => $request->to_user_id,
            'gig_id' => $request->gig_id,
            'price' => $request->price,
            'days' => $request->days
        ]);
        /*dd($request);*/
        return redirect()->route('gigs.show', $request->gig_id);
    }

    public function sellings()
    {
        $sellings = orders::all();
        return view('purchases.my_sellings')->withSellings($sellings);
    }

    public function orders()
    {
        $orders = Purchase::where('to_user_id', Auth::user()->id)->get();
        return view('purchases.my_orders')->withOrders($orders);
    }
    public function assigned_projects(User $user)
    {

        $assign_projects = Purchase::where('user_id', Auth::user()->id)->get();
        /*foreach($orders as $order) {
            $username = User::all()->where('id', $order->to_user_id);
           // print_r($username->name);
        }*/
        return view('purchases.assigned_projects')->withOrders($assign_projects);
    }

    public function show_single($id, $user_id='', $to_user_id='')
    {
        $purchase = Purchase::find($id);
        $uploads = Upload::all();
        $download_file = '';
        foreach ($uploads as $uploads)
        {
            $download_file = Upload::all()->where('user_id', $user_id )->where('to_user_id', $to_user_id )->where('id', $id);
        }
        return view('purchases.show_single', compact('download_file'))->withPurchase($purchase);
    }
}
