<x-layout>
    <div class="flex flex-wrap">
        @foreach ($chanceCards as $chanceCard)
            <x-chance-card :chanceCard='$chanceCard' />   
        @endforeach
    </div>
</x-layout>

