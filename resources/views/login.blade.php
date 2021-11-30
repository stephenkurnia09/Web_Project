@extends('layouts.default')

@section('page-content')

<section class="py-20 min-h-screen flex items-center">
    <div class="max-w-screen-lg mx-auto">
        <h2 class="text-6xl text-center mb-6 text-white">Login</h2>
        <div class="mb-4">
            <label for="username" class="block text-grey-darker text-sm font-bold mb-2 text-white">Username</label>
            <input type="text" id="username" placeholder="Username" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
        </div>

        <div class="mb-6">
            <label for="password" class="block text-grey-darker text-sm font-bold mb-2 text-white">Password</label>
            <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3">
        </div>

        <div class="text-center">
            <a href="" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-red-400 transition text-white">Login</a>
        </div>

        <div class="text-center text-white">
            <p class="text-gray-200 mb-3 px-2 py-3">belum punya akun?</p>
            <a class="inline-block align-baseline font-bold text-sm text-white hover:bg-red-darker" href="{{ route('register') }}">Register Now</a>
        </div>

    </div>
</section>