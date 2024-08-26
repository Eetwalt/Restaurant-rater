<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Restaurant Rater') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased text-white bg-background">
        <div class="flex flex-col min-h-screen">
            <nav class="py-4">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between px-3 py-2 border border-gray-600 shadow-md bg-surface rounded-xl">
                        <div class="flex items-center">
                            <h1>Restaurant Rater</h1>
                        </div>
                        <div class="flex items-center space-x-4">
                            <a href="#" class="text-sm hover:text-gray-300">Features</a>
                            <a href="#" class="text-sm hover:text-gray-300">Method</a>
                            <a href="#" class="text-sm hover:text-gray-300">Customers</a>
                            <a href="#" class="text-sm hover:text-gray-300">Pricing</a>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm hover:text-gray-300">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm hover:text-gray-300">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium text-black bg-white rounded-md hover:bg-gray-200">Sign up</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>

            <main class="flex-grow">
                <div class="px-4 py-20 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="mb-6 text-5xl font-bold leading-tight">Restaurant Rater is a purpose-built tool for<br>discovering and rating restaurants</h2>
                        <p class="mb-8 text-xl text-gray-400">Meet the system for modern dining experiences.<br>Streamline reviews, ratings, and restaurant discoveries.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('register') }}" class="px-6 py-3 text-lg font-medium text-black bg-white rounded-md hover:bg-gray-200">
                                Start rating
                            </a>
                            <a href="#" class="px-6 py-3 text-lg font-medium border border-gray-600 rounded-md hover:border-gray-400">
                                Introducing features →
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="mt-20">
                    <img src="{{ asset('images/app-screenshot.png') }}" alt="Restaurant Rater App Screenshot" class="w-full max-w-5xl mx-auto rounded-lg shadow-2xl">
                </div> --}}
            </main>

            <footer class="py-8 mt-20 border-t border-gray-800">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <p class="text-center text-gray-400">&copy; {{ date('Y') }} Restaurant Rater. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
