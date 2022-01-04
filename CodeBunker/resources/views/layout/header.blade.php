<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Code Bunker | Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href={{asset("publicSite/css/bootstrap.css")}} />
    <link rel="stylesheet" href={{asset("publicSite/css/all.min.css")}} />
    <link rel="stylesheet" href={{asset("publicSite/css/home.css")}} />
    <link rel="stylesheet" href={{asset("publicSite/css/signup.css")}} />
    <link rel="stylesheet" href={{asset("publicSite/css/category.css")}} />



    
        

     
</head>
<style>

</style>
<body>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container border-bottom border-warning border-1">
                <a href="{{route('home')}}"><img class="navbar-brand" src={{asset("publicSite/imgs/logoH.svg")}} width="100" alt="logo" /></a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
           
                <div class="main-nav__right">
                    <ul class="navbar-nav ms-auto flex-row">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item mr-4">
                            <a class="nav-link text-white sign-my" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item mr-4">
                            <a class="nav-link text-white sign-my" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                  
                        <div>
                       
                                <li >
                                    <p class="login-link" role="button" style="padding-right:40px !important;">
                                        {!! "Welocme, " . "<span style='color:#FFA801'>".Auth::user()->name."</span>" !!}
                                    </p>
                                </li>
                         
                           
                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <button class="btn" style="background-color: #E9860D">
                                    {{ __('Logout') }}
                                </button>
                            </a>
                    <button  type="button"> <a class='btn btn-dark' href="{{route('result.index')}}">Your exams</a> </button>

                    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    {{-- <a href="{{route('result.index')}}"><button class="login-link d-none">Your Exams</button></a> --}}
                        {{-- <h1>guest</h1> --}}
                        @endguest
                    </ul>
                    <a href="" class="text-white search-popup__toggler"><i class="tripo-icon-magnifying-glass"></i></a>
                    @auth

                    <a href="" class="main-nav__login"><i class="tripo-icon-avatar"></i></a>
                    {{-- <a href="{{route('result.index')}}"><button class="login-link d-none">Your Exams</button></a> --}}
                    {{-- <h1>auth</h1> --}}
                    
                    @endauth
                </div>
                  {{-- @guest
                  @if (Route::has('login'))
                      <li class="nav-item home-btn-login">
                          <a class="nav-link login-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link  login-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown home-btn-login">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item nav-link login-link" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest --}}
          
              
              </div>
            </div>
          </nav>