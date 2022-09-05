<x-layout>
    <div class="flex p-10 w-2/3 m-auto">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg m-auto">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Edit Property</h2>
            </header>
    
            <form method="POST" action="/properties/{{$property->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="version" class="text-lg mb-1">Version</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="version"
                        placeholder="Park Place"
                        value="{{$property->version}}"
                    />
    
                    @error('version')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="type" class="inline-block text-lg mb-1">Type</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="type"
                        placeholder="Park Place"
                        value="{{$property->type}}"
                    />
    
                    @error('type')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-1">Name</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name"
                        value="{{$property->name}}"
                    />
    
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="cost" class="inline-block text-lg mb-2">Cost</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="cost"
                        placeholder="$300"
                        value="{{$property->cost}}"
                    />
    
                    @error('cost')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div>
                    <p class="mb-2">Choose Color</p>
                    <div class="flex justify-evenly">
                        <div class="mb-6 flex-column">
                            <input type="radio" id="purple" name="color" value="purple" {{ $property->color == 'purple' ? 'checked' : '' }} >
                            <label for="purple">Purple</label><br>
                            <input type="radio" id="lightBlue" name="color" value="cyan" {{ $property->color == 'cyan' ? 'checked' : '' }}>
                            <label for="lightBlue">Light Blue</label><br>
                            <input type="radio" id="pink" name="color" value="pink" {{ $property->color == 'pink' ? 'checked' : '' }}>
                            <label for="pink">Pink</label><br>
                            <input type="radio" id="orange" name="color" value="orange" {{ $property->color == 'orange' ? 'checked' : '' }}>
                            <label for="orange">Orange</label><br>
                        </div>
            
                        <div class="mb-6 flex-column">
                            <input type="radio" id="red" name="color" value="red" {{ $property->color == 'red' ? 'checked' : '' }}>
                            <label for="red">Red</label><br>
                            <input type="radio" id="yellow" name="color" value="yellow" {{ $property->color == 'yellow' ? 'checked' : '' }}>
                            <label for="yellow">Yellow</label><br>
                            <input type="radio" id="green" name="color" value="green" {{ $property->color == 'green' ? 'checked' : '' }}>
                            <label for="green">Green</label><br>
                            <input type="radio" id="blue" name="color" value="blue" {{ $property->color == 'blue' ? 'checked' : '' }}>
                            <label for="blue">Blue</label><br>
                        </div>
                    </div>
                    @error('color')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="rent" class="inline-block text-lg mb-2">Rent</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="rent"
                        placeholder="$40"
                        value="{{$property->rent}}"
                    />
    
                    @error('rent')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
    
                <div class="mb-6">
                    <label for="rentOneHouse" class="inline-block text-lg mb-2">Rent with 1 House</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="rentOneHouse"
                        placeholder="$300"
                        value="{{$property->rentOneHouse}}"
                    />
    
                    @error('rentOneHouse')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="rentTwoHouse" class="inline-block text-lg mb-2">Rent with 2 Houses</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="rentTwoHouse"
                        placeholder="$300"
                        value="{{$property->rentTwoHouse}}"
                    />
    
                    @error('rentTwoHouse')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="rentThreeHouse" class="inline-block text-lg mb-2">Rent with 3 Houses</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="rentThreeHouse"
                        placeholder="$300"
                        value="{{$property->rentThreeHouse}}"
                    />
    
                    @error('rentThreeHouse')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="rentFourHouse" class="inline-block text-lg mb-2">Rent with 4 Houses</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="rentFourHouse"
                        placeholder="$300"
                        value="{{$property->rentFourHouse}}"
                    />
    
                    @error('rentFourHouse')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="rentHotel" class="inline-block text-lg mb-2">Rent with Hotel</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="rentHotel"
                        placeholder="$300"
                        value="{{$property->rentHotel}}"
                    />
    
                    @error('rentHotel')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="mortgage" class="inline-block text-lg mb-2">Mortgage</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="mortgage"
                        placeholder="$300"
                        value="{{$property->mortgage}}"
                    />
    
                    @error('mortgage')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="houseCost" class="inline-block text-lg mb-2">House Cost</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="houseCost"
                        placeholder="$50"
                        value="{{$property->houseCost}}"
                    />
    
                    @error('houseCost')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="position" class="inline-block text-lg mb-2">Position</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="position"
                        placeholder="$50"
                        value="{{$property->position}}"
                    />
    
                    @error('position')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <button class="bg-black text-white rounded py-2 px-4 hover:bg-green">
                        Update Card
                    </button>
    
                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </div>
        <div class="relative">
            <div class="sticky top-20 flex">
                <x-property-card :property='$property' />   
                <x-property-board :property='$property' />   
            </div>
        </div>

    </div>

</x-layout>