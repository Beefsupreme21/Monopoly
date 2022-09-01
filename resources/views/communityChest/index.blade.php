<x-layout>
    <div class="flex flex-wrap">
        @foreach ($communityChestCards as $communityChestCard)
            <a href="{{ route('communityChest.show', ['communityChest' => $communityChestCard->id]) }}">
                <x-community-chest-card :communityChestCard='$communityChestCard' />   
            </a>
        @endforeach
    </div>
</x-layout>

