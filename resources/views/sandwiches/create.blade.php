@extends('layouts.app')

@section('content')
<section class="section container scrollSpy tlo" id="contact">
            <div class="row">
                
                <div class="col s12 l5 ">
                <form action="/sandwiches" method="POST">
                @csrf
                        <div class="input-field">
                            
                            <input class="white-text" type="text" id="ClientName" name="ClientName">
                            <label for="ClientName">Twoje imie</label>
                        </div>

                        <label for="type">wybierz kanapke:</label>
                        
                        <select name="type" id="type" class="browser-default">
                        @foreach($newSandwich as $nSandwich)
                            <option value="{{ $nSandwich->name }}">{{ $nSandwich->name }}</option>
                        @endforeach
                         </select>
</br>
                        <label for="bread">wybierz typ pieczywa:</label>
                        <select name="bread" id="bread" class="browser-default">
                        <option value="jasne">jasne</option>
                        <option value="ciemne">ciemne</option>
                        </select>
                        </br>
                        <div class="input-field">
                            <p class="white-text">Dodatkowe składniki</p>
                            <p>
                                <label>
                                    <input type="checkbox" name="toppings[]" value="pieczarki">
                                    <span class="white-text">pieczarki</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" name="toppings[]" value="ser">
                                    <span class="white-text">ser</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" name="toppings[]" value="bekon">
                                    <span class="white-text">bekon</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" name="toppings[]" value="szpinak">
                                    <span class="white-text">szpinak</span>
                                </label>
                            </p>
                        </div>
                        </br>
                        
                        <button class="waves-effect waves-light btn-large orange darken-2 " type="submit" >zamów</button>
                        
                    </form>
                </div>
                <div class="col s12 l5 offset-l2">
                    <h2 class="white-text">Stwórz zamówienie</h2>
                    <p class="white-text">Zamów a za kilka chwil będzie gotowe :)</p>
                    </br>
                    </br>
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><h4 class="red-text">{{ $error }}</h4></li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </section>


        <!--div-- class="wrapper create-pizza">
    <h1>Stwórz zamówienie</h1>
    <form action="/sandwiches" method="POST">
        @csrf
        <label for="ClientName">Twoje imie:</label>
        <input type="text" id="ClientName" name="ClientName">

        <label for="type">wybierz kanapke:</label>
        <select name="type" id="type">
            @foreach($newSandwich as $nSandwich)
                <option value="{{ $nSandwich->name }}">{{ $nSandwich->name }}</option>
            @endforeach
        </select>

        </br>
       
        <button type="button">pokaż opis kanapki</button>
        </br>
        <label for="bread">wybierz rodzaj pieczywa:</label>
        <select name="bread" id="bread">
            <option value="jasne">jasne</option>
            <option value="ciemne">ciemne</option>
        </select><br /><br />



        <fieldset>
            <label>dodatkowe składniki</label>
            <input type="checkbox" name="toppings[]" value="pieczarki">pieczarki<br />
            <input type="checkbox" name="toppings[]" value="ser">ser<br />
            <input type="checkbox" name="toppings[]" value="bekon">bekon<br />
            <input type="checkbox" name="toppings[]" value="szpinak">szpinak<br />
        </fieldset>
        <input type="submit" value="zamów">


    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div-->
@endsection
