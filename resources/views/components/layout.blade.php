<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>

        <style>
            .futura {
                font-family: 'Futura Bold font';
                src: url('/public/fonts/Futura Bold font.ttf');
            }
            .board-color {
                background-color: rgb(205, 230, 208);
            }
            .dark-purple {
                background-color: #5e3577;
                color: white;            
            }
            .light-blue {
                background-color: #d2eaf5;
            }
            .purple {
                background-color: #b02f7c;
            }
            .orange {
                background-color: #fa811d;
            }
            .red {
                background-color: #f50c2b;
            }
            .yellow {
                background-color: #f5f500;
            }
            .green {
                background-color: #41994e;
            }
            .dark-blue {
                background-color: #5a6dba;
                color: white;
            }
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <title>Monopoly</title>
    </head>

    <main>
        <body>
            <div class="bg-slate-800 futura">
                <div class="flex justify-center">
                    <a href="/"><img src="/images/banner.png" class="object-scale-down h-46 w-96 m-auto p-0" alt=""></a>
                </div>

                <nav class="flex justify-between pb-4">
                    <div x-data="{dropdownMenu: false}" class="ml-4 z-10 md:hidden">

                        <button @click="dropdownMenu = ! dropdownMenu" @click.outside="dropdownMenu = false" class="flex items-center p-2 bg-slate-700 rounded-md">
                            <i class="fa fa-bars fa-2x text-slate-300"></i>
                        </button>
                
                        <div x-show="dropdownMenu" class="absolute py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl w-44">
                            <a href="{{ route('properties.index') }}"><span class="font-bold text-base block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">Properties</span></a>
                            <a href="{{ route('chance.index') }}"><span class="font-bold text-base block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">Chance</span></a>
                            <a href="{{ route('communityChest.index') }}"><span class="font-bold text-base block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">Community Chest</span></a>
                        </div>
                    </div>
                    <div class="hidden md:flex flex-row">
                        <a href="{{ route('properties.index') }}"><span class="font-bold text-xl text-white m-6 hover:underline">Properties</span></a>
                        <a href="{{ route('chance.index') }}"><span class="font-bold text-xl text-white m-6 hover:underline">Chance</span></a>
                        <a href="{{ route('communityChest.index') }}"><span class="font-bold text-xl text-white m-6 hover:underline">Community Chest</span></a>
                    </div>

                    <div class="flex flex-row my-auto md:items-end">
                        <a href="/create"><span class="bg-amber-700 hover:bg-blue-700 text-white font-bold my-2 mx-4 py-2 px-4 rounded-full hover:underline">Create new piece</span></a>
                        <a href="/board"><span class="bg-blue-500 hover:bg-blue-700 text-white font-bold mx-4 py-2 px-4 rounded-full hover:underline">Play Now!</span></a>    
                    </div>
                </nav>
            </div>

            <div class="min-h-screen">
                {{$slot}}
            </div>

        </body>

        <footer class="bg-slate-800 py-8 text-white uppercase futura">
            <div class="flex justify-evenly m-auto md:block md:w-11/12 lg:w-5/6 xl:w-3/4">
                <div class="block  md:flex md:justify-between">
                    <div class="pb-8 md:p-0 my-auto">
                        <p class="mb-2">Sign up for our newsletter</p>
                        <div class=" border-2 border-gray-500 px-3">
                            <input type="text" class="bg-slate-800 w-48 h-10 focus:outline-none" placeholder="Email Address">
                            <button><i class="fa-solid fa-chevron-right fa-2x align-middle"></i></button>
                        </div>

                    </div>
    
                    <div class="my-auto pl-16 md:pl-0">
                        <p class="mb-2 pl-3">Follow Us</p>
                        <div class="flex">
                            <a href="#" class="pr-2 fa-brands fa-twitter fa-2x hover:text-gray-500"></a>
                            <a href="#" class="pr-2 fa-brands fa-github fa-2x hover:text-gray-500"></a>
                            <a href="#" class="pr-2 fa-brands fa-facebook fa-2x hover:text-gray-500"></a>
                        </div>
                    </div>

                    <div class="hidden md:block">
                        <a href="/"><p class="hover:underline">HOME</p></a>
                        <a href="{{ route('properties.index') }}"><p class="hover:underline">Properties</p></a>
                        <a href="{{ route('chance.index') }}"><p class="hover:underline">Chance</p></a>
                        <a href="{{ route('communityChest.index') }}"><p class="hover:underline">Community Chest</p></a>
                        <a href="/create"><p class="hover:underline">Create new piece</p></a>
                        <a href="/board"><p class="hover:underline">Play Now!</p></a>
                    </div>
                </div>
    
                <div class="my-auto md:hidden">
                    <a href="/"><p class="hover:underline">HOME</p></a>
                    <a href="{{ route('properties.index') }}"><p class="hover:underline">Properties</p></a>
                    <a href="{{ route('chance.index') }}"><p class="hover:underline">Chance</p></a>
                    <a href="{{ route('communityChest.index') }}"><p class="hover:underline">Community Chest</p></a>
                    <a href="/create"><p class="hover:underline">Create new piece</p></a>
                    <a href="/board"><p class="hover:underline">Play Now!</p></a>
                </div>
            </div>
        </footer>
        <x-flash-message />

    </main>

</html>