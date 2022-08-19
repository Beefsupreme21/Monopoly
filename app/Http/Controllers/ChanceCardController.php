<?php

namespace App\Http\Controllers;

use App\Models\ChanceCard;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChanceCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChanceCardRequest $request)
    {
        //
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
