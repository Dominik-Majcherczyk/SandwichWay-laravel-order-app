@extends('layouts.app')

@section('content')
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>
                    <p><a href="/sandwiches"><button>Zobacz liste zamówień</button></a></p>
                    <a href="{{ route('sandwiches.new') }}"><button>nowa kanapka</button></a>
                </div>
            </div>
        </div>
    </div>
</div-->





<section class="section container scrollSpy tlo" id="panel">
<div class="row">
    <div class="col s12 l12">
    </br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
    <div class="center-align">
            <h1 class="white-text">Panel dowodzenia szefa</h1>
            </br>
            </div>
        <div class="center-align">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <h5>{{ session('status') }}</h5>
                        </div>
                    @endif
                    <h5 class="white-text">Udało Ci się zalogować</h5>
</br>
            
            <a class="waves-effect waves-light btn-large orange darken-2" href="/sandwiches">Zobacz liste zamówień</a>
                
            
            <a class="waves-effect waves-light btn-large orange darken-2" href="{{ route('sandwiches.new') }}">Dodaj nową kanapka</a>

        </div>


@endsection
