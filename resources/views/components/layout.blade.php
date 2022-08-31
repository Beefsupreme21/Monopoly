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
        <style>
            .board-color {
            background-color: rgb(205, 230, 208);
        }
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <title>Monopoly</title>
    </head>

    <main>
        <body class="h-full m-0">
            <div class="bg-slate-700">
                <div class="flex justify-center">
                    <a href="/"><img src="/images/banner.png" class="object-scale-down h-46 w-96 m-auto p-0" alt=""></a>
                </div>

                <nav class="flex justify-between pb-4">
                    <div class="flex flex-col md:flex-row">
                        <a href="{{ route('properties.index') }}"><span class="font-bold text-lg text-white m-6 hover:underline">Properties</span></a>
                        <a href="{{ route('chance.index') }}"><span class="font-bold text-lg text-white m-6 hover:underline">Chance</span></a>
                        <a href="{{ route('communityChest.index') }}"><span class="font-bold text-lg text-white m-6 hover:underline">Community Chest</span></a>
                    </div>

                    <div class="flex flex-col justify-around md:flex-row items-end">
                        <a href="/create"><span class="bg-amber-700 hover:bg-blue-700 text-white font-bold my-2 mx-4 py-2 px-4 rounded-full hover:underline">Create new piece</span></a>
                        <a href="/board"><span class="bg-blue-500 hover:bg-blue-700 self-end text-white font-bold mx-4 py-2 px-4 rounded-full hover:underline">Play Now!</span></a>    
                    </div>
                </nav>
            </div>

            {{$slot}}
        
        </body>



    </main>
    <footer class="bg-slate-700 mt-24 p-16">
        <h1 class="text-2xl md:text-4xl text-white">Footer</h1>
    </footer>
</html>