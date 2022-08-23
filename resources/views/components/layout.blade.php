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
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <title>Monopoly</title>
    </head>

    <main>
        <body>
            <div class="bg-slate-700">
                <div class="flex justify-center">
                    <a href="/"><img src="/images/banner.png" class="object-scale-down h-46 w-96 m-auto p-6" alt=""></a>
                </div>

                <nav class="flex justify-between pb-8">
                    <div>
                        <a href="{{ route('properties.index') }}"><span class="font-bold text-lg text-white m-6 hover:underline">Properties</span></a>
                        <a href="{{ route('chance.index') }}"><span class="font-bold text-lg text-white m-6 hover:underline">Chance</span></a>
                        <a href="{{ route('communityChest.index') }}"><span class="font-bold text-lg text-white m-6 hover:underline">Community Chest</span></a>
                    </div>

                    <div class="justify-self-end">
                        <a href="{{ route('chance.create') }}"><span class="font-bold text-lg text-white m-6 hover:underline">Create new Chance Card</span></a>
                        <a href="{{ route('properties.create') }}"><span class="font-bold text-lg text-white m-6 hover:underline">Create new prop</span></a>
                        <a href="#"><span class="bg-green-500 font-bold text-lg text-white px-5 py-3 rounded-full border-black-4 m-6 hover:underline">Play Now</span></a>    
                    </div>
                </nav>
            </div>

            {{$slot}}
        
            <footer></footer>

        </body>
    </main>
</html>