<x-app-layout>
    {{-- <div class="bg-white p-6 shadow-lg rounded-lg space-y-6 max-w-xl mx-auto mt-10">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-lg font-bold text-gray-800">Pilih Metode Pembayaran</h2>
                <p class="text-sm text-gray-500">Pilih salah satu metode pembayaran di bawah ini.</p>
            </div>
            <!-- Countdown -->
            <div class="text-red-500 font-bold text-lg" id="countdown">05:00</div>
        </div>

        <!-- Bank Transfer -->
        <div class="mb-6">
            <h3 class="text-sm font-semibold text-gray-600 mb-3">Bank Transfer</h3>
            <div class="grid grid-cols-4 gap-4">
                <button class="flex items-center justify-center border rounded-lg hover:border-blue-500 transition">
                    <img src="{{ asset('images/icon/hpp-doku-bni-va.svg') }}" alt="BNI" class="w-16 h-16">
                </button>
                <button class="flex items-center justify-center border rounded-lg hover:border-blue-500 transition">
                    <img src="{{ asset('images/icon/hpp-doku-bri-va.svg') }}" alt="BRI" class="w-16 h-16">
                </button>
                <button class="flex items-center justify-center border rounded-lg hover:border-blue-500 transition">
                    <img src="{{ asset('images/icon/hpp-doku-cimb-va.svg') }}" alt="CIMB" class="w-16 h-16">
                </button>
                <button class="flex items-center justify-center border rounded-lg hover:border-blue-500 transition">
                    <img src="{{ asset('images/icon/hpp-doku-mandiri-va.svg') }}" alt="Mandiri" class="w-16 h-16">
                </button>
            </div>
        </div>

        <!-- Gerai Retail -->
        <div class="mb-6">
            <h3 class="text-sm font-semibold text-gray-600 mb-3">Gerai Retail</h3>
            <div class="grid grid-cols-4 gap-4 items-center text-center">
                <button class="border rounded-lg p-3 hover:border-[#2ca9d6] hover:shadow transition">
                    <img src="{{ asset('images/icon/hpp-doku-alfamart.svg') }}" alt="Alfamart"
                        class="w-16 h-16 mx-auto">
                </button>
                <button class="border rounded-lg p-3 hover:border-[#2ca9d6] hover:shadow transition">
                    <img src="{{ asset('images/icon/hpp-doku-indomaret.svg') }}" alt="Indomaret"
                        class="w-16 h-16 mx-auto">
                </button>
            </div>
        </div>

        <!-- E-Wallet -->
        <div>
            <h3 class="text-sm font-semibold text-gray-600 mb-3">E-Wallet</h3>
            <div class="grid grid-cols-4 gap-4">
                <button class="border rounded-lg p-3 hover:border-[#2ca9d6] hover:shadow transition">
                    <img src="{{ asset('images/icon/hpp-doku-ovo.svg') }}" alt="OVO" class="h-12 mx-auto">
                </button>
                <button class="border rounded-lg p-3 hover:border-[#2ca9d6] hover:shadow transition">
                    <img src="{{ asset('images/icon/hpp-doku-wallet.svg') }}" alt="DOKU Wallet" class="h-12 mx-auto">
                </button>
            </div>
        </div>
    </div> --}}

    @push('scripts')
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

        @if (isset($snapToken) && $snapToken)
            <script>
                window.onload = function() {
                    snap.pay('{{ $snapToken }}', {
                    onSuccess: r => window.location.href = '/payment/success',
                        onPending: r => window.location.href = '/payment/pending',
                        onError: r => window.location.href = '/payment/failed',
                        onClose: () => {
                            window.location.href = '/';
                        }
                    });
                };
            </script>
        @else
            <script>
                console.warn('snapToken tidak tersedia. Pastikan controller mengirim $snapToken ke view.');
            </script>
        @endif
    @endpush

</x-app-layout>
