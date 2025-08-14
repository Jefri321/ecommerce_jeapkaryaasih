<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Detail Pesanan</h1>
                <p class="text-gray-600">Ringkasan lengkap transaksi pelatihan Anda</p>
            </div>
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6dcb8c82-d5ac-4a3e-9560-321daef8c2f3.png"
                alt="Logo perusahaan pelatihan dengan teks 'EduPro' dalam warna biru" class="h-10">
        </div>

        <!-- Countdown Payment -->
        <div class="text-center mb-5">
            <p class="text-sm text-gray-500 font-semibold">Batas Waktu Pembayaran</p>
            <p id="countdown" class="font-bold text-red-500 text-2xl"></p>
        </div>

        <!-- Order Summary Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">




            <!-- Card Header -->
            <div class="bg-[#2ca9d6] px-6 py-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <i class="fas fa-file-invoice text-white mr-2"></i>
                        <h2 class="text-xl font-semibold text-white">Ringkasan Pesanan</h2>
                    </div>
                </div>
            </div>

            <!-- Card Content -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Order Details -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Informasi Pesanan</h3>
                        <div>
                            <p class="text-sm text-gray-500">Nomor Pesanan</p>
                            <p class="font-medium">ORD-2023-0875</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Tanggal Pembelian</p>
                            <p class="font-medium">15 November 2023 • 10:45 WIB</p>
                        </div>
                        <!-- Virtual Account -->
                        <div>
                            <p class="text-sm text-gray-500">Virtual Account</p>
                            <div class="flex items-center">
                                <span id="virtual-id" class="font-bold text-lg tracking-widest">8808123456789012</span>
                                <button onclick="copyVirtualID()"
                                    class="ml-2 px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300 transition">
                                    Salin
                                </button>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Metode Pembayaran</p>
                            <div class="flex items-center">
                                <img src="{{ asset('images/icon/hpp-doku-bni-va.svg') }}" alt="BNI"
                                    class="w-16 h-16 mr-4">

                                <p class="font-medium">Transfer Bank (BCA)</p>
                            </div>
                        </div>
                    </div>

                    <!-- User Details -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Informasi Pembeli</h3>
                        <div>
                            <p class="text-sm text-gray-500">Nama Lengkap</p>
                            <p class="font-medium">Muhammad Rizky</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-medium">rizky@gmail.com</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Nomor Telepon</p>
                            <p class="font-medium">081234567890</p>
                        </div>
                    </div>

                    <!-- Payment Summary -->
                    <div class="space-y-4 bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Ringkasan Pembayaran</h3>
                        <div class="flex justify-between">
                            <p class="text-gray-600">Subtotal</p>
                            <p class="font-medium">Rp 1.200.000</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-gray-600">Diskon</p>
                            <p class="font-medium text-green-600">-Rp 200.000</p>
                        </div>
                        <div class="flex justify-between border-t pt-2">
                            <p class="text-gray-600">Total Pembayaran</p>
                            <p class="font-bold text-lg text-[#2ca9d6]">Rp 1.000.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Training Details -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
            <!-- Card Header -->
            <div class="bg-gray-100 px-6 py-4">
                <h2 class="text-xl font-semibold text-gray-800">Detail Pelatihan</h2>
            </div>

            <!-- Card Content -->
            <div class="p-6">
                <div class="border-b pb-4 mb-4">
                    <div class="flex justify-between items-start">
                        <div class="flex items-center">
                            <div class="w-20 h-20 bg-gray-200 rounded-lg overflow-hidden mr-4">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/13e44b88-69e3-4424-b235-771773330748.png"
                                    alt="Ilustrasi course digital marketing dengan ikon grafik pertumbuhan"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Digital Marketing Masterclass</h3>
                                <p class="text-gray-600 text-sm">Kelas Online • Beginner to Advanced</p>
                                <div class="flex items-center mt-1">
                                    <div class="flex items-center text-yellow-400 mr-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <span class="font-bold text-[#2ca9d6]">Rp 1.000.000</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-semibold mb-2">Deskripsi Pelatihan</h3>
                        <p class="text-gray-700">Pelatihan intensif selama 6 minggu yang akan mengajarkan Anda strategi
                            digital marketing terbaru mulai dari SEO, iklan berbayar, social media marketing, hingga
                            analitik. Dilengkapi dengan studi kasus nyata dan sertifikasi penyelesaian.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Detail Akses</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-calendar-alt text-blue-500 mr-2"></i>
                                <span>Mulai: 20 November 2023</span>
                            </li>

                            <li class="flex items-center">
                                <i class="fas fa-chalkboard-teacher text-blue-500 mr-2"></i>
                                <span>Metode: Live Session & Video Tutorial</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Atur waktu batas pembayaran (contoh: 24 jam dari sekarang)
                let deadline = new Date();
                deadline.setHours(deadline.getHours() + 24);

                function updateCountdown() {
                    let now = new Date().getTime();
                    let distance = deadline - now;

                    if (distance <= 0) {
                        document.getElementById("countdown").innerHTML = "Waktu pembayaran habis";
                        return;
                    }

                    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById("countdown").innerHTML =
                        hours.toString().padStart(2, '0') + ":" +
                        minutes.toString().padStart(2, '0') + ":" +
                        seconds.toString().padStart(2, '0');
                }

                // Update setiap detik
                updateCountdown();
                setInterval(updateCountdown, 1000);
            });
        </script>
    @endpush
</x-app-layout>
