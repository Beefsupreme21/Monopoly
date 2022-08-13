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
            <img src="/images/banner.png" class="object-scale-down h-48 w-96 m-auto" alt="">
            <nav class="flex justify-evenly items-center mb-4">
                <a href="/"
                    ><img class="w-24" src="<?php echo e(asset('images/logo.png')); ?>" alt="" class="logo"
                /><h1>Monopoly Properties</h1></a>
                <ul class="flex space-x-6 mr-6 text-lg">
                    <li>
                        <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                    </li>
                    <li>
                        <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                    </li>
                </ul>
            </nav>



    
            <?php echo e($slot); ?>

        
            <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
            >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
        
            <a
                href="/listings/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post Job</a
            >
            </footer>

        </body>
    </main>
</html><?php /**PATH C:\xampp\Projects\Monopoly\resources\views/components/layout.blade.php ENDPATH**/ ?>