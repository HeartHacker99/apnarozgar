<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            @foreach ($gigs as $gig)
                @if($gig->status)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="{{ url('gigs')}}/{{$gig->id}}">
                                <img src="{{asset('/img/gigs/' . $gig->image)}}">
                            </a>
                            <div class="caption">

                                <p><a href="{{ url('gigs')}}/{{$gig->id}}">{{ $gig->title }}</a></p>
                                <p><span>by <a href="">{{ $gig->user->name }}</a></span>
                                    <b class="green pull-right">${{ $gig->price }}</b>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <x-jet-welcome />
</x-app-layout>


