<?php

namespace App\Http\Controllers;

use App\Models\PlayerPieces;
use App\Http\Requests\StorePlayerPiecesRequest;
use App\Http\Requests\UpdatePlayerPiecesRequest;

class PlayerPiecesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('playerPieces.index');
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
     * @param  \App\Http\Requests\StorePlayerPiecesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayerPiecesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayerPieces  $playerPieces
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerPieces $playerPieces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayerPieces  $playerPieces
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerPieces $playerPieces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayerPiecesRequest  $request
     * @param  \App\Models\PlayerPieces  $playerPieces
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayerPiecesRequest $request, PlayerPieces $playerPieces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayerPieces  $playerPieces
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerPieces $playerPieces)
    {
        //
    }
}
