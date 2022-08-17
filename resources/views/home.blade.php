<x-layout>

    @include('partials._search')

    <div>
        <x-property-card :properties='$properties' />
    </div>
</x-layout>
