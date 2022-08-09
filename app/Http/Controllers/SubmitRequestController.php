<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\submitRequest;
use Auth;
use Image;
use App\Models\User;


class SubmitRequestController extends Controller
{
    public function index($id ='')
    {
        $submitRequest = submitRequest::all()->where('user_id', Auth::user()->id);
        return view( 'postrequests.mySubmittedRequests')->withsubmitRequest($submitRequest);
    }

    public function buyer_requests($id = '')
    {
        $submitRequest = submitRequest::all()->where('status', 1);
     //   $username = user::all();
        return view('postrequests.buyer_requests')->withsubmitRequest($submitRequest);
    }

    public function create_buyer_request()
    {
        return view( 'postrequests.postrequest' );
    }

    public function destroy(Request $request, $id)
    {
        $model=submitRequest::find($id);
        $model->delete();
        $request->session()->flash('message', 'Brand Deleted');
        return redirect('/my_requests');
    }


    public function status(Request $request, $status, $id)
    {
        $model=submitRequest::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message', 'Status Updated');
        return redirect('my_requests');

    }

    public function update($id) {
        if($id > 0)
        {
            $arr= submitRequest::where(['id' => $id])->get();

            $result['name'] = $arr['0']-> name;

            $result['title']       = $arr['0']-> title;
            $result['category']    = $arr['0']-> category;
            $result['description'] = $arr['0']-> description;
            $result['price'] = $arr['0']-> price;
            $result['duration'] = $arr['0']-> duration;
            $result['status'] = $arr['0']-> status;
            $result['id'] = $arr['0']->id;

        }
        else
        {
            $result['title']       = '';
            $result['category']    = '';
            $result['description'] = '';
            $result['price']       = '';
            $result['duration']       = '';
            $result['id'] = 0;


        }

        return view('/postrequests/update_request', $result);

    }

    public function request_store(Request $request)
    {
        $this->validate( $request, array(
            'title'       => 'required|max:255',
            'price'       => 'required',
            'duration'    => 'required',
            'category'    => 'required',
            'description' => 'required'
        ) );
        if($request->post('id') > 0)
        {
            $submitRequest = submitRequest::find($request->post('id'));
            $msg = 'Request Updated';
        }
        else
        {
            $submitRequest = new submitRequest();
            $msg = 'Request Inserted';
        }
        $submitRequest->user_id = Auth::user()->id;
        $submitRequest->title       = $request->title;
        $submitRequest->category    = $request->category;
        $submitRequest->description = $request->description;
        $submitRequest->price = $request->price;
        $submitRequest->duration = $request->duration;
        $submitRequest->status = $request->status;
        if ( $request->hasFile( 'photo' ) ) {
            $image    = $request->file( 'photo' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path( 'SubmitRequestFiles/' . $filename );
            Image::make( $image )->resize( 800, 400 )->save( $location );
            $submitRequest->image = $filename;
        }

        $submitRequest->save();
        return redirect()->route( 'my_requests');
    }
}
