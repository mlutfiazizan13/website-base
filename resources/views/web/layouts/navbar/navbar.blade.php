<div id="navbar_mobile" class="fixed bg-white top-0 right-full h-screen lg:hidden lg:justify-between xl:hidden z-50 w-full max-w-[80%] duration-500">
    <div class="flex flex-col text-md py-3">
        <button id="navbar_mobile_chevron" onclick="toggleMobileNav(true)" class="absolute -right-5 -translate-x-full w-11 h-11 bg-white hover:bg-blue-600 border hover:border-blue-600 hover:text-white rounded-full grid text-center items-center content-center duration-500">
            <i class="fa-solid fa-chevron-left fa-lg"></i>
        </button>
        <div class="flex flex-col py-20 text-lg text-black">
            <a href="{{ route('home') }}" class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>BERANDA</a>
            <a href="{{ route('about-us') }}" class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>TENTANG KAMI</a>
            <a href="{{ route('gallery') }}" class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>GALERI</a>
            <a href="{{ route('news') }}" class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>BERITA</a>

            {{-- <div>
                <p class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>PROGRAM</p>
                <div class="pl-3">
                    <p class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>PROGRAM</p>
                    <p class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>PROGRAM</p>
                    <p class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>PROGRAM</p>

                </div>
            </div> --}}
            <div>
                <button type="button" class="flex items-center border-b py-2 px-10 w-full transition duration-300 group hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    {{-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg> --}}
                    <span class="flex-1 text-left whitespace-nowrap" sidebar-toggle-item>PROGRAM</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
              <ul id="dropdown-example" class="hidden py-2 space-y-2">
                <div class="flex flex-col">
                    <a href="{{ route('zakat') }}" class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>ZAKAT</a>
                    <a href="{{ route('donasi') }}"  class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>DONASI</a>
                    <a href="{{ route('qurban') }}" class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>QURBAN</a>
                </div>
              </ul>                
            </div>
            <a href="{{ route('contact-us') }}" class='border-b py-2 px-10 hover:text-[#00a549] focus:text-[#00a549] focus:bg-slate-200 transition duration-300 ease-in-out'>HUBUNGI KAMI</a>
        </div>  
    </div>
</div>
{{-- @if (\Route::is('home')) --}}
    <div id="navbar" class="w-full top-0 z-10 py-4 lg:py-7 xl:px-16 2xl:px-32 sticky text-gray-700 bg-white">
    {{-- <div id="navbar" class="w-full top-0 z-10 py-4 lg:py-7 lg:px-32 fixed bg-transparent text-white duration-300"> --}}
        <div class="flex flex-col items-center content-center">
            <div class="flex lg:flex-col xl:flex-row justify-between items-center w-full px-4 ">
                <div class="lg:hidden">
                    <button onclick="toggleMobileNav(false)"><i class="fa-solid fa-bars fa-lg"></i></button>
                </div>
                <div>
                    {{-- <p class='text-xl p-0 m-0 lg:text-2xl font-medium'>Website</p> --}}
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-28">
                </div>
                <div>
                    <div class="relative hidden lg:flex gap-12 text-lg justify-center items-center">
                        <a href="{{ route('home') }}" class='hover:text-[#00a549] m-0 transition ease-in-out'>Beranda</a>
        
                        <a href="{{ route('about-us') }}" class='hover:text-[#00a549] m-0 transition ease-in-out'>Tentang Kami</a>
                        <a href="{{ route('gallery') }}" class='hover:text-[#00a549] m-0 transition ease-in-out'>Galeri</a>
                        <a href="{{ route('news') }}" class='hover:text-[#00a549] m-0 transition ease-in-out'>Berita</a>
                        {{-- <a href="/project" class='hover:text-[#00a549] m-0 transition ease-in-out'>Program</a> --}}
                        <div class="group relative">
                            <div class="rounded inline-flex items-center group">
                                <p class="mr-1 cursor-pointer hover:text-[#00a549] transition duration-300 ease-in-out">Program</p>
                                <svg
                                    class="fill-current h-4 w-4 group-hover:rotate-180 transition-transform"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    >
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            
                            
                            <div class="invisible opacity-0 flex absolute group-hover:opacity-100 group-hover:visible transition delay-75 translate-y-11 group-hover:translate-y-0 duration-300 w-[215px] py-2 flex-col bg-white drop-shadow-md rounded">
                                <a href="{{ route('zakat') }}" class="px-5 py-2 hover:text-[#00a549]">Zakat</a>
                                <a href="{{ route('donasi') }}" class="px-5 py-2 hover:text-[#00a549]">Donasi</a>
                                <a href="{{ route('qurban') }}" class="px-5 py-2 hover:text-[#00a549]">Qurban</a>
                            </div>                    
                        </div>
                        {{-- <a href="/project" class='hover:text-[#00a549] m-0 transition ease-in-out'>Zakat</a>
                        <a href="/project" class='hover:text-[#00a549] m-0 transition ease-in-out'>Donasi</a>
                        <a href="/project" class='hover:text-[#00a549] m-0 transition ease-in-out'>Qurban</a> --}}
                        <a href="{{ route('contact-us') }}" class='hover:text-[#00a549] m-0 transition ease-in-out'>Hubungi Kami</a>     
                    </div> 
                </div> 
                <div class="hidden xl:block"></div>
                {{-- <div>
                    <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" type="button">
                        <span class="sr-only">Open user menu</span>
                        <i class="fa-solid fa-user"></i> 
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
                        @if (\Auth::check())
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>{{ auth()->user()->name }}</div>
                            <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                            </ul>
                            <div class="py-2">
                                <form action="{{ route('signOut') }}">
                                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</button>
                                </form>
                            </div>
                        @else
                            <div class="py-2">
                                <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><i class="fa-solid fa-right-to-bracket"></i>Masuk</a>
                                <a href="/sign-up" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><i class="fa-solid fa-user-plus"></i>Daftar</a>
                            </div>
                        @endif
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
{{-- @else
    <div id="navbar" class="w-full top-0 z-10 py-4 lg:py-7 lg:px-32 sticky bg-white text-black">
        <div class="flex flex-col items-center content-center">
            <div class="flex justify-between items-center w-full px-4 ">
                <div class="lg:hidden">
                    <button onclick="toggleMobileNav(false)"><i class="fa-solid fa-bars fa-lg"></i></button>
                </div>
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-20 md:w-28">

                </div>
                <div>
                    <div class="relative hidden lg:flex gap-12 text-lg justify-center items-center">
                        <a href="/" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Home</a>
        
                        <a href="/about-us" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Tentang Kami</a>
                        <a href="/about-us" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Galeri</a>
                        <a href="/project" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Berita</a>
                        <a href="/project" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Program</a>
                        <a href="/project" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Zakat</a>
                        <a href="/project" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Donasi</a>
                        <a href="/project" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Qurban</a>
                        <a href="/contact-us" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Hubungi Kami</a>      
                    </div> 
                </div> 
            </div>
        </div>
    </div>
@endif --}}
