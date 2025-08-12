<div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
    <div class="relative">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover">
        @if ($date)
            <div class="absolute top-2 right-2 bg-white text-gray-800 rounded-lg p-2 text-center">
                <p class="text-lg font-bold">{{ \Carbon\Carbon::parse($date)->format('d') }}</p>
                <p class="text-xs">{{ \Carbon\Carbon::parse($date)->format('M Y') }}</p>
            </div>
        @endif
    </div>
    <div class="p-4">
        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-2">
            <div class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 2a10 10 0 00-10 10v8a2 2 0 002 2h4v-6h8v6h4a2 2 0 002-2v-8a10 10 0 00-10-10z" />
                </svg>
                <span>{{ $location }}</span>
            </div>
        </div>
        <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
        <div class="mt-4 flex justify-between items-center">
            <span class="text-[#2ca9d6] font-semibold">{{ $price ?? '' }}</span>
            <a href="{{ $link }}"
                class="flex items-center space-x-1 text-sm font-medium text-white bg-[#31b6e7] hover:bg-[#2ca9d6] px-3 py-2 rounded-lg transition">
                <span>Join Pelatihan</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
