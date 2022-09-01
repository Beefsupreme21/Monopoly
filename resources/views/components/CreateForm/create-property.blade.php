<form method="POST" action="/properties" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <p class="text-lg mb-1">Version of Monopoly</p>
        <div>
            <div class="flex justify-start">
                <div>
                    <input type="radio" id="original" name="version" value="original" checked="checked">
                    <label for="original">Original</label><br>
                </div>
                <div class="ml-4">
                    <input type="radio" id="nflopoly" name="version" value="nflopoly">
                    <label for="nflopoly">NFL-Opoly</label><br>
                </div>
            </div>
        </div>
        @error('version')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-1">Name</label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
            x-model="name"
            placeholder="Park Place"
            value="{{old('name')}}"
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
            x-model="cost"
            placeholder="$350"
            value=""
        />

        @error('cost')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div>
        <p class="mb-2">Choose Color</p>
        <div class="flex justify-evenly">
            <div class="mb-6 flex-column">
                <input type="radio" id="purple" name="color" value="purple">
                <label for="purple">Purple</label><br>

                <input type="radio" id="lightBlue" name="color" value="cyan">
                <label for="lightBlue">Light Blue</label><br>

                <input type="radio" id="pink" name="color" value="pink">
                <label for="pink">Pink</label><br>

                <input type="radio" id="orange" name="color" value="orange">
                <label for="orange">Orange</label><br>
            </div>

            <div class="mb-6 flex-column">
                <input type="radio" id="red" name="color" value="red">
                <label for="red">Red</label><br>

                <input type="radio" id="yellow" name="color" value="yellow">
                <label for="yellow">Yellow</label><br>

                <input type="radio" id="green" name="color" value="green">
                <label for="green">Green</label><br>

                <input type="radio" id="blue" name="color" value="blue">
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
            x-model="rent"
            placeholder="$35"
            value=""
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
            x-model="rentOneHouse"

            placeholder="$175"
            value="{{old('rentOneHouse')}}"
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
            x-model="rentTwoHouse"

            placeholder="$500"
            value="{{old('rentTwoHouse')}}"
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
            x-model="rentThreeHouse"

            placeholder="$1100"
            value="{{old('rentThreeHouse')}}"
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
            x-model="rentFourHouse"

            placeholder="$1300"
            value="{{old('rentFourHouse')}}"
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
            x-model="rentHotel"

            placeholder="$1500"
            value="{{old('rentHotel')}}"
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
            x-model="mortgage"

            placeholder="$175"
            value="{{old('mortgage')}}"
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
            x-model="houseCost"

            placeholder="$200"
            value="{{old('houseCost')}}"
        />

        @error('houseCost')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="position" class="inline-block text-lg mb-2">Position</label>

        <x-CreateForm.board-position-preview />   

        @error('position')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    
</form>