<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="bg-gray-800 text-white">
            <div class="container mx-auto flex justify-between items-center py-4">
                <div class="flex space-x-4">
                    <a href="{{ url('/') }}" class="hover:text-gray-300">
                        CHAT-GPT
                    </a>
                    <!-- Add more menu items as needed -->
                </div>
                @guest
                    <div class="flex space-x-4">
                        <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a>
                        <a href="{{ route('register') }}" class="hover:text-gray-300">Sign Up</a>
                    </div>
                @else
                    <div class="flex space-x-4">
                        {{-- <a href="{{ route('login') }}" class="hover:text-gray-300">My Profile</a> --}}
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                            class="hover:text-gray-300">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
