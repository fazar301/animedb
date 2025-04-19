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
            <x-layouts.search-form />
        </div>
    </div>
</header> 