<div class="border border-gray-200 rounded p-6">
    <div class="border-2 border-black w-[320px] h-[400px]">
        <div x-bind:class="{ 'dark-blue': darkBlue, 'yellow': yellow, 'red': red, 'light-blue': lightBlue, 'dark-purple': darkPurple, 'purple': purple, 'orange': orange, 'green': green }" 
        class="border-2 border-black text-center m-2 p-1 font-bold">
            <p>TITLE DEED</p>
            <span class="text-lg uppercase" x-text="name"></span>
        </div>
        <div class="m-2">
            <div class="text-center">
                <p>Rent $<span x-text="rent"></span></p>
            </div>
            <div class="flex justify-between px-3">
                <p>With 1 House</p>
                <p>$<span x-text="rentOneHouse"></span>.</p>
            </div>
            <div class="flex justify-between px-3">
                <p>With 2 Houses</p>
                <p>$<span x-text="rentTwoHouse"></span>.</p>
            </div>
            <div class="flex justify-between px-3">
                <p>With 3 Houses</p>
                <p>$<span x-text="rentThreeHouse"></span>.</p>
            </div>
            <div class="flex justify-between px-3">
                <p>With 4 Houses</p>
                <p>$<span x-text="rentFourHouse"></span>.</p>
            </div>
            <div class="text-center px-3">
                <p>With HOTEL $<span x-text="rentHotel"></span>.</p>
            </div>
            <div class="text-center px-3 pt-3">
                <p>Mortgage Value $<span x-text="mortgage"></span>.</p>
            </div>
            <div class="text-center px-3">
                <p>Houses cost $<span x-text="houseCost"></span> each</p>
            </div>
            <div class="text-center px-3">
                <p>Hotels, $<span x-text="houseCost">. plus 4 houses</p>
            </div>
            <div class="text-center p-3 text-xs">
                <p>If a player owns ALL the lots of any Color-Group the rent is Doubled on Unimproved Lots in that group. </p>
                <p>&copy Hasbro, Inc.</p>
            </div>
        </div>
    </div>
</div>