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
    <link rel="stylesheet" href={{asset("publicSite/css/answers.css")}} />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />



    
        

     
</head>
<style>

</style>
<body>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container border-bottom border-warning border-1">
             <a href="{{route('home')}}"> <img class="navbar-brand" src={{asset("publicSite/imgs/logoH.svg")}} width="100" alt="logo" /></a>
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
              <div class="collapse navbar-collapse flex-grow-0" id="navbarNav" style="list-style: none">
            
            
                  @guest
                  @if (Route::has('login'))
                      <li class="nav-item ">
                          <a class="btn btn-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="btn btn-secondary m-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown home-btn-login" style="">
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
              
              @endguest
          
              </div>
            </div>
          </nav>








        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
