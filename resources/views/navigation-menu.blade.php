<nav class="navbar navbar-expand-md navbar-light bg-white border-bottom sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand mr-4" href="/">
            <x-jet-application-mark width="36" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth
                @if(Auth::user()->role == '1' )
                    <a  type="button" id="register" href="{{url('/dashboard')}}" class="btn login-btn" >Dashboard <i class="fas fa-columns"></i></a>
                    <a  type="button" id="register"  href="{{url('chatify')}}" class="btn login-btn" >Messages <i class="fas fa-comments"></i> </a>
                    <a  type="button" id="register"  href="{{ route('my_sellings') }}" class="btn login-btn" >My sellings <i class="fas fa-chevron-circle-up"></i> </a>
                    <a  type="button" id="register"  href="{{ route('my_orders') }}" class="btn login-btn" >My Orders <i class="fas fa-shopping-cart"></i> </a>
                        <x-jet-dropdown id="settingsDropdown">
                            <x-slot name="trigger" >
                                More
                                    <svg class="ml-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                            </x-slot>
                            <x-slot name="content">
                                <x-jet-dropdown-link href="{{ route('buyer_requests') }}">
                                    {{ __('Requests') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('send_requests') }}">
                                    {{ __('Send Requests') }}
                                </x-jet-dropdown-link>

                            </x-slot>
                        </x-jet-dropdown>
            @elseif(Auth::user()->role == '0' )
                    <div class="d-flex">
                        <form class="navbar-form navbar-left" role="form" type="get" action="{{url('/search')}}" style="padding-top: 10px">
                            <div class="form-group" style="margin-right: 15px;">
                                <input type="text" style="padding-right: 200px;" class="form-control" name="query" placeholder="Search">
                            </div>
                        </form>
                        <div id="active_gigs">
                            <a  type="button" id="register"  href="{{url('chatify')}}" class="btn login-btn" >Messages <i class="fas fa-comments"></i> </a>

                        </div>
                        <div id="active_gigs">
                            <a  type="button" id="register" href="{{route('dashboard')}}" class="btn login-btn" >Active Gigs <i class="fas fa-check"></i> </a>
                        </div>
                        <div id="active_gigs">
                            <a  type="button" id="register" href="{{route('assigned_projects')}}" class="btn login-btn" > Assigned Projects <i class="fas fa-tasks"></i></a>
                        </div>
                        {{--<div id="active_gigs">
                            <a  type="button" id="register" href="{{url('request_create')}}" class="btn login-btn" >Post A Request <i class="fas fa-plus-square"></i> </a>
                        </div>--}}

                    </div>
                    @elseif(Auth::user()->role == '2' )
                        Dashboard
                    @endif
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto align-items-baseline">
               {{-- @auth

                    @if(Auth::user()->role == '1')
                        <x-jet-dropdown id="settingsDropdown">
                            <x-slot name="trigger">
                                    Sell & Bye
                                    --}}{{--{{ Auth::user()->name }}--}}{{--
                                    <svg class="ml-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                            </x-slot>
                            <x-slot name="content">
                                <x-jet-dropdown-link href="{{ route('my_sellings') }}">
                                    {{ __('My Sellings') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('my_orders') }}">
                                    {{ __('My Orders') }}
                                </x-jet-dropdown-link>

                            </x-slot>
                        </x-jet-dropdown>
                    @endif

                @endauth--}}
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <x-jet-dropdown id="teamManagementDropdown">
                        <x-slot name="trigger">
                            {{ Auth::user()->currentTeam->name }}

                            <svg class="ml-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Team Management -->
                            <h6 class="dropdown-header">
                                {{ __('Manage Team') }}
                            </h6>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <hr class="dropdown-divider">

                            <!-- Team Switcher -->
                            <h6 class="dropdown-header">
                                {{ __('Switch Teams') }}
                            </h6>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach
                        </x-slot>
                    </x-jet-dropdown>
                @endif

                <!-- Settings Dropdown -->
                @auth
                    <x-jet-dropdown id="settingsDropdown">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                <svg class="ml-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            @else
                                {{ Auth::user()->name }}

                                <svg class="ml-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            {{--<h6 class="dropdown-header small text-muted">
                                {{ __('Manage Account') }}
                            </h6>--}}
                            @if(Auth::user()->role == '1')
                                <x-jet-dropdown-link href="{{ route('gigs_create') }}">
                                    {{ __('Create a Gig') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('my_gigs') }}">
                                    {{ __('My Gig') }}
                                </x-jet-dropdown-link>


                                <hr class="dropdown-divider">
                            @elseif(Auth::user()->role == '0')
                                <x-jet-dropdown-link href="{{ route('request_create') }}">
                                    {{ __('Create a Request') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('my_requests') }}">
                                    {{ __('My Requests') }}
                                </x-jet-dropdown-link><x-jet-dropdown-link href="{{ route('bids_on_requests') }}">
                                    {{ __('Bids on Requests') }}
                                </x-jet-dropdown-link>
                                <hr class="dropdown-divider">


                            @endif
                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <hr class="dropdown-divider">

                            <!-- Authentication -->

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Log out') }}
                            </x-jet-dropdown-link>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                @endauth
            </ul>
        </div>
    </div>
</nav>
