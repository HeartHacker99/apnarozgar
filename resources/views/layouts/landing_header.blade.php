<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Apnarozgar</title>

    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all"> <!-- Bootstrap CSS-->


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased bg-light">
<x-jet-banner />

<nav class="navbar navbar-expand-md navbar-light bg-white border-bottom sticky-top">
    <div class="container">
        <!-- Logo -->
        @if(Auth::check())
            <a class="navbar-brand mr-4" href="{{url('/dashboard')}}">
                <img src="{{asset('/img/logo.png')}}" alt="LOGO" style="height: 55px">
            </a>
        @else
            <a class="navbar-brand mr-4" href="{{url('/')}}">
                <img src="{{asset('/img/logo.png')}}" alt="LOGO" style="height: 55px">
            </a>
        @endif


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <div class="d-flex">
                    <form class="navbar-form navbar-left" role="form" type="get" action="{{url('/search')}}" style="padding-top: 10px">
                        <div class="form-group">
                            <input type="text" style="padding-right: 200px" name="query" class="form-control" placeholder="Find services">
                        </div>
                    </form>

                    <strong> <div class="dropdown" style="margin: 10px; " >
                            <button class="btn login-btn" id="register" type="button" data-toggle="dropdown" data-hover="dropdown">
                                About <span class="caret"></span>
                            </button>

                            <div class="dropdown-content">
                                <a href="{{url('/#about')}}">About Apnarozgar</a>
                                <a href="{{url('/#how')}}">How Apnarozgar Works</a>
                                <a href="{{url('/#why-us')}}">Why Apnarozgar</a>
                            </div>
                        </div>
                    </strong>
                    <ul class="navbar-nav ml-auto align-items-baseline">

                        <!-- Teams Dropdown -->

                        <a id="register" href="{{url('/freelancers')}}" class="btn login-btn" style="margin-right: 5px; margin: 10px; " class="btn login-btn" >Find Freelancers <i class="fas fa-search"></i> </a>

                    </ul>
                </div>

            </ul>
                        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto align-items-baseline">
                {{--<a id="login" href="{{route('login')}}" class="login-btn">Login <i class="fas fa-sign-in-alt"></i>--}}

                <!-- Teams Dropdown -->
                    <a  type="button" id="register" href="{{url('request_create')}}" class="btn login-btn" >Post A Request <i class="fas fa-plus-square"></i> </a>
                    <a  type="button" id="register" href="{{url('login')}}" class="btn login-btn" > Login <i class="fas fa-sign-in-alt"></i> </a>

               {{-- <x-jet-dropdown id="settingsDropdown">
                    <x-slot name="trigger" >
                        <strong>Login</strong>
                        --}}{{--{{ Auth::user()->name }}--}}{{--
                        <svg class="ml-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>

                    </x-slot>
                    <x-slot name="content">
                        <x-jet-dropdown-link id="login" href="{{route('login')}}">
                            {{ __('Freelancer') }} <i class="fas fa-sign-in-alt"></i>
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link id="login" href="{{route('login')}}">
                            {{ __('Employer') }} <i class="fas fa-sign-in-alt"></i>
                        </x-jet-dropdown-link>

                    </x-slot>
                </x-jet-dropdown>--}}


                <a id="register" href="{{route('register')}}" class="login-btn" >Register <i class="fas fa-user-plus"></i> </a>

                <!-- Settings Dropdown -->

            </ul>
        </div>
    </div>
</nav>










<!-- Page Heading -->
<header class="d-flex py-3 bg-white shadow-sm border-bottom">
    <div class="container" >
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                <form  role="form" type="get" action="{{url('/search')}}" style="padding-top: 10px">
                    <div class="form-group">
                        <button style="color: black;"  name="query" class="btn-looklike-link" value="GD" >Graphic & Designing</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                <form  role="form" type="get" action="{{url('/search')}}" style="padding-top: 10px">
                    <div class="form-group">
                        <button style="color: black;"  name="query" class="btn-looklike-link" value="DM" >Digital & Marketing</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">

                <form  role="form" type="get" action="{{url('/search')}}" style="padding-top: 10px">
                    <div class="form-group">
                        <button style="color: black;" name="query" class="btn-looklike-link" value="VA" >Video & Animation</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                <form  role="form" type="get" action="{{url('/search')}}" style="padding-top: 10px">
                    <div class="form-group">
                        <button style="color: black;" name="query" class="btn-looklike-link" value="MA" >Music & Video</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                <form  role="form" type="get" action="{{url('/search')}}" style="padding-top: 10px">
                    <div class="form-group">
                        <button style="color: black;" name="query" class="btn-looklike-link" value="PT" >Programming & Technology</button>
                    </div>
                </form>
            </div>

    </div>

</header>

    </div>
</header>

<!-- Page Content -->
<main class="my-5">

    @yield('banner_Search')
    <div class="container">
        @yield('content')
    </div>
    @yield('Why_Us')
    @yield('workdone')
    @yield('about')

</main>
<div id="body" style="margin-top: 4%">
    <div class="container">
        @include('layouts.messages')

    </div>
</div>
@yield('footer')


@stack('modals')

@livewireScripts

@stack('scripts')
@yield('scripts')
</body>
</html>
