<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('/css/lightbox.min.css')}}">
        <script src="{{asset('/js/lightbox-plus-jquery.min.js')}}"></script>
        <script src="{{asset('/js/newtab.js')}}"></script>
        <title>Apnarozgar</title>
        <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all"> <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" integrity="sha512-WWc9iSr5tHo+AliwUnAQN1RfGK9AnpiOFbmboA0A0VJeooe69YR2rLgHw13KxF1bOSLmke+SNnLWxmZd8RTESQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

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
        @livewire('navigation-menu')

        <!-- Page Heading -->

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
        </main>
        <div id="body" style="margin-top: 4%">
            <div class="container">
                @include('layouts.messages')
                @yield('content')
            </div>
            @yield('about')
        </div>
            {{--Footer Session Start--}}


            <section class="btm-section secpadding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">New Projects</h3></div>
                            <div class="list styled custom-list">
                                <ul>
                                    <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
                                    <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
                                    <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
                                    <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
                                    <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
                                    <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">Large Projects</h3></div>
                            <div class="list styled custom-list">
                                <ul>
                                    <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
                                    <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
                                    <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
                                    <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
                                    <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
                                    <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">Our Clients</h3></div>
                            <blockquote class="blockquote-1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote></div>

                    </div>
                </div>
            </section>

            <footer id="footer" >
                <div class="footer2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 panel" style="background: #272727">
                                <div class="panel-body" >
                                    <p class="simplenav">
                                        <a href="{{url('/')}}">Home</a> |
                                        <a href="{{url('#about')}}">About</a> |
                                        <a href="{{url('/#service')}}">Services</a> |
                                        <a href="#">Price</a> |
                                        <a href="#">Projects</a> |
                                        <a href="#">Contact</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 panel" style="background: #272727">
                                <div class="panel-body">
                                    <p class="text-right">
                                        Copyright © 2021,  <a href="{{url('/dashboard')}}" rel="develop">apnarozgar.com</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- /row of panels -->
                    </div>
                </div>
            </footer>

            {{--Footer Session End--}}
        </div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
        @yield('scripts')
        {{--<script>

            $(document).ready(function () {
                function makeTimer() {

                    var endTime = new Date("29 December 2021 9:56:00 GMT+01:00");
                    endTime = (Date.parse(endTime) / 1000);

                    var now = new Date();
                    now = (Date.parse(now) / 1000);

                    var timeLeft = endTime - now;

                    var days = Math.floor(timeLeft / 86400);
                    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
                    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
                    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

                    if (hours < "10") { hours = "0" + hours; }
                    if (minutes < "10") { minutes = "0" + minutes; }
                    if (seconds < "10") { seconds = "0" + seconds; }

                    $("#days").html(days + "<span>D</span>");
                    $("#hours").html(hours + "<span>H</span>");
                    $("#minutes").html(minutes + "<span>M</span>");
                    $("#seconds").html(seconds + "<span>S</span>");

                }

                setInterval(function() { makeTimer(); }, 1000);
            });
        </script>--}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
