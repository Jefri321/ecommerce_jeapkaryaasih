<x-app-layout>

    <div id="default-carousel" class="relative w-full rounded-2xl px-5" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/asset/slide-01.jpeg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/asset/slide-02.jpeg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/asset/slide-03.jpeg') }}"
                    alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/asset/slide-04.jpeg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-8 space-y-10">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold">Upcoming <span class="text-[#F0473B]">Events</span></h2>
                <p class="text-gray-500 text-sm">It is a long established fact that a reader will be distracted...</p>
            </div>
        <a href="#" class="px-4 py-2 text-[#F0473B] rounded-lg">lainnya</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <x-card
                image="https://images.unsplash.com/photo-1590103514226-48facf4657fe?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                date="2025-08-20" location="Jakarta Convention Center" title="Pelatihan Digital Marketing"
                price="Rp 1.200.000" link="{{ route('detail') }}" />

            <x-card
                image="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?q=80&w=1170&auto=format&fit=crop"
                date="2025-09-10" location="Hotel Santika, Bandung" title="Workshop Laravel & Tailwind"
                price="Rp 750.000" link="{{ route('detail') }}" />

            <x-card
                image="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=1170&auto=format&fit=crop"
                date="2025-10-05" location="Universitas Airlangga, Surabaya" title="Pelatihan Public Speaking"
                price="Rp 500.000" link="{{ route('detail') }}" />

            <x-card
                image="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                date="2025-11-15" location="Aston Hotel, Yogyakarta" title="Pelatihan Manajemen Proyek"
                price="Rp 1.000.000" link="{{ route('detail') }}" />
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold">Pelatihan <span class="text-[#F0473B]">ISO </span></h2>
                <p class="text-gray-500 text-sm">It is a long established fact that a reader will be distracted...</p>
            </div>
        <a href="#" class="text-[#F0473B] px-4 py-2 rounded-lg">lainnya</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <x-card image="https://images.unsplash.com/photo-1533749871411-5e21e14bcc7d?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                date="2025-08-28" location="Hotel Mulia, Jakarta"
                title="Pelatihan ISO 9001:2015 - Sistem Manajemen Mutu" price="Rp 2.500.000" link="{{ route('detail') }}" />

            <x-card
                image="https://images.unsplash.com/photo-1521791055366-0d553872125f?q=80&w=1170&auto=format&fit=crop"
                date="2025-09-18" location="Grand Mercure, Medan"
                title="Pelatihan ISO 14001:2015 - Manajemen Lingkungan" price="Rp 2.000.000" link="{{ route('detail') }}" />

            <x-card
                image="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1170&auto=format&fit=crop"
                date="2025-10-25" location="Aston Hotel, Semarang"
                title="Pelatihan ISO 45001:2018 - Kesehatan & Keselamatan Kerja" price="Rp 2.300.000"
                link="{{ route('detail') }}" />

            <x-card
                image="https://images.unsplash.com/photo-1605360846282-023d330bad8d?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                date="2025-11-30" location="Hotel Harris, Bali" title="Pelatihan ISO 27001:2022 - Keamanan Informasi"
                price="Rp 2.800.000" link="{{ route('detail') }}" />

        </div>

    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const items = document.querySelectorAll('#default-carousel [data-carousel-item]');
                let current = 0;
                const total = items.length;

                function showSlide(index) {
                    items.forEach((item, i) => {
                        item.classList.toggle('hidden', i !== index);
                    });
                }

                function nextSlide() {
                    current = (current + 1) % total;
                    showSlide(current);
                }

                // Tampilkan slide pertama
                showSlide(current);

                // Auto geser setiap 3 detik
                setInterval(nextSlide, 3000);
            });
        </script>
    @endpush
</x-app-layout>
