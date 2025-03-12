<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Techfree</title>
    @vite('resources/css/app.css')
    <script src="/js/smooth_scroll.js"></script>   
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
              <a href="{{ route('freelancer.explore') }}" class="hover:text-pkk font-semibold transition-all">Explore</a>
              <a href="{{ route('freelancer.myjobs') }}" class="hover:text-pkk font-semibold">My Jobs</a>
              <a href="#" class="text-pkk font-semibold">Dashboard</a>
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
            <a href="#" class="block hover:text-pkk">Explore Jobs</a>
            <a href="#" class="block hover:text-pkk">My Jobs</a>
            <a href="#" class="block hover:text-pkk">Dashboard</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Section -->
    <main>
      <!-- Top Content -->
      <div class="w-full h-60 bg-pkk text-white">
        <div class="max-w-7xl h-full mx-auto flex justify-center gap-4">
          <div class="w-[50%] h-full px-4 flex flex-col text-center justify-center">
            <div>
              <p class="text-4xl font-sans font-bold mb-2">Selamat datang {{ $freelancer->name }}</p>
              <p class="text-base font-sans">
                Lihat data tugas dan lainnya di sini
              </p>
            </div>
          </div>
          {{-- <div class="w-[50%] h-full py-8 px-4">
            <div class="bg-white text-black w-full h-full rounded-xl shadow-md py-2 px-4 flex flex-col border border-gray-200">
              <p class="text-lg font-semibold font-sans pb-2 border-b border-gray-200">
                Deadline Terdekat
              </p>
            </div>
          </div> --}}
        </div>
      </div>

      <!-- Bottom Content -->
      <div class="max-w-7xl mx-auto h-[640px] grid grid-rows-2 md:grid-cols-5 gap-4 py-12">
        <div class="md:col-span-3 w-full bg-white rounded-md shadow-md py-4 px-7 border border-gray-200 flex flex-col divide-y divide-gray-200">
          <div class="flex gap-2 mb-4">
            <div class="w-fit h-fit bg-gray-100 rounded-sm p-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
              </svg>                       
            </div>
            <p class="text-lg font-medium">
              Daftar Tugas
            </p>
          </div>
          
          @if ($jobs->isEmpty())
            <div class="flex flex-col justify-center items-center w-full h-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p>Anda belum mengambil tugas.</p>
            </div>
          @else
            <div class="flex flex-col overflow-y-scroll">
            @foreach ($jobs as $job)
              <div class="w-full h-fit bg-gray-100 rounded-lg flex divide-x my-4">
                <div class="flex flex-col w-[85%] gap-1 py-3 px-4">
                  <pre class="font-semibold font-sans text-lg overflow-hidden">
{{ $job->workJob->name }}</pre>
                  <pre class="line-clamp-2 text-sm font-sans">
{{ $job->workJob->requirement }}</pre>
                  <div class="flex gap-2 text-sm font-medium">
                    <p>{{ $job->workJob->job_deadline }}</p>
                    <p>·</p>
                    <p>{{ $job->workJob->category->name }}</p>
                  </div>
                </div>

                <div class="w-[15%] flex items-center justify-center hover:bg-gray-50 hover:text-pkk transition-colors cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                  </svg>                
                </div>
              </div>
            @endforeach
            </div>
          @endif
        </div>

        <div class="md:col-span-2 w-full bg-white rounded-md shadow-md py-4 px-7 border border-gray-200 flex flex-col divide-y divide-gray-200">
          <div class="flex gap-2 mb-4">
            <div class="w-fit h-fit bg-gray-100 rounded-sm p-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
              </svg>                                    
            </div>
            <p class="text-lg font-medium">
              Chat Client
            </p>
          </div>

          @if ($clients->isEmpty())
            <div class="flex flex-col gap-1 justify-center items-center w-full h-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 3.75 18 6m0 0 2.25 2.25M18 6l2.25-2.25M18 6l-2.25 2.25m1.5 13.5c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
              </svg>              
              <p>Anda belum terhubung dengan client.</p>
            </div>
          @else
          <div class="flex flex-col overflow-y-scroll">
            @foreach ($clients as $client)
              <div class="flex items-center justify-between gap-4 py-3 border-b border-gray-200">
                <div class=" flex gap-4">
                  <img src="" alt="" class="rounded-full w-12 h-12 border border-black">
                  <div>
                    <pre class="font-medium font-sans">
{{ $client->name }}</pre>
                    <pre class="text-sm font-sans">
{{ $client->email }}</pre>
                  </div>
                </div>
                <div class="flex gap-4">
                  <div class=""> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 hover:stroke-pkk hover:bg-gray-50 transition-colors bg-gray-100 rounded-full p-2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>                  
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-12 hover:stroke-pkk hover:bg-gray-50 transition-colors bg-gray-100 rounded-full p-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                  </svg>                                
                  {{-- <div class="rounded-full w-3 h-3 bg-green-600"></div>                 --}}
                </div>
              </div> 
            @endforeach
          </div>
          @endif
        </div>
      </div>
    </main>


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
