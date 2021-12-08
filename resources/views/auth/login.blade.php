@extends('layouts.default')

@section('page-content')

<section class="py-20 min-h-screen flex items-center">
    <div class="max-w-screen-lg mx-auto">
    <h2 class="text-6xl text-center mb-6 text-white">Login</h2>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-dark shadow-md overflow-hidden sm:rounded-lg">
                    <x-slot name="logo">
                    </x-slot>

                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-jet-label for="email" class="text-white" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" class="text-white" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-jet-button class="ml-4">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </form>
        </div>

        <p class="mb-6 px-4 py-6 text-white">Don't have an account?<a href="{{ route('register') }}" class="ml-4 text-sm text-white dark:text-gray-500 underline">Register Now</a></p>
    </div>
</section>