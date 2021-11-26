

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--Swiper Js-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>
<body class="bg-gray-700"> 
    <!--Script for Swiper-->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-5">
            <h1 class="text-x1 font-black text-white">Games</h1>
                <nav class="-mx-2">
                    <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Home</a>
                    <a href="{{ route('about') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">About</a>
                    <a href="{{ route('login') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Login</a>

                </nav>
        </div>
    </header>

    <main>
        @yield('page-content')
    </main>

    <!--Swiper Script-->
    <script>
        var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: "true",
            spaceBetween: 32,
            coverflowEffect: {
                rotate:0,
            },
        });
    </script>

    <footer>
        <div class="container mx-auto p-4 text-white">
            <p>&copy: Stephen | Learn to Code</p>
        </div>
    </footer>


</body>
</html>