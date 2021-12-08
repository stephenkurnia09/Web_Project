

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPNVJ Esports</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-700"> 

    <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-5">
            <img src="https://drive.google.com/file/d/1oqkZpJEsJ8Vn1g5FcgQTpwLG-DuiVVOp/view?usp=sharing" alt="">
                <nav class="-mx-2">
                    <a href="{{ route('home') }}" class="text-lg mx-4 text-white hover:text-red-400 transition">Home</a>
                    <a href="{{ route('about') }}" class="text-lg mx-4 text-white hover:text-red-400 transition">About</a>
                    <a href="{{ route('login') }}" class="text-lg mx-4 text-white hover:text-red-400 transition">Login</a>
                </nav>
        </div>
    </header>


    <main>
        @yield('page-content')
    </main>

    <footer>
        <div class="container mx-auto p-4 text-white">
            <p>&copy: Web Kelas C | UPNVJ Esports</p>
        </div>
    </footer>
</body>
</html>