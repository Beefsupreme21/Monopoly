<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Builder\Property;

class PropertiesController extends Controller
{
    // Show all listings
    public function index() {
        return view('home', [
            'properties' => Properties::all()
        ]);
    }

    // Show single listing
    public function show(Properties $property) {
        return view('show', [
            'property' => $property
        ]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'rent' => 'required',
            'rentColorSet' => 'required',
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

    // Delete Listing
    public function destroy(Properties $property) {
        $property->delete();
        return redirect('/')->with('message', 'Deleted successfully');
    }

}