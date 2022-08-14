<x-layout>

    @include('partials._search')

    <div class="flex">
        <x-property-card :properties='$properties' />
    </div>
</x-layout>
