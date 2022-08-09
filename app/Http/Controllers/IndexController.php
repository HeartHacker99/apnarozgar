<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
use App\Models\Upload;

class IndexController extends Controller
{
    public function index()
    {
        $products = DB::select('select * from product');
        return view('index',['products'=>$products]);
    }
    public function upload(Request $request)
    {
        $data = new upload();

        $file = $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets', $filename);

        $data->user_id= $request->user_id;
        $data->to_user_id= $request->to_user_id;
        $data->file= $filename;
        $data->save();
        return redirect()->back();
    }

    public function download(Request $request, $file)
    {

        return response()->download(public_path('assets/'.$file));
    }
    /*public function download($fileName)
    {
        $path = storage_path() . '/app/public/' . config('chatify.attachments.folder') . '/' . $fileName;
        if (file_exists($path)) {
            return Response::download($path, $fileName);
        } else {
            return abort(404, "Sorry, File does not exist in our server or may have been deleted!");
        }
    }*/
}
