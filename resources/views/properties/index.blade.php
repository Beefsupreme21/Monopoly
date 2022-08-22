<x-layout>
    @include('partials.property-search')

    <div class="flex flex-wrap">
        @foreach ($properties as $property)
            <a href="{{ route('properties.show', ['property' => $property->id]) }}">
                <x-property-card :property='$property' />   
            </a>
        @endforeach
    </div>
</x-layout>
