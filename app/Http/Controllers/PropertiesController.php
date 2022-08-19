<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index() {
        $properties = Properties::when(request('searchQuery'), function ($query) {
            return $query->where('name', 'like', '%' . request('searchQuery') . '%')
            ->orWhere('color', 'like', '%' . request('searchQuery') . '%');;
        })->get();

        return view('properties.index', [
            'properties' => $properties->sortBy('position')
        ]);
    }

    public function show(Properties $property) {
        return view('properties.show', [
            'property' => $property
        ]);
    }

    public function create() {
        return view('properties.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'color' => 'required',
            'rent' => 'required',
            'rentOneHouse' => 'required',
            'rentTwoHouse' => 'required',
            'rentThreeHouse' => 'required',
            'rentFourHouse' => 'required',
            'rentHotel' => 'required',
            'mortgage' => 'required',
            'houseCost' => 'required',
            'position' => 'required',
        ]);

        Properties::create($formFields);

        return redirect('/')->with('message', 'Created successfully!');
    }

    public function update(Request $request, Properties $property) {
        $formFields = $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'color' => 'required',
            'rent' => 'required',
            'rentOneHouse' => 'required',
            'rentTwoHouse' => 'required',
            'rentThreeHouse' => 'required',
            'rentFourHouse' => 'required',
            'rentHotel' => 'required',
            'mortgage' => 'required',
            'houseCost' => 'required',
            'position' => 'required',
        ]);

        $property->update($formFields);


        return redirect('/')->with('message', 'Updated successfully!');
    }

    public function edit(Properties $property) {
        return view('properties.edit', ['property' => $property]);
    }

    public function destroy(Properties $property) {
        $property->delete();
        return redirect('/')->with('message', 'Deleted successfully');
    }

}
