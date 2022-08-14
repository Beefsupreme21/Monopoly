@props(['properties'])

@foreach ($properties as $property)
    <div class="bg-blue-150 border border-gray-200 rounded p-6">
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
@endforeach
