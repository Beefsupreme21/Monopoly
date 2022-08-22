<?php

namespace App\Http\Controllers;

use App\Models\ChanceCard;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChanceCardRequest;
use App\Http\Requests\UpdateChanceCardRequest;

class ChanceCardController extends Controller
{
    public function index() {
        $chanceCards = ChanceCard::all();

        return view('chanceCard.index', [
            'chanceCards' => $chanceCards
        ]);
    }

    public function show($id) {   
        $chanceCard = ChanceCard::findOrFail($id);
    
        return view('chanceCard.show', [
            'chanceCard' => $chanceCard
        ]);
    }

    public function create() {
        return view('chanceCard.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'version' => 'required',
            'image' => 'required',
            'message',
            'amount',
            'canHold' => 'required',
            'goToProperty',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        ChanceCard::create($formFields);

        return redirect('/')->with('message', 'Created successfully!');
    }

    public function update(Request $request, ChanceCard $chanceCard)
    {
        $formFields = $request->validate([
            'version' => 'required',
            'image',
            'message',
            'amount',
            'canHold' => 'required',
            'goToProperty',
        ]);

        $chanceCard->update($formFields);

        return redirect('/')->with('message', 'Updated successfully!');
    }


    public function edit($id)
    {
        $chanceCard = ChanceCard::findOrFail($id);

        return view('chanceCard.edit', [
            'chanceCard' => $chanceCard
        ]);
    }




    public function destroy(ChanceCard $chanceCard)
    {
        //
    }
}
