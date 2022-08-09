{{--@if(Auth::user()->role == '0')
    <a class="navbar-brand mr-4" href="/dashboard">
        <img src="{{asset('/img/logo.png')}}" alt="LOGO" style="height: 55px">
    </a>
@elseif(Auth::user()->role == '1')
    <a class="navbar-brand mr-4" href="/dashboard">
        <img src="{{asset('/img/logo.png')}}" alt="LOGO" style="height: 55px">
    </a>
@elseif(Auth::user()->role == '2')
    <a class="navbar-brand mr-4" href="/dashboard">
        <img src="{{asset('/img/logo.png')}}" alt="LOGO" style="height: 55px">
    </a>
@endif--}}

<a class="navbar-brand mr-4" href="/dashboard">
    <img src="{{asset('/img/logo.png')}}" alt="LOGO" style="height: 55px">
</a>
