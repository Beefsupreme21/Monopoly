@props(['property'])

<div class="border border-gray-200 rounded p-6">
    <div class="border-2 border-black m-auto w-[320px] h-[385px]">
        <div class="border-2 border-black bg-{{$property->color}}-600 text-center text-white m-2 p-2">
            <p>TITLE DEED</p>
            <h2>{{$property->name}}</h2>
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
</div>