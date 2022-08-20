<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-3">Add a new Chance Card</h2>
        </header>

        <form method="POST" action="/chance" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <p class="text-lg mb-1">Type of Monopoly Game</p>
                <div>
                    <div class="mb-6 flex justify-start">
                        <div>
                            <input type="radio" id="original" name="type" value="original">
                            <label for="original">Original</label><br>
                        </div>
                        <div class="ml-4">
                            <input type="radio" id="nflopoly" name="type" value="nflopoly">
                            <label for="nflopoly">NFL-Opoly</label><br>
                        </div>


                    </div>
                </div>
            </div>

            <div class="mb-6">
                <label for="message" class="inline-block text-lg mb-1">Message</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="message"
                    placeholder="Park Place"
                    value="{{old('type')}}"
                />

                @error('message')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-1">Image</label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="image"
                />

                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label for="amount" class="inline-block text-lg mb-2">Amount</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="amount"
                    placeholder="$350"
                    value="{{old('amount')}}"
                />

                @error('amount')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div>
                <p class="mb-2">Can you hold?</p>
                <div class="flex">
                    <div class="mb-6 flex-column">
                        <input type="radio" id="purple" name="canHold" value="purple">
                        <label for="purple">True</label><br>

                        <input type="radio" id="lightBlue" name="canHold" value="cyan">
                        <label for="lightBlue">False</label><br>
                    </div>
                </div>
                @error('canHold')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label for="goToProperty" class="inline-block text-lg mb-2">Go to Property</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="goToProperty"
                    placeholder="$35"
                    value="{{old('goToProperty')}}"
                />

                @error('goToProperty')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 bg-black">
                    Create Card!
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</x-layout>