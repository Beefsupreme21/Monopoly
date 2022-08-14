<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>

    <div class="flex flex-col items-center justify-center text-center">
        <a href="/{{$property->id}}"><h2 class="mb-2"><strong>{{$property->name}}</strong></h2></a>
        <p>Cost: ${{$property->cost}}</p>
        <p>Rent: ${{$property->rent}}</p>
        <p>Rent Color Set: ${{$property->rentColorSet}}</p>
        <p>Rent 1 House: ${{$property->rentOneHouse}}</p>
        <p>Rent 2 House: ${{$property->rentTwoHouse}}</p>
        <p>Rent 3 House: ${{$property->rentThreeHouse}}</p>
        <p>Rent 4 House: ${{$property->rentFourHouse}}</p>
        <p>Rent Hotel: ${{$property->rentHotel}}</p>
        <p>Mortgage: ${{$property->mortgage}}</p>
    </div>

    <div class="mx-4">
        <div class="flex flex-col items-center justify-center text-center">
            <h3 class="text-2xl mb-2">{{$property->name}}</h3>
            <div class="text-xl font-bold mb-4">{{$property->color}}</div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Job Description
                </h3>
                <div class="text-lg space-y-6">
                    Description
                </div>
            </div>
        </div>

        <div class="mt-4 p-2 flex space-x-6">
            <a href="#">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="#">
                @csrf
                @method('DELETE')
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </form>
        </div>

    </div>
</x-layout>