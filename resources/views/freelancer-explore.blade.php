<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore - Techfree</title>
    @vite('resources/css/app.css')
    <script src="/js/smooth_scroll.js"></script>
  </head>
  <body class="bg-light lg:pt-0 max-lg:pt-20">
    <!-- Navbar -->
    <nav class="bg-white text-gray-800 shadow-lg lg:relative lg:top-auto lg:left-auto lg:right-auto lg:z-auto fixed top-0 left-0 right-0 z-50">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
          <a href="#">
            <img src="/img/logo tech free (1).png" class="w-12 m-0 p-0" alt="Logo" />
          </a>

          <!-- Hamburger Button Mobile -->
          <div class="lg:hidden">
            <button id="hamburger" class="focus:outline-none">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
              </svg>
            </button>
          </div>

          <!-- Menu Navbar Desktop -->
          <div class="hidden lg:flex items-center space-x-6">
            <div class="space-x-4">
              <a href="#" class="text-pkk font-semibold transition-all">Explore</a>
              <a href="{{ route('freelancer.myjobs') }}" class="hover:text-pkk font-semibold">My Jobs</a>
              <a href="{{ route('freelancer.dashboard') }}" class="hover:text-pkk font-semibold">Dashboard</a>
            </div>
            <a href="#CTA">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                />
              </svg>
              {{-- <div class="bg-gray-800 w-auto h-auto px-3 py-1 rounded-md text-white transition-colors duration-500 ease-in-out hover:bg-gray-600">
                <p>Get Started</p>
              </div> --}}
            </a>
          </div>
        </div>

        <!-- Menu Navbar Mobile -->
        <div id="mobile-menu" class="fixed top-0 right-0 h-full w-48 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden z-40">
          <div class="flex flex-col items-start space-y-4 py-8 px-6">
            <a href="/" class="block hover:text-pkk">Home</a>
            <a href="#" class="block hover:text-pkk">Services</a>
            <a href="signup" class="hover:text-pkk flex items-center"> Sign Up </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-pkk text-white py-24">
      <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-6xl font-bold tracking-tight max-md:text-5xl">Explore</h1>
        <p class="mt-6 text-lg max-md:text-base">Cari pekerjaan atau client yang kamu butuhkan!</p>
      </div>
    </section>

    <!-- Job Data -->
    <section id="services" class="py-24 bg-white" id="Services">
      <div class="max-w-7xl mx-auto text-center flex flex-col items-center">
        <h2 class="text-5xl font-bold text-gray-800 mb-12 mx-3">Temukan Yang Kamu Butuhkan!</h2>

        <form action="{{ route('freelancer.explore') }}" method="POST" class="flex w-[40%] h-9 px-3 py-1 mb-10">
            @csrf
            <input type="text" name="name" id="name" class="w-full h-full bg-white ring-1 px-2 ring-slate-200 focus:outline-none focus:ring-2 focus:ring-pkk rounded-md text-black">
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 ml-3 text-slate-500 hover:text-pkk">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-4">
            @foreach ($dataJob as $data)
              <a href="#CTA">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                    {{-- <img src="{{ asset($data['image']) }}" alt="Design Service" class="w-full h-64 object-cover" /> --}}
                    <img src="" alt="" alt="img" class="w-full h-64 object-cover"/>
                    <div class="p-8">
                    <h3 class="text-2xl font-bold text-pkk mb-4">{{ $data['name'] }}</h3>
                    <p class="text-gray-600">{{ $data['description'] }}</p>
                    </div>
                </div>
              </a>
            @endforeach
        </div>
      </div>
    </section>

    <button id="backToTop" class="hidden w-16 h-16 text-3xl fixed bottom-8 right-8 bg-pkk text-white px-4 py-2 rounded-full shadow-lg">↑</button>
    <script src="/js/back_to_top.js"></script>

    <!-- Footer -->
    <footer class="bg-dark text-gray-400 py-8 text-center">
      <div class="max-w-7xl mx-auto">
        <p>&copy; 2024 Alomanius. All rights reserved.</p>
        <div class="mt-4 space-x-6">
          <a href="https://wa.me/6281226110385" target="_blank" class="hover:text-white transition duration-300">Created with ❤️</a>
        </div>
      </div>
    </footer>
    <script src="/js/hamburger_menu.js"></script>
  </body>
</html>
