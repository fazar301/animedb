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