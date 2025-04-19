<a href="{{ route('anime.show', $anime['_id']) }}" class="block">
    <div class="bg-white rounded-lg shadow overflow-hidden transition-all duration-200 hover:shadow-lg">
        <div class="relative aspect-[3/4] w-full">
            <img 
                src="{{ $anime['image'] ?? 'https://via.placeholder.com/225x300' }}" 
                alt="{{ $anime['title'] }}" 
                class="w-full h-full object-cover"
            >
            @if(isset($anime['ranking']))
                <div class="absolute top-2 right-2 bg-black/70 text-white px-2 py-1 rounded-md flex items-center text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    {{ number_format($anime['ranking'], 1) }}
                </div>
            @endif
        </div>
        <div class="p-4">
            <h3 class="font-semibold text-lg truncate">{{ $anime['title'] }}</h3>
            <div class="mt-2 flex flex-wrap gap-1">
                @if(isset($anime['genres']))
                    @foreach(array_slice($anime['genres'], 0, 2) as $genre)
                        <span class="px-2 py-1 text-xs bg-gray-100 text-gray-800 rounded-full">{{ $genre }}</span>
                    @endforeach
                @endif
                @if(isset($anime['type']))
                    <span class="px-2 py-1 text-xs bg-purple-100 text-purple-800 rounded-full">{{ $anime['type'] }}</span>
                @endif
            </div>
        </div>
    </div>
</a>
