<?php

namespace App\Http\Controllers;
use App\Models\Gig;
use Auth;


use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $search_text = $_GET['query'];
        if($search_text == "GD" || $search_text == "PT" || $search_text == "DM" || $search_text == "MA")
        {
            $gig = Gig::Where('category', 'LIKE', '%'.$search_text.'%')->get();
        }
        else
        {
            $gig = Gig::Where('title', 'LIKE', '%'.$search_text.'%')->get();
        }
        $login = Auth::user();
        /*if(!isset($login)){
            $login->id = 0;
        }*/

        return view('gig.search', compact('gig', 'search_text', 'login'));
    }

    public function freelancers()
    {
        $gig = Gig::all();
        return view('gig.active_gigs', compact('gig'));
    }


}
