<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In - Techfree</title>
    @vite('resources/css/app.css')
  </head>
  <body class="bg-gray-100 h-full lg:pt-0 max-lg:pt-20">
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
                <a href="landingpage" class="hover:text-pkk">Home</a>
                <a href="services" class="hover:text-pkk">Services</a>
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
            <a href="services" class="block hover:text-pkk">Services</a>
            <a href="signup" class="hover:text-pkk flex items-center"> Sign Up </a>
          </div>
        </div>
      </div>
    </nav>

    <section class="grid md:grid-cols-10 grid-rows-1 max-w-7xl mx-auto">
      <!-- Left Side -->
      <div class="md:col-span-4 md:h-screen h-80 bg-pkk flex flex-col">
        <img src="img/Designer-bro 1 (2).png" class="m-auto w-96 align-middle" alt="" />
      </div>

      <!-- Right Side -->
      <div class="md:col-span-6 md:h-screen h-fit pb-10 bg-white flex flex-col md:pl-20 md:pr-20 pl-8 pt-12 pr-8 font-sans gap-6">
        <div>
          <p class="text-4xl font-bold">Welcome To Techfree!</p>
          <p class="text-lg">Please sign in first</p>
        </div>
        <form class="flex flex-col" action="" id="loginForm">
          <label for="email">Email</label>
          <input class="w-full mb-8 mt-1 border-2 border-dark rounded-lg h-10 p-2" type="text" name="email" id="email" />

          <label for="password">Password</label>
          <input class="w-full mb-10 mt-1 border-2 border-dark rounded-lg h-10 p-2" type="password" name="password" id="password" />

          <button class="bg-dark w-full h-10 rounded-lg text-white font-bold mb-5 pb-0.5" type="submit"><a href="index.html">Sign In</a></button>
          <button class="flex justify-center items-center gap-5 w-full h-10 rounded-lg font-bold border-2 border-dark">
            <img src="img/Google_G_logo.svg.png" alt="Logo Google" class="w-6" />
            <p class="mb-0.5"><a href="/">Sign In with Google</a></p>
          </button>
        </form>
        <p class="text-center">Don't have an account? <a href="signup" class="text-pkk">Sign Up</a></p>
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
    <script src="js/sign_in.js"></script>
    <script src="js/hamburger_menu.js"></script>
  </body>
</html>
