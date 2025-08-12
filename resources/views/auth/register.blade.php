<x-app-layout>
<div class="bg-gray-50 ">
    <div class="flex min-h-[80vh] flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="text-center sm:mx-auto sm:w-full sm:max-w-md">
            <h1 class="text-3xl font-bold text-gray-900 ">
                Daftar
            </h1>
        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white px-4 pb-4 pt-8 sm:rounded-lg sm:px-10 sm:pb-6 sm:shadow">
                <form class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 ">Nama Lengkap</label>
                        <div class="mt-1">
                            <input id="email" type="text" data-testid="username" required=""
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-[#2ca9d6] focus:outline-none focus:ring-[#2ca9d6]   sm:text-sm"
                                value="">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 ">Email address</label>
                        <div class="mt-1">
                            <input id="email" type="text" data-testid="username" required=""
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-[#2ca9d6] focus:outline-none focus:ring-[#2ca9d6]   sm:text-sm"
                                value="">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 ">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" data-testid="password"
                                autocomplete="current-password" required=""
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-[#2ca9d6] focus:outline-none focus:ring-[#2ca9d6]   sm:text-sm"
                                value="">
                        </div>
                    </div>
                    <div>
                        <div class="mt-3 text-xs text-grey-500 text-center sm:text-left"> Dengan melakukan pendaftaran, saya setuju dengan <a class="text-primary font-semibold text-[#2ca9d6]" href="" target="_blank">Kebijakan Privasi</a> dan <a class="text-[#2ca9d6] font-semibold" href="" target="_blank">Syarat &amp; Ketentuan</a> PT Jeap Karya Asih. </div>
                    </div>
                    <div>
                        <button data-testid="login" type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-[#31b6e7] px-4 py-2 text-sm font-medium text-white hover:bg-[#2ca9d6] focus:outline-none focus:ring-2 focus:ring-[#2ca9d6] focus:ring-offset-2 disabled:cursor-wait disabled:opacity-50">
                            Daftar
                        </button>
                    </div>
                </form>
               
                <div class="m-auto mt-6 w-fit md:mt-8">
                    <span class="m-auto dark:text-gray-400">Sudah memiliki akun?
                        <a href="{{ route('register') }}" class="font-semibold text-[#31b6e7] " href="/register">Masuk</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>