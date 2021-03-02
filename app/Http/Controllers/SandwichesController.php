<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sandwich;
use App\newSandwich;
use PhpParser\Builder\Function_;
use App\Http\Controllers\Controller;


class SandwichesController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth');
    }*/

    
    public function index(){

        $sandwich = DB::table('sandwiches')->paginate(7);
        //$sandwich = Sandwich::simplePaginate(2);
    
        return view('sandwiches.index', [
            'sandwich' => $sandwich,
            ]);
    }

    public function show($id){

        $singleSandwich = Sandwich::findOrFail($id);
        return view('sandwiches.show', ['singleSandwich' => $singleSandwich]);
    }

    public function create(){
        $newSandwich = newSandwich::all();

        $decription = DB::table('newSandwich');

        return view('sandwiches.create', [
            'newSandwich' => $newSandwich,
        ]);
    }

    public function new(){
        
        return view('sandwiches.new');
    }

    public function store(Request $request) {

        $sandwich = new Sandwich();
        $sandwich->ClientName = request('ClientName');
        $sandwich->type = request('type');
        $sandwich->bread = request('bread');
        $sandwich->toppings = request('toppings');

        $request->validate([
            'ClientName' => 'required|max:255',
        ],
        [
            'ClientName.required' => 'Imie jest wymagane',
        ]);
       
        $sandwich->save();

        return redirect('/')->with('mssg', 'Twoje zamówienie czeka na realizacje');
    }

    public function storeNew(Request $request) {

        $newSandwich = new newSandwich();
        $newSandwich->name = request('name');
        $newSandwich->description = request('description');
        

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:9999',
        ],
        [
            'name.required' => 'Nazwa jest wymagana',
            'description.required' => 'Opis jest wymagany',
        ]);
        $newSandwich->save();

        return redirect('/')->with('mssg', 'Nowa kanapka została dodana');
    }

    public function destroy($id) {
        $sandwich = Sandwich::findOrFail($id);
        $sandwich->delete();

        return redirect('/sandwiches');
    }
}
