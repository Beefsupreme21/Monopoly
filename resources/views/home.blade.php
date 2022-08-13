<x-layout>

<x-card class="mt-4 p-2 grid space-x-6">
    @foreach ($properties as $property)
        <h2 class="mt-4"><strong>{{$property->name}}</strong></h2>
        <p>Cost: ${{$property->cost}}</p>
        <p>Rent: ${{$property->rent}}</p>
        <p>Rent Color Set: ${{$property->rentColorSet}}</p>
        <p>Rent 1 House: ${{$property->rentOneHouse}}</p>
        <p>Rent 2 House: ${{$property->rentTwoHouse}}</p>
        <p>Rent 3 House: ${{$property->rentThreeHouse}}</p>
        <p>Rent 4 House: ${{$property->rentFourHouse}}</p>
        <p>Rent 1 Hotel: ${{$property->rentHotel}}</p>
        <p>Mortgage: ${{$property->mortgage}}</p>
    @endforeach
</x-card>

</x-layout>
