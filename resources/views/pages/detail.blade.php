<x-app-layout>
    <!-- Hero -->
    <section class="bg-gray-50 pb-10">
        <div class="mx-auto px-4">
            <div class="relative bg-white rounded-2xl overflow-hidden">
                <div class="md:flex">
                    <!-- Image & Title -->
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1511376777868-611b54f68947?q=80&w=1200" alt="Event"
                            class="w-screen object-cover aspect-video max-h-[500px]">
                        <a href="#" class="absolute top-4 left-4 text-white">&larr; Back</a>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h2 class="text-3xl font-bold">Dream World Wide in Jakarta</h2>
                            <p class="mt-2">By Sayjal Rahman</p>
                            <p class="mt-1">Balai Kartini, Nusa Indah Theatre, Jl. Gatot Subroto No. 37, Kuningan,
                                Jakarta Selatan, Jakarta, Indonesia</p>
                            <a href="#" class="underline mt-1 block">View Map</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 pb-10">
        <!-- Left Content -->
        <div class="md:col-span-2 space-y-8">
            <!-- Description -->
            <div>
                <h3 class="text-xl font-bold mb-2">Description</h3>
                <p class="text-gray-600 leading-relaxed">
                    It is the grandiose vision of the Dream World Wide program to allow learning of the original Arabic
                    language of the Quran system to be as seamless regardless of the speaker's language of origin. We
                    want to empower as many students and teachers around the world as possible with our unprecedented
                    Quranic language curriculum and hope to create a worldwide network of students that learn from each
                    other and their instructors and remain connected indefinitely, join us today to begin your journey!
                </p>
            </div>
            <!-- Hours -->
            <div>
                <h3 class="text-xl font-bold mb-2">Hours</h3>
                <p>Weekday Hours: <span class="font-semibold">7 PM - 10 PM</span></p>
                <p>Sunday Hours: <span class="font-semibold">10 AM - 3 PM</span></p>
            </div>

            <!-- Location -->
            <div>
                <h3 class="text-xl font-bold mb-2">Event Location</h3>
                <div class="w-full rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63453.67184568862!2d106.78356511762696!3d-6.282851545496823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f17191b54b55%3A0x6cee3aa49aaf496!2sHUAWEI%20Authorized%20Service%20Center%20Jakarta%20PIM%202!5e0!3m2!1sen!2sid!4v1754929448615!5m2!1sen!2sid"
                        class="w-full h-[250px] border-0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <p class="mt-2 font-semibold">Dream World Wide in Jakarta</p>
                <p class="text-gray-600">Balai Kartini, Nusa Indah Theatre, Jl. Gatot Subroto No. 37, Kuningan, Jakarta
                    Selatan, Jakarta, Indonesia</p>
            </div>

        </div>
        <!-- Right Sidebar -->
        <div class="space-y-8 sticky top-0">
            <!-- Contact -->
            <div>
                <h3 class="text-xl font-bold mb-2">How can I contact the organizer with any question?</h3>
                <p>Please visit <a href="#" class="text-[#2ca9d6] underline">www.dreamworldwide.net</a> and refer
                    to the FAQ section for all questions and contact information.</p>
            </div>

            <!-- Booking Card -->
            <div class="bg-white p-6 shadow-lg flex flex-col justify-center">

                <div>
                    <p class="text-gray-500">Date & Time</p>
                    <p class="mt-1 font-semibold">Saturday, Sep 14, 2019 at 20:30 PM</p>
                </div>

                <!-- Harga -->
                <div class="mt-4">
                    <p class="text-gray-500 text-sm">Price</p>
                    <p class="text-2xl font-bold text-[#2ca9d6]">Rp 250.000</p>
                </div>

                <!-- Tombol -->
                <a href="{{route('checkout')}}"
                    class="mt-6 px-4 py-2 bg-[#2ca9d6] text-white rounded-lg text-center hover:bg-[#238bb1] transition">Join</a>
                <a href="#"
                    class="mt-3 px-4 py-2 border border-[#2ca9d6] text-black rounded-lg text-center hover:bg-gray-300 hover:text-gray-600 transition">Tempo</a>
            </div>


        </div>
    </section>
    </div>

</x-app-layout>
