<x-layout>

    @include('partials.property-search')

    <div class="flex flex-wrap">
        @foreach ($properties as $property)
            <x-property-card :property='$property' />   
        @endforeach
    </div>
</x-layout>
