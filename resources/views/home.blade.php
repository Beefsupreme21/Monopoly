<x-layout>

    <style>
        .blue {
            background-color:blue;
        }
    </style>

    <div class="bg-gray-300 justify-center w-full flex flex-col lg:space-x-12 lg:flex-row p-24">
        <main>
            <img class="md:h-[600px] lg:h-[800px]w-[800px]" src="{{asset('images/monopoly-board.jpg')}}">
        </main>
        <aside class="bg-white p-12">
            <h1 class="text-2xl pb-6 md:text-4xl">Create your own monopoly pieces</h1>
            <div>
                <p>This is a website to help create new monopoly pieces</p>
                <ul>
                    <li>
                        <p>Create new Properties</p>
                        <p>Create new Chance Cards</p>
                        <p>Create new Community Chest Cards</p>
                    </li>
                </ul>
            </div>
        </aside>
    </div>


    <div x-data="{ darkBlue: true, yellow: false, red: false, lightBlue: false, darkPurple: false, purple: false, purple: false, orange: false, green: false }"> 

        <button x-on:click="darkBlue = true, yellow = false, red = false, lightBlue = false, darkPurple = false, purple = false, orange = false, green = false">Blue</button>
        
        <button x-on:click="darkBlue = false, yellow = true, red = false, lightBlue = false, darkPurple = false, purple = false, orange = false, green = false">yellow</button>
        
        <button x-on:click="darkBlue = false, yellow = false, red = true, lightBlue = false, darkPurple = false, purple = false, orange = false, green = false">Red</button>

        <button x-on:click="darkBlue = false, yellow = false, red = false, lightBlue = true, darkPurple = false, purple = false, orange = false, green = false">Cyan</button>

        <button x-on:click="darkBlue = false, yellow = false, red = false, lightBlue = false, darkPurple = true, purple = false, orange = false, green = false">Purple</button>

        <button x-on:click="darkBlue = false, yellow = false, red = false, lightBlue = false, darkPurple = false, purple = true, orange = false, green = false">Purple</button>

        <button x-on:click="darkBlue = false, yellow = false, red = false, lightBlue = false, darkPurple = false, purple = false, orange = true, green = false">Orange</button>

        <button x-on:click="darkBlue = false, yellow = false, red = false, lightBlue = false, darkPurple = false, purple = false, orange = false, green = true">Green</button>

        <div x-bind:class="{ 'dark-blue': darkBlue, 'yellow': yellow, 'red': red, 'light-blue': lightBlue, 'dark-purple': darkPurple, 'purple': purple, 'orange': orange, 'green': green }">@class</div> 

    </div>


</x-layout>
