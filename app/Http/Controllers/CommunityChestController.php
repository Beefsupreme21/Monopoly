<?php

namespace App\Http\Controllers;

use App\Models\CommunityChest;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCommunityChestRequest;
use App\Http\Requests\UpdateCommunityChestRequest;

class CommunityChestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CommunityChest $communityChest)
    {   
        return view('communityChest.index', [
            'communityChest' => $communityChest->all()
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
     * @param  \App\Http\Requests\StoreCommunityChestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommunityChestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommunityChest  $communityChest
     * @return \Illuminate\Http\Response
     */
    public function show(CommunityChest $communityChest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommunityChest  $communityChest
     * @return \Illuminate\Http\Response
     */
    public function edit(CommunityChest $communityChest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommunityChestRequest  $request
     * @param  \App\Models\CommunityChest  $communityChest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommunityChestRequest $request, CommunityChest $communityChest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommunityChest  $communityChest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommunityChest $communityChest)
    {
        //
    }
}
