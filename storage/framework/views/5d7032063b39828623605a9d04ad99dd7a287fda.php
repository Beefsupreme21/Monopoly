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
                <a href="/"><img src="/images/banner.png" class="object-scale-down h-46 w-96 m-auto p-6" alt=""></a>

                <nav class="flex justify-evenly items-center pb-6">
                    <a href="<?php echo e(route('properties.index')); ?>"><span class="font-bold text-lg text-white hover:underline">Properties</span></a>
                    <a href="/chance"><span class="font-bold text-lg text-white hover:underline">Chance</span></a>
                    <a href="/community-chest"><span class="font-bold text-lg text-white hover:underline">Community Chest</span></a>
                    <a href="/player-pieces"><span class="font-bold text-lg text-white hover:underline">Player Pieces</span></a>
                    <a href="/play-now"><span class="font-bold text-lg text-white hover:underline">Play Now</span></a>
                </nav>
            </div>

            <?php echo e($slot); ?>

        
            <footer></footer>

        </body>
    </main>
</html><?php /**PATH C:\xampp\Projects\Monopoly\resources\views/components/layout.blade.php ENDPATH**/ ?>