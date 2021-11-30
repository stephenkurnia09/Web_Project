@extends('layouts.default')

@section('page-content')
    Home page
    <div class="w-full h-full bg-no-repeat bg-cover"
        style="background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl text-white">Push Your <span class="text-pink-500">Limits</span></h2>
            <h3 class="text-2xl sm:text-4xl italic text-white">With UPNVJ Esports</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center text-white">Scroll to learn more</p>
        </div>
    </section>
    </div>

    <section class="py-20 text-white">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3">Description</h4>
            <p class="mb-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque architecto, quidem perferendis maxime rerum, totam qui illum nemo quae animi asperiores pariatur quaerat. Culpa totam veniam sunt. Tempora, ratione amet.

            </p>
            <a href="{{ route('about') }}" class="bg-pink-500 text-center px-8 py-4 rounded hover:bg-red-400 transition">Learn More</a>
        </div>
    </section>

    <section class="py-20 text-white">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Description</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-3">Game Award</h3>

                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic voluptas dolores labore sed officia ut quaerat doloremque cumque totam. Harum laudantium exercitationem magni suscipit repudiandae possimus odio eos. Minima, aperiam.

                        </p>
                        <a href="{{ url('https://youtube.com/MuddyWolf') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-red-400 transition">Learn Now!</a>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-3">Coding Award</h3>

                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic voluptas dolores labore sed officia ut quaerat doloremque cumque totam. Harum laudantium exercitationem magni suscipit repudiandae possimus odio eos. Minima, aperiam.

                        </p>
                        <a href="{{ url('') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-red-400 transition">Learn Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section Swiper JS-->
    <section class="py-20 text-white">
        <div class="max-w-screen-md mx-auto">
        <h3 class="text-4xl font-bold mb-8">Play Esports Games</h3>
            <div class="flex flex-wrap -mx-2">
                    <!--Bagian 1-->
                    <div class="mb-3 px-2">
                        <div class="w-full sm:w-60 w-48 relative overflow-hidden rounded-lg shadow-lg">
                            <img class="opacity-80"src="https://images7.alphacoders.com/115/1157084.png" alt="">
                            <div class="absolute bottom-6 left-1 text-white">
                                <h2 class="-mb-1">Fifa 22</h2>
                                <span class="-mb-6 px-3 block text-sm">Football games</span>
                            </div>
                        </div>
                    </div>

                    <!--Bagian 2-->
                    <div class="mb-3 px-2 ">
                        <div class="w-full sm:w-60 w-48 relative overflow-hidden rounded-lg shadow-lg">
                            <img class="opacity-80" src="https://wallpaperaccess.com/full/1512126.jpg" alt="">
                            <div class="absolute bottom-6 left-1 text-white">
                                <h2 class="-mb-1">Resident Evil 2</h2>
                                <span class="-mb-6 px-3 block text-sm">Horror games</span>
                            </div>
                        </div>
                    </div>
                    
                    <!--Bagian 3 -->
                    <div class="mb-3 px-2">
                        <div class="w-full sm:w-60 w-48 relative overflow-hidden rounded-lg shadow-lg ">
                            <img class="opacity-80" src="https://wallpaperaccess.com/full/2376039.jpg" alt="">
                            <div class="absolute bottom-6 left-1 text-white">
                                <h2 class="-mb-1">Unravel 2</h2>
                                <span class="-mb-6 px-3 block text-sm">Casual Games</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="py-20 text-white">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold-mb-6">Where to Join?</h3>
            <h3 class="text-xl mb-6">Learn to code on Youtube with one of my channels!</h3>

            <div class="-mx-2 sm:flex">
                <a href="{{ url('https://youtube.com/TylerPotts') }}" target="_blank" rel="noopener noreferrer" 
                class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-red-400 transition mx-2 mb-3 sm:mb-0">
                    <span class="mr-2">❤️</span> Learn <strong>Web</strong> Development</a>
                    
                    <a href="{{ url('https://youtube.com/MuddyWolf') }}" target="_blank" rel="noopener noreferrer" 
                class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-red-400 transition mx-2 mb-3 sm:mb-0">
                    <span class="mr-2">🎮</span> Learn <strong>Game</strong> Development</a>
            </div>
        </div>
    </section>
@endsection