<form method="POST" action="/chance" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <p class="text-lg mb-1">Version of Monopoly</p>
        <div>
            <div class="mb-6 flex justify-start">
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
        <label for="amount" class="inline-block text-lg mb-2">Amount - or +</label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="amount"
            placeholder="$50 or -$75"
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
                <input type="radio" id="canHold" name="canHold" value="true">
                <label for="canHold">True</label><br>

                <input type="radio" id="cantHold" name="canHold" value="false" checked="checked">
                <label for="cantHold">False</label><br>
            </div>
        </div>
        @error('canHold')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="goToProperty" class="inline-block text-lg mb-2">Does this card bring you to a property?</label>
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
</form>