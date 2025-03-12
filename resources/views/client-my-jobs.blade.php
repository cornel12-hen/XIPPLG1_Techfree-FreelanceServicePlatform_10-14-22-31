<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Jobs - Techfree</title>
    @vite('resources/css/app.css')
    <script src="/js/smooth_scroll.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>    
  </head>
  <body class="bg-gray-100 lg:pt-0 max-lg:pt-20">
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
              <a href="{{ route('client.postjob') }}" class="hover:text-pkk font-semibold transition-all">Post Job</a>
              <a href="#" class="text-pkk font-semibold">My Jobs</a>
              <a href="{{ route('client.dashboard') }}" class="hover:text-pkk font-semibold">Dashboard</a>
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
            <a href="{{ route('client.postjob') }}" class="block hover:text-pkk">Post Jobs</a>
            <a href="#" class="block text-pkk">My Jobs</a>
            <a href="{{ route('client.dashboard') }}" class="block hover:text-pkk">Dashboard</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
              />
            </svg>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Section -->
    
    <div class="w-full flex h-screen" x-data="{ selectedJob: null, selectedJobDetails: null }">
    
      <!-- Sidebar: List of Jobs -->
      <div class="w-[30%] border-r overflow-y-auto bg-gray-100">
          <h2 class="text-lg font-bold p-4 bg-gray-800 text-white">My Jobs</h2>
            
          @foreach($jobs as $job)
              <div class="p-4 border-b cursor-pointer hover:bg-gray-300" 
                   x-on:click="selectedJob = {{ $job->id }}; selectedJobDetails = {{ json_encode($job) }}">
                  <h3 class="font-semibold">{{ $job->name }}</h3>
              </div>
          @endforeach
      </div>
  
      <!-- Detail Job -->
      <div class="w-2/3 p-6" x-show="selectedJob !== null" x-transition>
          <template x-if="selectedJobDetails">
              <div>
                  <h2 class="text-2xl font-bold" x-text="selectedJobDetails.name"></h2>
                  <p class="text-gray-700 mt-2" x-text="selectedJobDetails.description"></p>
  
                  <div class="mt-4">
                      <h3 class="font-semibold">Requirements:</h3>
                      <pre class="bg-gray-100 p-2 rounded text-sm" x-text="selectedJobDetails.requirement"></pre>
                  </div>
  
                  <div class="mt-4">
                      <h3 class="font-semibold">Status:</h3>
                      <p class="text-sm text-gray-600" x-text="selectedJobDetails.status"></p>
                  </div>
  
                  <div class="mt-4">
                      <h3 class="font-semibold">Price:</h3>
                      <p class="text-sm text-gray-600">Rp <span x-text="selectedJobDetails.price"></span></p>
                  </div>
              </div>
          </template>
      </div>
  
  </div>
  
  


    <button id="backToTop" class="hidden w-16 h-16 text-3xl fixed bottom-8 right-8 bg-pkk text-white px-4 py-2 rounded-full shadow-lg">↑</button>
    <script src="/js/back_to_top.js"></script>

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
