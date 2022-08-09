<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\bids_on_requests;
use App\Models\submitRequest;
use Auth;
use App\Models\bid;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function create_bid(Request $request)
    {
        $this->validate( $request, array(
            'user_id'       => 'required|max:255',
            'price'       => 'required',
            'days'    => 'required',
            'description' => 'required',
        ));

        if($request->post('id') > 0)
        {
            $bid = bid::find($request->post('id'));
            $bids_on_requests = bids_on_requests::find($request->post('id'));

        }
        else
        {
            $bid = new bid();
            $bids_on_requests = new bids_on_requests();

        }
      /*  $submitted_request = submitRequest::all();
        dd($submitted_request);*/
        $bid->user_id = Auth::user()->id;
        $bid->price = $request->price;
        $bid->days       = $request->days;
        $bid->description = $request->description;
        $bid->save();
        /*dd($request);*/

        $bids_on_requests->bids_id = $bid->id;
        $bids_on_requests->user_id = Auth::user()->id;
        $bids_on_requests->price = $request->price;
        $bids_on_requests->days       = $request->days;
        $bids_on_requests->description = $request->description;
        $bids_on_requests->save();
        return view('/dashboard');
    }
    public function bids_on_requests()
    {
        $bids = bid::all();
        $gig = Gig::all();
        foreach ($gig as $gigs)
        return view('bids.bids_on_requests')->withbids($bids)->withGig($gigs);
    }


    public function edit_bid($id) {
        if($id > 0)
        {
            $arr= bid::where(['id' => $id])->get();

            $result['user_id']       = $arr['0']-> title;
            $result['price'] = $arr['0']-> price;
            $result['days']    = $arr['0']-> category;
            $result['description'] = $arr['0']-> description;


        }
        else
        {
            $result['user_id']       = '';
            $result['price']       = '';
            $result['days']    = '';
            $result['description'] = '';



        }

        return view('/bids/update_bid', $result);

    }

    public function Check_offers()
    {
        $bids = bid::all()->where('status', 1);
        return view('/Check_offers');
    }
    public function send_requests(User $user)
    {
        $send =  bid::all()->where('user_id', Auth::user()->id);

        return view('bids.send_requests')->withsend($send)->withuser($user);
    }
    public function my_bids(Request $request, $id)
    {
        $model=bid::find($id);
        $model->delete();
        $request->session()->flash('message', 'Brand Deleted');
        if(Auth::user()->role == '0')
        {
            return redirect('/bids_on_requests');
        }
    else{
            return redirect('/send_requests');
        }
    }

}
