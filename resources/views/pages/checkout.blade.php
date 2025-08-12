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
            <!-- Checkout Form -->
            <div class="bg-white p-6 shadow-lg rounded-lg space-y-4">
                <h3 class="text-xl font-bold mb-4">Detail Pembeli</h3>

                <form action="#" method="POST" class="space-y-4">
                    <!-- Nama -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required placeholder="Contoh: Budi Santoso"
                            class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-[#2ca9d6] focus:border-[#2ca9d6]" />
                        <p class="text-xs text-gray-500 mt-1">Gunakan nama sesuai KTP, akan tercetak di sertifikat.</p>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required placeholder="email@example.com"
                            class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-[#2ca9d6] focus:border-[#2ca9d6]" />
                        <p class="text-xs text-gray-500 mt-1">Gunakan email aktif untuk konfirmasi pembayaran dan info
                            pelatihan.</p>
                    </div>

                    <!-- Nomor Telepon -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" required placeholder="0812xxxxxxx"
                            class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-[#2ca9d6] focus:border-[#2ca9d6]" />
                        <p class="text-xs text-gray-500 mt-1">Nomor WhatsApp aktif untuk konfirmasi & pengiriman info
                            pelatihan.</p>
                    </div>

                    <!-- Gender -->
                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <select id="gender" name="gender" required
                            class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-[#2ca9d6] focus:border-[#2ca9d6]">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                        <p class="text-xs text-gray-500 mt-1">Pilih sesuai identitas resmi.</p>
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat Pengiriman
                            Sertifikat</label>
                        <textarea id="address" name="address" rows="3" required
                            placeholder="Contoh: Jl. Merdeka No. 10, RT 02/RW 01, Bandung, 40123"
                            class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-[#2ca9d6] focus:border-[#2ca9d6]"></textarea>
                        <p class="text-xs text-gray-500 mt-1">Tuliskan alamat lengkap untuk pengiriman sertifikat.</p>
                    </div>

                    <!-- Perusahaan -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700">Perusahaan
                            (Opsional)</label>
                        <input type="text" id="company" name="company" placeholder="Contoh: PT Maju Jaya"
                            class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-[#2ca9d6] focus:border-[#2ca9d6]" />
                        <p class="text-xs text-gray-500 mt-1">Jika mendaftar melalui perusahaan, cantumkan nama
                            perusahaan di sini.</p>
                    </div>
                </form>

            </div>

        </div>
        <!-- Right Sidebar -->
        <div class="space-y-8 sticky top-0">
            <div class="bg-white p-6 shadow-lg flex flex-col justify-center">

                <h2 class="text-lg font-bold text-gray-800 mb-5">
                    Rincian Pembayaran
                </h2>

                <!-- Tanggal -->
                <div>
                    <p class="text-gray-500">Date & Time</p>
                    <p class="mt-1 font-semibold">Saturday, Sep 14, 2019 at 20:30 PM</p>
                </div>

                <!-- Harga -->
                <div class="mt-4 space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Price</span>
                        <span class="font-semibold">Rp 250.000</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Biaya Layanan</span>
                        <span class="font-semibold">Rp 10.000</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">PPN (11%)</span>
                        <span class="font-semibold">Rp 27.500</span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between text-lg font-bold text-[#2ca9d6]">
                        <span>Total Bayar</span>
                        <span>Rp 287.500</span>
                    </div>
                </div>

                <!-- Persetujuan Pembelian -->
                <div class="mt-4 flex items-start">
                    <input id="agree" type="checkbox"
                        class="mt-1 w-4 h-4 text-[#2ca9d6] border-gray-300 rounded focus:ring-[#2ca9d6]" />
                    <label for="agree" class="ml-2 text-sm text-gray-700">
                        Saya setuju dengan <a href="#" class="text-[#2ca9d6] font-semibold hover:underline">syarat
                            dan
                            ketentuan</a> pembelian.
                    </label>
                </div>

                <!-- Tombol -->
                <a href="{{ route('payment', ['id' => 1]) }}"
                    class="mt-6 px-4 py-2 bg-[#2ca9d6] text-white rounded-lg text-center hover:bg-[#238bb1] transition block">
                    Join
                </a>
            </div>
        </div>

    </section>
    </div>

    @push('scripts')
    @endpush
</x-app-layout>
