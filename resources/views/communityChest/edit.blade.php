<x-layout>
    <div class="flex p-10 w-2/3 m-auto">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg m-auto">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Edit Chance Card</h2>
            </header>
    
            <form method="POST" action="/communityChest/{{$communityChestCards->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <p class="text-lg mb-1">Version of Monopoly</p>
                    <div>
                        <div class="mb-6 flex justify-start">
                            <div>
                                <input 
                                    type="radio" 
                                    id="original" 
                                    name="version" 
                                    value="original" 
                                    checked="checked">

                                <label for="original">Original</label><br>
                            </div>

                            <div class="ml-4">
                                <input 
                                    type="radio" 
                                    id="nflopoly" 
                                    name="version" 
                                    value="nflopoly">
                                    
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
                        value="{{$communityChestCards->amount}}"
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
                        value="{{$communityChestCards->goToProperty}}"
                    />
    
                    @error('goToProperty')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <button class="text-white rounded py-2 px-4 bg-black">
                        Create Card!
                    </button>
    
                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </div>

        <div class="m-auto">
            <div class="m-auto">
                <img src="{{asset('storage/' . $communityChestCards->image)}}" alt="">
            </div>
        </div>
    </div>
</x-layout>