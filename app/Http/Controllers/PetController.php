<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{

    public function index()
    {
        $pets = Pet::all();
        return view('index')->with('pets', $pets);
    }

    public function create()
    {
        return view('create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Pet::create($input);
        return redirect('')->with('flash_message');
    }
 
    
    public function show($id)
    {
        $pets = Pet::find($id);
        return view('show')->with('pets', $pets);
    }
 
    
    public function edit($id)
    {
        $pets = Pet::find($id);
        return view('edit')->with('pets', $pets);
    }
 
  
    public function update(Request $request)
    {
        $pets = Pet::find($request->id);
        $pets->update( $request-> all());
        return redirect('/');
    }
 
  
    public function destroy($id)
    {
        Pet::destroy($id);
        return redirect('/')->with('flash_message', 'Pet deleted!');
    }

    public function search( Request $request ){

        $pets = Pet::where("type", $request->type)->get();

        return view("index", [
            "pets" => $pets
        ]);

    }

}
