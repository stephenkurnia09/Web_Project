@extends('layouts.default')

@section('page-content')

<section class="py-20 min-h-screen flex items-center">
    <div class="max-w-screen-lg mx-auto">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-dark shadow-md overflow-hidden sm:rounded-lg">
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>

                <div class="mb-4 text-sm text-white">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="block">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button>
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>
                    </div>
                </form>
    </div>
</section>