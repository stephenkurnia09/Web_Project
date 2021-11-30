@extends('layouts.default')

@section('page-content')

<section class="py-20 min-h-screen flex items-center">
    <div class="max-w-screen-lg mx-auto">
        <h2 class="text-6xl text-center mb-6 text-white">Register</h2>
        <div class="mb-4">
            <label for="username" class="block text-grey-darker text-sm font-bold mb-2 text-white">Username</label>
            <input type="text" id="username" placeholder="Username" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-grey-darker text-sm font-bold mb-2 text-white">Email</label>
            <input type="text" id="email" placeholder="Email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
        </div>

        <div class="mb-6">
            <label for="password" class="block text-grey-darker text-sm font-bold mb-2 text-white">Password</label>
            <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3">
        </div>

        <div class="text-center">
            <a href="" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-red-400 transition text-white">Register</a>
        </div>

    </div>
</section>