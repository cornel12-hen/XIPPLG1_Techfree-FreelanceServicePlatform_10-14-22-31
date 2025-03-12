<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Freelancer Register - Techfree</title>
    @vite('resources/css/app.css')
  </head>
  <body class="bg-gray-100 h-full lg:pt-0 max-lg:pt-20">
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
              <a href="/" class="hover:text-pkk">Home</a>
              <a href="services" class="hover:text-pkk">Services</a>
            </div>
          </div>
        </div>

        <!-- Menu Navbar Mobile -->
        <div id="mobile-menu" class="fixed top-0 right-0 h-full w-48 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden z-40">
          <div class="flex flex-col items-start space-y-4 py-8 px-6">
            <a href="/" class="block hover:text-pkk">Home</a>
            <a href="services" class="block hover:text-pkk">Services</a>
            <a href="#" class="hover:text-pkk flex items-center"> Sign Up </a>
          </div>
        </div>
      </div>
    </nav>

    <section class="grid md:grid-cols-10 grid-rows-1 max-w-7xl mx-auto">
      <!-- Left Side -->
      <div class="md:col-span-4 md:h-screen h-80 bg-pkk flex flex-col">
        <img src="/img/Designer-bro 1 (2).png" class="m-auto w-96 align-middle" alt="" />
      </div>

      <!-- Right Side -->
      <div class="md:col-span-6 md:h-screen h-fit pb-10 bg-white flex flex-col md:pl-20 md:pr-20 pt-12 pl-8 pr-8 font-sans gap-6">
        <div>
          <p class="text-4xl font-bold">Welcome To Techfree!</p>
          <p class="text-lg">Register and start your journey as a freelancer!</p>
        </div>
        {{-- @if ($errors->any())
            <div class="text-red-500">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif --}}
        <form action="{{ route('freelancer.register') }}" method="POST" class="flex flex-col">
          @csrf
          <label for="username">Name</label>
          <input class="w-full mb-2 mt-[1px] border-2 border-dark rounded-md h-10 p-2" type="text" name="name" value="{{ old('name') }}" />

          <label for="email">Email</label>
          <input class="w-full mb-2 mt-[1px] border-2 border-dark rounded-md h-10 p-2" type="text" name="email" value="{{ old('email') }}" />

          <label for="password">Password</label>
          <input class="w-full mb-2 mt-[1px] border-2 border-dark rounded-md h-10 p-2" type="password" name="password" />
          @error('password')
              @if (str_contains($message, '8 characters'))
                  <span class="text-red-500 w-full text-sm mb-2">Password harus memiliki minimal 8 karakter!</span>
              @endif
          @enderror

          <label for="password_confirmation">Password Confirmation</label>
          <input class="w-full mb-2 mt-[1px] border-2 border-dark rounded-md h-10 p-2" type="password" name="password_confirmation" />
          @error('password')
              @if (str_contains($message, 'confirmation'))
                  <span class="text-red-500 w-full text-sm mb-2">Password tidak sama!</span>
              @endif
          @enderror

          <label for="age">Age</label>
          <input class="w-full mb-2 mt-[1px] border-2 border-dark rounded-md h-10 p-2" type="number" name="age" value="{{ old('age') }}" />

          <label for="address">Address</label>
          <textarea name="address" class="w-full mb-4 mt-[1px] border-2 border-dark rounded-md h-16 p-2">{{ old('address') }}</textarea>

          <button type="submit" class="bg-dark w-full h-10 rounded-md text-white font-bold mb-5 pb-0.5">Create Account</button>

          {{-- <button class="flex justify-center items-center gap-5 w-full h-10 rounded-lg font-bold border-2 border-dark">
            <img src="img/Google_G_logo.svg.png" alt="Logo Google" class="w-6" />
            <p class="mb-0.5"><a href="/">Up with Google</a></p>
          </button> --}}
        </form>
        <p class="text-center">Already have an account? <a href="login" class="text-pkk">Log In</a></p>
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
    <script src="/js/hamburger_menu.js"></script>
  </body>
</html>
