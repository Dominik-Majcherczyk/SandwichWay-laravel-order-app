@extends('layouts.app')

@section('content')
<section class="section container scrollSpy tlo" id="contact">
            <div class="row">
                
                <div class="col s12 l6 center-align">
                <form action="/sandwiches/new" method="POST">
                @csrf
                        <div class="input-field">
                            
                            <input class="white-text" type="text" id="name" name="name">
                            <label for="ClientName">Nazwa kanapki</label>
                        </div>

                        <div class="input-field">
                            
                            <input class="white-text" type="text" id="description" name="description">
                            <label for="description">Opis</label>
                        </div>

                        
                        <button class="waves-effect waves-light btn-large orange darken-2 " type="submit">dodaj</button>
                        @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><h4 class="red-text">{{ $error }}</h4></li>
                        @endforeach
                    </ul>
                    @endif
                        
                    </form>
                </div>
                <div class="col s12 l4 offset-l2">
                    <h2 class="white-text">Stwórz nową kanapke</h2>
                    <p class="white-text">Dodaj kanapkę która pojawi się w menu</p>
                    </br>
                    </br>
                    
                </div>
            </div>
        </section>
@endsection