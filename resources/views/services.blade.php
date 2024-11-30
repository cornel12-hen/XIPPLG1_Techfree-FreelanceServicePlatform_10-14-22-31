<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services - Techfree</title>
    @vite('resources/css/app.css')
    <script src="js/smooth_scroll.js"></script>
  </head>
  <body class="bg-light lg:pt-0 max-lg:pt-20">
    <!-- Navbar -->
    <nav class="bg-white text-gray-800 shadow-lg lg:relative lg:top-auto lg:left-auto lg:right-auto lg:z-auto fixed top-0 left-0 right-0 z-50">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
          <a href="#">
            <img src="img/logo tech free (1).png" class="w-12 m-0 p-0" alt="Logo" />
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
              <a href="/" class="hover:text-pkk">Home</a>
              <a href="#" class="hover:text-pkk">Services</a>
            </div>
            <a href="signup" class="hover:text-pkk">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                />
              </svg>
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
        <h1 class="text-6xl font-bold tracking-tight max-md:text-5xl">Exprole The Freedom!</h1>
        <p class="mt-6 text-lg max-md:text-base">Bergabung bersama kami di platform layanan freelance paling terpercaya!</p>
        <a href="#ayo" class="mt-8 inline-block bg-dark text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-gray-700 transition duration-300">Scroll Down!</a>

        <div class="absolute top-0 right-0 md:w-72 md:h-72 w-32 h-32">
          <img src="img/Mesa de trabajo 2.png" class="md:w-72 w-32" alt="" />
        </div>
        <div class="absolute -bottom-3.5 left-0 md:w-72 md:h-72 w-32 h-32">
          <img src="img/Mesa de trabajo 3.png" class="md:w-72 w-32" alt="" />
        </div>
      </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-24 bg-white" id="Services">
      <div class="max-w-7xl mx-auto text-center flex flex-col items-center">
        <h2 class="text-5xl font-bold text-gray-800 mb-12 mx-3">Temukan Pekerjaan Yang Kamu Inginkan!</h2>

        <form action="{{ route('services') }}" method="POST" class="flex w-[40%] h-9 px-3 py-1 mb-10">
            @csrf
            <input type="text" name="name" id="name" class="w-full h-full bg-white ring-1 px-2 ring-slate-200 focus:outline-none focus:ring-2 focus:ring-pkk rounded-md text-black">
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 ml-3 text-slate-500 hover:text-pkk">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-4">
            @foreach ($datajob as $data)
                <div class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                    <img src="{{ asset($data['image']) }}" alt="Design Service" class="w-full h-64 object-cover" />
                    <div class="p-8">
                    <h3 class="text-2xl font-bold text-pkk mb-4">{{ $data['name'] }}</h3>
                    <p class="text-gray-600">{{ $data['description'] }}</p>
                    </div>
                </div>
            @endforeach

            <div class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                <img src="img/flat-lay-office-desk-assortment-with-empty-screen-tablet.jpg" alt="Dan ribuan pekerjaan lainnya..." class="w-full h-64 object-cover" />
                <div class="p-8">
                <h3 class="text-2xl font-bold text-pkk mb-4">Dan ribuan pekerjaan lainnya...</h3>
                <p class="text-gray-600">Masih banyak pekerjaan yang menantimu!</p>
                </div>
            </div>
        </div>
      </div>
    </section>

    <!-- Ayo Mulai Sekarang! -->
    <section id="ayo" class="py-24 bg-gray-100">
      <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-5xl font-bold text-gray-800 mb-12">Ayo Mulai Sekarang!</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="flex flex-col items-center p-8">
            <div class="bg-pkk text-white w-20 h-20 flex items-center justify-center rounded-full shadow-lg mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-pkk">Buat Akun</h3>
            <p class="mt-4 text-gray-600">Buat akun dan lengkapi profilmu. Jadilah freelancer ataupun klien!</p>
          </div>

          <div class="flex flex-col items-center p-8">
            <div class="bg-pkk text-white w-20 h-20 flex items-center justify-center rounded-full shadow-lg mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m-6 3.75 3 3m0 0 3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75"
                />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-pkk">Buat Atau Cari Pekerjaan</h3>
            <p class="mt-4 text-gray-600">Jadilah klien yang membuat dan menawarkan pekerjaan atau jadilah freelancer yang mencari dan menerima pekerjaan!</p>
          </div>
          <div class="flex flex-col items-center p-8">
            <div class="bg-pkk text-white w-20 h-20 flex items-center justify-center rounded-full shadow-lg mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-pkk">Selesaikan Pekerjaan Bersama</h3>
            <p class="mt-4 text-gray-600">Sebagai klien maupun freelancer, buat lingkungan yang profesional. Selesaikan pekerjaan dengan komunikasi dan kolaborasi!</p>
          </div>
        </div>
      </div>
    </section>

    <button id="backToTop" class="hidden w-16 h-16 text-3xl fixed bottom-8 right-8 bg-pkk text-white px-4 py-2 rounded-full shadow-lg">↑</button>
    <script src="js/back_to_top.js"></script>

    <!-- CTA (Call To Action) -->
    <section class="py-16 bg-pkk text-white text-center">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-5xl font-bold">Ready To Get Started?</h2>
        <p class="mt-4 text-lg mx-3">Bergabunglah sebagai seorang klien maupun freelancer! Ambil peluang yang tak terbatas dan raihlah kebebasanmu!</p>
        <a href="signup" class="mt-8 inline-block bg-dark text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-gray-700 transition duration-300">Sign Up Now</a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-gray-400 py-8 text-center">
      <div class="max-w-7xl mx-auto">
        <p>&copy; 2024 Alomanius. All rights reserved.</p>
        <div class="mt-4 space-x-6">
          <a href="https://wa.me/6281226110385" target="_blank" class="hover:text-white transition duration-300">Created with ❤️</a>
        </div>
      </div>
    </footer>
    <script src="js/hamburger_menu.js"></script>
  </body>
</html>
