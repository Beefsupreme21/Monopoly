<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"
        ><i class="fa-solid fa-arrow-left"></i> Back
    </a>

    <div class="mx-4 flex justify-center items-center" >
        <x-chance-card :chanceCard='$chanceCard' />   
    </div>

    <div class="mt-4 p-2 flex space-x-16 justify-center">
        <a href="/chance/{{$chanceCard->id}}/edit">
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
</x-layout>