<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index()
    {
        $pets = Pet::latest()->paginate(5);
        return view('pets.index',compact('pets'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $request->validate([ 
            'name_of_pet'=>'required',
            'animal_type'=>'required',
            'owner_of_pet'=>'required',
            'address_of_owner'=>'required'

        ]);
        Pet::create($request->all());
        return redirect()->route('pets.index')
            ->with('success','Stored Successfully.');
    }


    public function edit(Pet $pet)
    {
        return view('pets.edit',compact('pet'));
    }

    public function show(Pet $pet)
    {
        return view('pets.edit',compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $request->validate([

        ]);
        $pet->update($request->all());
        return redirect()->route('pets.index')
            ->with('success','Updated Successfully.');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')
            ->with('success','Deleted Successfully.');

    }
}
