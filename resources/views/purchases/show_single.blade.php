@extends('layouts.base')

@section('content')
    <h1 style="margin-bottom: 30px">{{ $purchase->gig->title }}</h1>

    <div class="panel panel-success">
        <div class="panel-body">
            <div class="d-flex">
                <h1><strong>Order by: </strong></h1> <h2 style="margin-left: 100px; margin-top: 10px">{{ $purchase->gig->user->name }}</h2>
            </div>
            <hr>
            <div class="d-flex">
                <h2><strong>Delivery time:</strong></h2> <h3 style="margin-left: 10px; margin-top: 5px"> within {{ $purchase->days }} days</h3>
            </div>
            <hr>
            <div class="d-flex">
                <h1><strong>Price: </strong></h1><h3 style="margin-left: 140px; margin-top: 10px">PKR {{ $purchase->price }}</h3>
            </div>
        </div>
        <hr>
        @auth
        @if(Auth::user()->role == '1')
            <form action="{{{url('upload')}}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flex">
                    <h1><strong>Upload: </strong></h1>
                    <input type="hidden" name="user_id" value="{{$purchase->user_id}}">
                    <input type="hidden" name="to_user_id" value="{{$purchase->to_user_id}}">
                    <input type="file" name="file" style="margin-left: 50px; margin-top: 10px">
                    <div>
                        <button type="submit" class="btn btn-success" >Submit</button>
                    </div>
                </div>
            </form>
        @elseif(Auth::user()->role == '0')
            @if($download_file != null)

                @foreach($download_file as $download_file)
                    <a href="{{url('/download/'.$download_file->file)}}" class="btn btn-success"> Download </a>
                @endforeach
            @endif
        @endif
            @endauth
    </div>

@endsection
