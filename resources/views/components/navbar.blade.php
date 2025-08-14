<nav class="bg-white border border-gray-200">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('images/logo.png') }}" class="h-20" alt="Logo" />
    </a>

    <!-- Hamburger button -->
    <button data-collapse-toggle="navbar-default" type="button"
      class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
      aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>

    <!-- Navbar links -->
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul
        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 
               md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">

        <li>
          <a href="{{ route('register') }}">
            <button
            class="flex items-center text-black  justify-center px-6 py-2.5 font-semibold">
            Daftar
            </button>
          </a>
        </li>
        <li>
          <a href="{{ route('login') }}">
            <button
          class="flex items-center justify-center rounded-md bg-[#31b6e7] text-white px-6 py-2.5 font-semibold hover:shadow-lg hover:drop-shadow transition duration-200">
            Masuk
          </button>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
