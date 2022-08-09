@extends('layouts.landing_header')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($gig as $gig)
                @if($gig->status)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="{{ url('gigs')}}/{{$gig->id}}">
                                <img src="{{asset('/img/gigs/' . $gig->image)}}">
                            </a>
                            <div class="caption">

                                <p><a href="{{ url('gigs')}}/{{$gig->id}}">{{ $gig->title }}</a></p>
                                <p><span>by <a href="">{{ $gig->user->name }}</a></span>
                                    <b class="green pull-right">PKR {{ $gig->price }}</b>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
