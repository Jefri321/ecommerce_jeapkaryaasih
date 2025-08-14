<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 py-8 flex justify-center">
        <!-- Failed Payment Alert -->
        <div class=" rounded-xl shadow-xl overflow-hidden w-full max-w-md">
            <!-- Header -->
            <div class="bg-red-600 p-6 flex flex-col items-center">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-4 animate-pulse-custom">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-white text-center">Payment Unsuccessful</h1>
            </div>

            <!-- Content -->
            <div class="p-6">
                <div class="space-y-4">
                    <h2 class="text-xl font-semibold text-gray-800 text-center">Oops! Something went wrong</h2>
                    <p class="text-gray-600 text-center">
                        Your payment didn't go through this time. Don't worry, sometimes these things happen.
                        Let's try again - your order is still waiting for you!
                    </p>

                    <div class="flex flex-col space-y-3 pt-4">
                        <a href="{{ route('home') }}"
                            class="w-full px-4 py-2 border border-red-600 text-red-600 rounded-lg text-center hover:bg-red-50 transition">
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                <p class="text-xs text-gray-500 text-center">
                    Having trouble? Email us at <a href="mailto:support@example.com"
                        class="text-red-600 hover:underline">support@example.com</a>
                    or call +1 (555) 123-4567
                </p>
            </div>
        </div>

        <!-- Floating help button -->
        <div class="fixed bottom-6 right-6">
            <button
                class="bg-red-600 hover:bg-red-700 text-white rounded-full p-3 shadow-lg focus:outline-none transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
    </div>

    @push('scripts')
        <script>
            document.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', () => {
                    button.classList.add('transform', 'scale-95');
                    setTimeout(() => {
                        button.classList.remove('transform', 'scale-95');
                    }, 150);
                });
            });
        </script>
    @endpush
</x-app-layout>
