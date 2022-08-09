<?php

namespace App\Http\Controllers;



use App\Models\Gig;
use App\Models\Purchase;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Auth;

class GigController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id ='') {

        $gigs = Gig::all()->where('user_id', Auth::user()->id);
        return view( 'gig.my_gigs')->withGigs($gigs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'gig.create' );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        if($request->post('id') > 0)
        {
            $gig = Gig::find($request->post('id'));
            $this->validate( $request, array(
                'title'       => 'required|max:255',
                'price'       => 'required',
                'category'    => 'required',
                'description' => 'required'
            ) );
        }
        else
        {
            $this->validate( $request, array(
                'title'       => 'required|max:255',
                'price'       => 'required',
                'category'    => 'required',
                'description' => 'required',
                'photo'       => 'required'
            ) );
            $gig = new Gig();
        }

        $gig->user_id = Auth::user()->id;
        $gig->title       = $request->title;
        $gig->category    = $request->category;
        $gig->description = $request->description;
        $gig->price = $request->price;
        $gig->status = $request->status;
        $gig->id = $request->id;

        if ( $request->hasFile( 'photo' ) ) {
            $image    = $request->file( 'photo' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path( 'img/gigs/' . $filename );
            Image::make( $image )->resize( 800, 400 )->save( $location );
            $gig->image = $filename;
        }

        $gig->save();

        return redirect()->route( 'my_gigs');
    }

    /**
     * Display the specified resource.
     *
     * @param Gig $gig
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     *
     */
    public function show(Gig $gig ) {
        //$gig = Gig::all();
        return view('gig.gig_details')->withGig($gig);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id) {
        if($id > 0)
        {
            $arr= Gig::where(['id' => $id])->get();

            $result['name'] = $arr['0']-> name;
            $result['title']       = $arr['0']-> title;
            $result['category']    = $arr['0']-> category;
            $result['description'] = $arr['0']-> description;
            $result['price'] = $arr['0']-> price;
            $result['status'] = $arr['0']-> status;
            $result['id'] = $arr['0']->id;

        }
        else
        {
            $result['title']       = '';
            $result['category']    = '';
            $result['description'] = '';
            $result['price']       = '';
            $result['id'] = 0;


        }

        return view('/gig/update_gig', $result);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */


    public function destroy(Request $request, $id)
    {
        $model=Gig::find($id);
        $model->delete();
        $request->session()->flash('message', 'Brand Deleted');
        return redirect('/my_gigs');
    }

    public function status(Request $request, $status, $id)
    {
        $model=Gig::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message', 'Status Updated');
        return redirect('my_gigs');

    }
    public function orderstatus(Request $request, $status, $id)
    {
        $model=Purchase::find($id);
        $model->orderstatus=$status;
        $model->save();
        $request->session()->flash('message', 'Status Updated');
        if(Auth::user()->role == 0)
        {
            return redirect('assigned_projects');

        }
        else{
            return redirect('my_orders');
        }

    }


}
