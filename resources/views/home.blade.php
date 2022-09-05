<x-layout>

    <style>
        .blue {
            background-color:blue;
        }
    </style>

    <div class="justify-center w-full flex flex-col md:p-12 lg:space-x-12 lg:flex-row lg:p-20">
        <main>
            <img class="lg:h-[800px]min-w-[800px]" src="{{asset('images/monopoly-board.jpg')}}">
        </main>
        <aside class="bg-white p-6 mt-6 lg:mt-0">
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

    <x-CreateForm.create-property />   

</x-layout>
