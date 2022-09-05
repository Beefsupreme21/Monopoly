<x-layout>
    <div class="flex justify-center" x-data="{ 
        name: '', cost: '', rent: '', rentOneHouse: '', rentTwoHouse: '', rentThreeHouse: '', rentFourHouse: '', rentHotel: '', mortgage: '', houseCost: '', 
        property: true, chance:false, communityChest:false, 
        darkBlue: false, yellow: false, red: false, lightBlue: false, darkPurple: false, purple: false, purple: false, orange: true, green: false 
    }">
        <div class="md:flex pb-6">
            <div class="bg-gray-50 border border-gray-200 p-8 md:mr-8 rounded mt-24 min-w-screen-md">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">Add a new Piece</h2>
                </header>
        
                <div class="p-4">
                    <div>
                        <p class="text-lg mb-1">Choose Type</p>
                        <input 
                            x-on:click="property = true, chance = false, communityChest = false" 
                            type="radio"
                            id="property"
                            name="type"
                            value="property"
                            checked="checked">
                        <label for="property">Property</label><br>

                        <input x-on:click="property = false, chance = true, communityChest = false" 
                            type="radio" 
                            id="chance" 
                            name="type" 
                            value="chance">
                        <label for="chance">Chance</label><br>

                        <input x-on:click="property = false, chance = false, communityChest = true" 
                            type="radio" 
                            id="communityChest" 
                            name="type" 
                            value="communityChest">
                        <label for="communityChest">Community Chest</label><br>
                    </div>

                    <div>
                        <div x-show="property" x-cloak>
                            <x-CreateForm.create-property />   
                        </div>
                
                        <div x-show="chance" x-cloak>
                            <x-CreateForm.create-chance />   
                        </div>
                
                        <div x-show="communityChest" x-cloak>
                            <x-CreateForm.create-communityChest />   
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="rounded mx-auto mt-24 relative">
                <div class="sticky top-5" x-show="property" x-cloak>
                    <x-CreateForm.property-card-preview />   
                    <x-CreateForm.property-board-preview />   
                </div>
        
                <div class="border border-gray-200 rounded p-6" x-show="chance" x-cloak >
                    <img src="{{asset('images/Advance_To_Boardwalk.webp')}}">
                </div>
        
                <div class="border border-gray-200 rounded p-6" x-show="communityChest" x-cloak>
                    <img src="{{asset('images/CC_Advance_to_Go.webp')}}">
                </div>
            </div>
        </div>

    </div>

</x-layout>
