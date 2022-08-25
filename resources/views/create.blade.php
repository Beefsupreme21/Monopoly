<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Add a new Piece</h2>
        </header>

        <form method="POST" action="/properties" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <p class="text-lg mb-1">Choose Type</p>
                <div class="p-4">
                    <div x-data="{ property: true, chance:false, communityChest:false }">
                        <div class="mb-4">
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
                                <x-create-property />   
                            </div>
                    
                            <div x-show="chance" x-cloak>
                                <x-create-chance />   
                            </div>
                    
                            <div x-show="communityChest" x-cloak>
                                <x-create-communityChest />   
                            </div>
                        </div>



                    </div>
                </div>
                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 bg-black">
                        Create Card!
                    </button>
    
                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </div>
        </form>
    </div>
</x-layout>
