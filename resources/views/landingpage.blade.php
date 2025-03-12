<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Techfree</title>
    @vite('resources/css/app.css')
    <script src="js/smooth_scroll.js"></script>   
  </head>
  <body class="bg-white lg:pt-0 max-lg:pt-20">
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
              <a href="#" class="hover:text-pkk">Home</a>
              <a href="services" class="hover:text-pkk">Services</a>
            </div>
            <a href="#CTA">
              {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                />
              </svg> --}}
              <div class="bg-gray-800 w-auto h-auto px-3 py-1 rounded-md text-white transition-colors duration-500 ease-in-out hover:bg-gray-600">
                <p>Get Started</p>
              </div>
            </a>
          </div>
        </div>

        <!-- Menu Navbar Mobile -->
        <div id="mobile-menu" class="fixed top-0 right-0 h-full w-48 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden z-40">
          <div class="flex flex-col items-start space-y-4 py-8 px-6">
            <a href="#" class="block hover:text-pkk">Home</a>
            <a href="{{ route('services') }}" class="block hover:text-pkk">Services</a>
            <a href="#CTA" class="hover:text-pkk flex items-center"> Get Started </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-pkk text-white py-20">
      <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-5xl font-bold max-md:text-4xl">Welcome To The New World</h1>
        <p class="mt-4 text-lg mx-2 max-md:text-base">Wujudkan impian dengan bekerja kapan saja dan di mana saja!</p>
        <a href="#CTA" class="mt-6 inline-block bg-dark text-white font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-gray-700">Get Started</a>
      </div>
      <div class="absolute top-20 right-0 md:w-72 md:h-72 w-32 h-32">
        <img src="asset/images/Mesa de trabajo 2.png" class="md:w-72 w-32" alt="" />
      </div>
      <div class="absolute md:bottom-72 bottom-56 left-0 md:w-72 md:h-72 w-32 h-32">
        <img src="asset/images/Mesa de trabajo 3.png" class="md:w-72 w-32" alt="" />
      </div>
    </section>

    <!-- Keuntungan Kami -->
    <section class="py-16 mx-4">
      <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-gray-800">Our Advantages</h2>
        <p class="mt-4 text-lg text-gray-600">Apa keuntungan yang layanan kami tawarkan?</p>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white shadow-md rounded-lg p-8">
            <h3 class="text-xl font-bold text-pkk">Aman dan Terpercaya</h3>
            <p class="mt-4 text-gray-600">Seleksi yang dilakukan dengan ketat, dengan mempertimbangkan portofolio, kinerja, dan tanggung jawab menjamin kredibilitas para freelancer kami.</p>
          </div>

          <div class="bg-white shadow-md rounded-lg p-8">
            <h3 class="text-xl font-bold text-pkk">Kostumisasi Tanpa Batas</h3>
            <p class="mt-4 text-gray-600">Diskusikan deadline, bayaran, dan semua hal yang terkait dengan bebas!</p>
          </div>

          <div class="bg-white shadow-md rounded-lg p-8">
            <h3 class="text-xl font-bold text-pkk">Fleksibilitas Kerja</h3>
            <p class="mt-4 text-gray-600">Bukan hanya mempekerjakan orang, kamu juga bisa bekerja di sini! Kerja di mana saja, kapan saja, dengan siapa saja, dalam hal apa saja!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us -->
    <section class="py-16 bg-pkk">
      <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-white">About Us</h2>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8 mx-3">
          <div class="bg-white shadow-md rounded-lg p-8">
            <h3 class="text-xl font-bold text-pkk">Latar Belakang</h3>
            <p class="mt-4 text-gray-600">
              Dunia kerja kini berubah drastis akibat kemajuan teknologi, perubahan sosial, dan ekonomi global, yang juga mengubah konsep pekerjaan. Karena itu, kami membuat platform untuk pekerja lepas yang bisa memberi mereka kebebasan
              mengatur jadwal dan lokasi kerja mereka.
            </p>
          </div>

          <div class="bg-white shadow-md rounded-lg p-8">
            <h3 class="text-xl font-bold text-pkk">Tujuan</h3>
            <p class="mt-4 text-gray-600">Kami menyediakan platform online yang memudahkan orang menawarkan jasa freelance sesuai bakat mereka, sekaligus menjadi solusi bagi klien yang membutuhkan layanan profesional atau custom.</p>
          </div>
        </div>
      </div>
    </section>

    <button id="backToTop" class="hidden w-16 h-16 text-3xl fixed bottom-8 right-8 bg-pkk text-white px-4 py-2 rounded-full shadow-lg">↑</button>
    <script src="js/back_to_top.js"></script>

    <!-- CTA (Call To Action) -->
    <section id="CTA" class="bg-gray-800 text-white py-16">
      <div class="max-w-7xl mx-auto text-center flex flex-col items-center">
        <h2 class="text-4xl font-bold">Ready To Get Started?</h2>
        <p class="mt-4 text-lg mx-2">Bergabunglah sebagai seorang klien maupun freelancer! Ambil peluang yang tak terbatas dan raihlah kebebasanmu!</p>
        {{-- <a href="signup" class="mt-6 inline-block bg-pkk text-white font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-pkk">Sign Up Now</a> --}}
        <div class="flex md:w-[480px] md:h-[200px] w-[35%] h-[35%] max-w-[100%] justify-center mt-8 gap-8">
          <div class="w-96 bg-white text-gray-800 font-bold text-xl rounded-xl hover:scale-105 transition-transform overflow-hidden">
            <a href="{{ route('freelancer.register') }}">
              <img src="img/freelancer.jpg" alt="" class="w-full h-[75%] scale-x-[-1] mb-2">
              <p>Freelancer</p>
            </a>
          </div>
          <div class="w-96 bg-white text-gray-800 font-bold text-xl rounded-xl hover:scale-105 transition-transform overflow-hidden">
            <a href="{{ route('client.register') }}">
              <img src="img/client.jpg" alt="" class="w-full h-[75%] mb-2">
              <p>Client</p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-8">
      <div class="max-w-7xl mx-auto text-center">
        <p>&copy; 2024 Alomanius. All rights reserved.</p>
        <div class="mt-4 space-x-4">
          <a href="https://wa.me/6281226110385" target="_blank" class="hover:text-white transition duration-300">Created with ❤️</a>
        </div>
      </div>
    </footer>
    <script src="js/hamburger_menu.js"></script>
  </body>
</html>
