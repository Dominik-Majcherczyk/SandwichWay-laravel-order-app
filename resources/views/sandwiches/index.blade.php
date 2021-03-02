@extends('layouts.app')
@section('content')
<section class="section container scrollSpy tlo" id="contact">
            <div class="row">
                
                <div class="col s12 l12 ">
                <h3 class="white-text center-align">Aktualne zamówienia:</h3>
        
                @foreach($sandwich as $item)
                    <div class="sandwich-item">
                    <h5><a class="white-text brand-logo" href="/sandwiches/{{ $item->id }}"><img class="img-logo" src="https://image.flaticon.com/icons/png/512/926/926268.png" alt=""> {{ $item->ClientName }}</a></h5>
                    </div>
                    </br>
                    
                @endforeach
                    
                </div>
                
            </div>
            <div class="col s12 l4 center-align paginacja">
                        {{ $sandwich->links() }}
            </div>
        </section>
@endsection
