<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Post Job - Techfree</title>
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
              <a href="#" class="text-pkk font-semibold transition-all">Post Job</a>
              <a href="{{ route('client.myjobs') }}" class="hover:text-pkk font-semibold">My Jobs</a>
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
            <a href="#" class="block text-pkk">Post Jobs</a>
            <a href="{{ route('client.myjobs') }}" class="block hover:text-pkk">My Jobs</a>
            <a href="{{ route('client.dashboard') }}" class="block hover:text-pkk">Dashboard</a>
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
              <p class="text-4xl font-sans font-bold mb-2">Atur Job</p>
              <p class="text-base font-sans">
                Atur job dan formulir pendaftaran yang sudah kamu buat
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
      <div class="max-w-7xl mx-auto h-full grid grid-rows-2 md:grid-cols-10 gap-4 py-12">
        <div class="md:col-span-4 w-full h-full bg-white rounded-md shadow-md py-4 px-7 border border-gray-200 flex flex-col divide-y divide-gray-200">
          <div class="flex gap-2 mb-4">
            <div class="w-fit h-fit bg-gray-100 rounded-sm p-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
              </svg>                       
            </div>
            <p class="text-lg font-medium">
              Form Pendaftaran Job  
            </p>            
          </div>
          
          <div class="overflow-y-scroll h-full max-h-full">
            @if ($jobs->isEmpty())
              <div class="flex flex-col justify-center items-center w-full h-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p>Anda belum mengambil tugas.</p>
              </div>
            @else
              <div class="flex flex-col">
              @foreach ($jobs as $job)

              <div class="group">
                <input type="checkbox" id="job-{{ $job->id }}" class="peer hidden">
  
                {{-- Trigger --}}
                  <label for="job-{{ $job->id }}" class="w-full h-fit bg-gray-100 rounded-lg flex flex-col my-2 py-3 px-4">
                    <p class="text-base font-medium">{{ $job->name }}</p>
                  </label>
  
                {{-- Yang dimunculin --}}
                  <div class="hidden peer-checked:flex flex-col w-full max-md:h-[200px] py-3 pt-0 px-4 overflow-y-scroll">
                    @if ($job->status == 'Not accept')
                      <p class="text-sm font-medium">Job Status</p>
                      <p class="text-sm text-red-600 mb-[6px]">{{ $job->status }}</p>
                    @elseif ($job->status == 'On process')
                      <p class="text-sm font-medium">Job Status</p>
                      <p class="text-sm text-yellow-600 mb-[6px]">{{ $job->status }}</p>
                    @elseif ($job->status == 'On submission')
                      <p class="text-sm font-medium">Job Status</p>
                      <p class="text-sm text-pkk mb-[6px]">{{ $job->status }}</p>
                    @elseif ($job->status == 'Finish')
                      <p class="text-sm font-medium">Job Status</p>
                      <p class="text-sm text-green-600 mb-[6px]">{{ $job->status }}</p>
                    @endif
                    <hr class="mb-1">
                    <p class="text-sm font-medium">Job Deadline</p>
                    <p class="mb-2 text-sm">{{ $job->job_deadline }}</p>
                    <hr class="mb-1">
                    <p class="text-sm font-medium">Job Category</p>
                    <p class="mb-2 text-sm">{{ $job->posted_at }}</p>
                    <hr class="mb-1">
                    <p class="text-sm font-medium">Job Description</p>
                    <p class="mb-2 text-sm">{{ $job->description }}</p>
                    <hr class="mb-1">
                    <p class="text-sm font-medium">Requirement</p>
                    <pre class="mb-2 text-sm font-sans">
  {{ $job->requirement }}</pre>
                    <hr class="mb-1">
                    <p class="text-sm font-medium">Job Category</p>
                    <p class="mb-2 text-sm">{{ $job->category->name }}</p>
                    <hr class="mb-1">
                    <p class="text-sm font-medium">Job Description</p>
                    <p class="mb-2 text-sm">{{ $job->price }}</p>
                  </div>
              </div>
              @endforeach
              </div>
            @endif
          </div>
        </div>

        <div class="md:col-span-6 w-full bg-white rounded-md shadow-md py-4 px-7 border border-gray-200 flex flex-col divide-y divide-gray-200">
          <div class="flex gap-2 mb-4">
            <div class="w-fit h-fit bg-gray-100 rounded-sm p-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
              </svg>                                    
            </div>
            <p class="text-lg font-medium">
              Tambah Form Pendaftaran Job
            </p>
          </div>

          <div class="pt-3">
            <form action="{{ route('client.addJob') }}" method="POST" class="flex flex-col">
              @csrf
              <label for="name">Job Name</label>
              <input class="w-full mb-2 mt-[1px] border-[1.5px] border-dark rounded-md h-10 p-2" type="text" name="name" value="{{ old('email') }}" />
    
              <label for="description">Job Description</label>
              <textarea class="w-full mb-2 mt-[1px] border-[1.5px] border-dark rounded-md p-2" name="description" id=""  rows="2"></textarea>

              <label for="requirement">Requirement</label>
              <textarea class="w-full mb-2 mt-[1px] border-[1.5px] border-dark rounded-md p-2" name="description" id=""  rows="2"></textarea>

              <label for="category">Category</label>
              <input class="w-full mb-2 mt-[1px] border-[1.5px] border-dark rounded-md h-10 p-2" type="text" name="category" />

              <label for="deadline">Deadline</label>
              <input class="w-full mb-2 mt-[1px] border-[1.5px] border-dark rounded-md h-10 p-2" type="date" name="requirement" />

              <div class="flex gap-1 items-center mb-4">
                <input class="rounded" type="checkbox" name="publish" />
                <label for="deadline">Publish</label>
              </div>

              <button type="submit" class="bg-dark w-full h-10 rounded-md text-white font-bold mb-5 pb-0.5">Add New Job</button>
    
              {{-- <button class="flex justify-center items-center gap-5 w-full h-10 rounded-lg font-bold border-2 border-dark">
                <img src="img/Google_G_logo.svg.png" alt="Logo Google" class="w-6" />
                <p class="mb-0.5"><a href="/">Up with Google</a></p>
              </button> --}}
            </form>
          </div>
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
