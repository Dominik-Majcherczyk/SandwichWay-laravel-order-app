@extends('layouts.app')

@section('content')
<section class="section container scrollSpy tlo" id="panel">
<div class="row">
    <div class="col s12 l12">
    </br>
</br>
</br>
</br>
</br>
</br>
    <div class="center-align">
            
           
            <h1 class="white-text">Witaj!</h1>
            
            
            
            </br>
            </div>
        @if (Route::has('login'))
        <div class="center-align">

            @auth
                <a class="waves-effect waves-light btn-large orange darken-2" href="{{ url('/home') }}">Panel Dowodzenia</a>
            @else
            <a class="waves-effect waves-light btn-large orange darken-2 malyguzik" href="{{ route('login') }}">Zaloguj</a>

                @if (Route::has('register'))
                <a class="waves-effect waves-light btn-large orange darken-2 malyguzik" href="{{ route('register') }}">Zarejestruj</a>
                @endif
            @endauth
        </div>
        @endif

</br>
</br>
         <div class="content center-align">
        <a class="waves-effect waves-light btn-large orange darken-2 guzik" href="{{ route('sandwiches.create') }}">złóż zamówienie</a>
        <h4 class="mssg white-text">{{ session ('mssg') }}</h4>
        </div>
    </div>
</div>

@endsection







