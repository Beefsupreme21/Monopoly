<?php

namespace App\Http\Controllers;

use App\Models\ChanceCard;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChanceCardRequest;
use App\Http\Requests\UpdateChanceCardRequest;

class ChanceCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChanceCard $chanceCards)
    {
        return view('chanceCard.index', [
            'chanceCards' => $chanceCards->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chanceCard.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChanceCardRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request) {
        $formFields = $request->validate([
            'message' => 'required',
            'amount' => 'required',
            'canHold' => 'required',
            'goToProperty' => 'required',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        ChanceCard::create($formFields);

        return redirect('/')->with('message', 'Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChanceCard  $chanceCard
     * @return \Illuminate\Http\Response
     */
    public function show(ChanceCard $chanceCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChanceCard  $chanceCard
     * @return \Illuminate\Http\Response
     */
    public function edit(ChanceCard $chanceCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChanceCardRequest  $request
     * @param  \App\Models\ChanceCard  $chanceCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChanceCardRequest $request, ChanceCard $chanceCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChanceCard  $chanceCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChanceCard $chanceCard)
    {
        //
    }
}
