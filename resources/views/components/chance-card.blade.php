@props(['chanceCard'])

<a href="#">
    <div class="border border-gray-200 rounded p-6">
        <div class="border-2 border-black">
            <img src="{{asset('storage/' . $chanceCard->image)}}" alt="">
        </div>
    </div>
</a>

