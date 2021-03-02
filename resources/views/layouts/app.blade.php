<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SandwichWay</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SandwichWay') }}</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"-->

    <!-- Styles -->
    <!--link href="{{ asset('css/app.css') }}" rel="stylesheet"-->
    
    <!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- font awesome cdn-->
    <script src="https://kit.fontawesome.com/9dac6709b9.js" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="icon" type="image/png" href="https://image.flaticon.com/icons/png/512/926/926268.png" />
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="nav-wrapper grey darken-4">
            <div class="container">

                <a class="brand-logo orange-text text-darken-2" href="{{ url('/') }}"><img class="img-logo" src="https://image.flaticon.com/icons/png/512/926/926268.png" alt="">  SandwichWay</a>
            
                 
                <a href="" class="sidenav-trigger" data-target="mobile-menu"><i class="material-icons">menu</i></a>

                
                <ul class="right hide-on-med-and-down">
                @guest
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                @else
                    <li><span>Witaj {{ Auth::user()->name }}!</span></li>
                    
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                    
                    <li><a href="#" class="tooltipped btn-floating btn-small orange darken-2" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="tooltipped btn-floating btn-small orange darken-2" data-tooltip="Facebook"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltipped btn-floating btn-small orange darken-2" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a></li>
                @endguest
                </ul>

                <ul class="sidenav grey darken-4" id="mobile-menu">
                @guest
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                @else
                    <li><span>Witaj {{ Auth::user()->name }}!</span></li>
                    <div>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                    </div>
                @endguest
                </ul>

            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </header>
    
    <footer class="page-footer grey darken-4">
            <div class="container">
                <div class="row">
                    <div class="col s12 l6">
                        <h5 class="orange-text text-darken-2">O nas</h5>
                        <p>Super kanapkarnia najlepsza w mieście</p>
                        <p>Donec convallis sapien a commodo egestas. Etiam velit nisi, porta semper arcu at, sagittis efficitur eros. Aenean sodales vestibulum nibh</p>
                    </div>
                    <div class="col s12 l4 offset-l2">
                        <h5 class="orange-text text-darken-2">Media</h5>
                        <ul>
                            <li><a href="#" class="grey-text text-lighten-3">Facebook</a></li>
                            <li><a href="#" class="grey-text text-lighten-3">Twitter</a></li>
                            <li><a href="#" class="grey-text text-lighten-3">Linked In</a></li>
                            <li><a href="#" class="grey-text text-lighten-3">Instagram</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="footer-copyright grey darken-3">
                <div class="container center-align orange-text text-darken-2">&copy; 2020 Domicorp</div>
            </div>
    </footer>
 
</body>
</html>
