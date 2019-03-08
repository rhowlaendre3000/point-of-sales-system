<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/pent.css')}}" rel = "stylesheet" type="text/css" />

    
</head>

<body >
    <div id="app" style="margin-bottom:30px;">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="margin-bottom:20px;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3><strong>{{ env('app.name', 'Ghana Railways Authority') }}</strong></h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        
                            
                            
                            @endguest
                            
                          @auth
                         
                        <li class="nav-item active">
                                    <a class="nav-link" href="{{url('home')}}"><h5>Dashboard</h5><span class="sr-only">(current)</span></a>
                                </li>
                                

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('tickets/create') }}"><h5 style="padding-right: 10px;">Ticket Sales</h5></a>
                                </li>
                                @if(Auth::user()->admin==1)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('trains/create') }}"><h5>Trains</h5></a>
                                </li>
                                

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('routes/create') }}"><h5 style="padding-right: 10px;">Routes</h5></a>
                                </li>
                                @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" >
<div class="container-fluid" style="margin-top: -23px;margin-bottom: -23px;">
       
       

@yield('content')



</div>
           

        </main>
    </div>
</body>
@yield('footer')
</html>
