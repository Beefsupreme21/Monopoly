<?php

namespace App\Http\Controllers;

use App\Models\CommunityChest;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCommunityChestRequest;
use App\Http\Requests\UpdateCommunityChestRequest;

class CommunityChestController extends Controller
{

    public function index(CommunityChest $communityChest)
    {   
        return view('communityChest.index', [
            'communityChestCards' => $communityChest->all()
        ]);
    }

    public function show($id) {   
        $communityChestCard = CommunityChest::findOrFail($id);
    
        return view('communityChest.show', [
            'communityChestCard' => $communityChestCard
        ]);
    }

    public function create() {
        return view('communityChest.create');
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

        CommunityChest::create($formFields);

        return redirect('/')->with('message', 'Created successfully!');
    }


    public function edit($id)
    {
        $communityChestCards = CommunityChest::findOrFail($id);

        return view('communityChest.edit', [
            'communityChestCards' => $communityChestCards
        ]);
    }

    public function update(Request $request, CommunityChest $communityChestCards)
    {
        $formFields = $request->validate([
            'version' => 'required',
            'image',
            'message',
            'amount',
            'canHold' => 'required',
            'goToProperty',
        ]);

        $communityChestCards->update($formFields);

        return redirect('/communityChest')->with('message', 'Updated successfully!');
    }

    public function destroy(CommunityChest $communityChest)
    {
        $communityChest->delete();
        return redirect('/communityChest')->with('message', 'Deleted successfully');
    }

}
