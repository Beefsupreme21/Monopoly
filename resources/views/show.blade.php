<x-layout>

    <style>
        .test {
            background-color: rgb(205, 230, 208);
        }
    </style>

    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>

    <div class="mx-4 flex justify-center items-center" >
        <div class="border-2 border-black w-[320px] h-[385px]">
            <div class="border-2 border-black bg-{{$property->color}}-600 text-center text-white m-2 p-2">
                <p>TITLE DEED</p>
                <h1 class="uppercase text-lg">{{$property->name}}</h1>
            </div>
            <div class="m-2">
                <div class="text-center">
                    <p>Rent ${{$property->rent}}.</p>
                </div>
                <div class="flex justify-between px-3">
                    <p>With 1 House</p>
                    <p>${{$property->rentOneHouse}}.</p>
                </div>
                <div class="flex justify-between px-3">
                    <p>With 2 Houses</p>
                    <p>${{$property->rentTwoHouse}}.</p>
                </div>
                <div class="flex justify-between px-3">
                    <p>With 3 Houses</p>
                    <p>${{$property->rentThreeHouse}}.</p>
                </div>
                <div class="flex justify-between px-3">
                    <p>With 4 Houses</p>
                    <p>${{$property->rentFourHouse}}.</p>
                </div>
                <div class="text-center px-3">
                    <p>With HOTEL ${{$property->rentHotel}}.</p>
                </div>
                <div class="text-center px-3 pt-3">
                    <p>Mortgage Value ${{$property->mortgage}}.</p>
                </div>
                <div class="text-center px-3">
                    <p>Houses cost ${{$property->rentFourHouse}}. each</p>
                </div>
                <div class="text-center px-3">
                    <p>Hotels, ${{$property->rentFourHouse}}. plus 4 houses</p>
                </div>
                <div class="text-center p-3 text-xs">
                    <p>If a player owns ALL the lots of any Color-Group the rent is Doubled on Unimproved Lots in that group. </p>
                    <p>&copy Hasbro, Inc.</p>
                </div>
            </div>

        </div>
        <div class="ml-24 border-2 border-black w-[160px] h-[260px] test relative ">
            <div class="border-b-2 border-black bg-{{$property->color}}-600 text-center text-white h-[45px]"></div>
            <div class="flex-col justify-between text-center items-center">
                <div class="pt-4">
                    <div>{{$property->name}}</div>
                </div>
                <div class="absolute bottom-4 left-0 right-0 text-center">
                    <div>PRICE <s>M</s>{{$property->cost}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 p-2 flex space-x-16 justify-center">
        <a href="/{{$property->id}}/edit">
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