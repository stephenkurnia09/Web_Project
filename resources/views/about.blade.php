@extends('layouts.default')

@section('page-content')
    <section class="py-20 min-h-screen flex items-center text-white">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">Apa itu UPNVJ Esports?</h3>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora distinctio dolor fugiat, quis laborum, nisi veniam impedit animi atque possimus laboriosam nesciunt similique repellat illo excepturi eveniet facilis nobis odit!

            </p>

            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque laboriosam, officia distinctio assumenda possimus repellendus eligendi. Vitae totam saepe ea facilis et dicta veniam repellat natus, fugit, facere alias ipsam?
            </p>
            <div class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum facilis neque veritatis atque sed modi nemo! Nam necessitatibus cum ea illum esse nemo saepe reprehenderit itaque quibusdam consequatur, rerum vitae.

            </div>
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-red-400 transition">Back to Home</a>
            </div>
        </div>
    </section>
@endsection