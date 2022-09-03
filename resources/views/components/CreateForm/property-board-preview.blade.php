<div class="mt-12 border-2 border-black w-[160px] h-[260px] relative board-color mx-auto">
    <div x-bind:class="{ 'dark-blue': darkBlue, 'yellow': yellow, 'red': red, 'light-blue': lightBlue, 'dark-purple': darkPurple, 'purple': purple, 'orange': orange, 'green': green }"
    class="border-b-2 border-black text-center text-white h-[45px]"></div>
    <div class="flex-col justify-between text-center items-center">
        <div class="pt-4">
            <span x-text="name"></span>
        </div>
        <div class="absolute bottom-4 left-0 right-0 text-center">
            <div>PRICE <s>M </s><span x-text="cost"></span></div>
        </div>
    </div>
</div>