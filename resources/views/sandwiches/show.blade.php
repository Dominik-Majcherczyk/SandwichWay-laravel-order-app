@extends('layouts.app')

@section('content')
<!--div class="wrapper sandwich-details">
    <h1>Zamówienie dla {{ $singleSandwich->name }}</h1>
    <p class="type">kanapka - {{ $singleSandwich->type }}</p>
    <p class="bread">pieczywo - {{ $singleSandwich->bread }}</p>
    <p class="toppings">dodatkowe składniki:</p>
    <ul>
        @isset($singleSandwich->toppings)
        @foreach($singleSandwich->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
        @endisset
        @empty($singleSandwich->toppings)
            <p>BRAK</p>
        @endempty

    </ul>
    <form action="/sandwiches/{{ $singleSandwich->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>zamknij zamówienie</button>
    </form>
</!--div>
<a href="/sandwiches" class="back"><- wróć do listy</a-->



<section class="section container scrollSpy tlo" id="contact">
            <div class="row">
                
                <div class="col s12 l12 center-align">

                    <h2 class="white-text">Zamówienie klienta {{ $singleSandwich->ClientName }}</h2>
                    </br>
                    <h5 class="type white-text">kanapka - {{ $singleSandwich->type }}</h5>
                    <h5 class="bread white-text">pieczywo - {{ $singleSandwich->bread }}</h5>
                    </br>
                    <h6 class="toppings white-text">dodatkowe składniki:</h6>
                    <ul>
                        @isset($singleSandwich->toppings)
                        @foreach($singleSandwich->toppings as $topping)
                            <li><h6 class="white-text">{{ $topping }}</h6></li>
                        @endforeach
                        @endisset
                        @empty($singleSandwich->toppings)
                            <h6 class="white-text">BRAK</h6>
                        @endempty

                    </ul>
                    <form action="/sandwiches/{{ $singleSandwich->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    </br>
                    <button class="waves-effect waves-light btn-large orange darken-2 malyguzik">zakończ</button>
                    </form>
                    </br>
                    <a href="/sandwiches" class="back"><- wróć do listy</a>

                </div>
            </div>
        </section>
@endsection
