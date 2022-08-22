<x-layout>
    <div class="flex flex-wrap">
        @foreach ($chanceCards as $chanceCard)
            <a href="{{ route('chance.show', ['chance' => $chanceCard->id]) }}">
                <x-chance-card :chanceCard='$chanceCard' />   
            </a>
        @endforeach
    </div>
</x-layout>

