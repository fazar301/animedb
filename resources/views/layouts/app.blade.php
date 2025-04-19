<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeDB - @yield('title', 'Tempat untuk menemukan anime favoritmu')</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- You can also add custom Tailwind configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6D28D9', // purple-700
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gray-100">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <h1 class="text-3xl font-bold text-purple-800">AnimeDB</h1>
                <nav class="mt-4 md:mt-0">
                    <ul class="flex space-x-6">
                        <li>
                            <a href="{{ route('home') }}" class="@if(request()->routeIs('home')) text-purple-600 @else text-gray-600 @endif hover:text-purple-800 font-medium">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('top-anime') }}" class="@if(request()->routeIs('top-anime')) text-purple-600 @else text-gray-600 @endif hover:text-purple-800 font-medium">
                                Top Anime
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('genres') }}" class="@if(request()->routeIs('genres')) text-purple-600 @else text-gray-600 @endif hover:text-purple-800 font-medium">
                                Genres
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="mt-6">
                <form action="{{ route('search') }}" method="GET" class="flex w-full max-w-lg mx-auto">
                    <input 
                        type="text" 
                        name="query" 
                        placeholder="Search for anime..." 
                        value="{{ request('query') }}"
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                    >
                    <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-r-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8">
        
            <div class="text-center text-gray-400">
                <p>Created by <a href="https://github.com/fazar301" class="text-purple-400 hover:text-purple-300" target="_blank">Fazar Adi Putra</a></p>
            </div>
        
    </footer>
</body>
</html>
