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
                <a href="/"><img src="/images/banner.png" class="object-scale-down h-52 w-104 m-auto " alt=""></a>
                
                <nav class="flex justify-evenly items-center pb-6">
                    <a href="/"><h1 class="font-bold text-lg text-white hover:underline">Monopoly Properties</h1></a>
                    <a href="/"><h1 class="font-bold text-lg text-white hover:underline">Chance/Community Chest</h1></a>
                    <a href="/"><h1 class="font-bold text-lg text-white hover:underline">Player Pieces</h1></a>
                </nav>
            </div>


            {{$slot}}
        
            <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">        
                <a href="/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Create Card</a>
            </footer>

        </body>
    </main>
</html>