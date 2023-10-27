<div id="navbar_mobile" class="fixed bg-white top-0 right-full h-screen lg:hidden lg:justify-between xl:hidden z-50 w-full max-w-[80%] duration-500">
    <div class="flex flex-col text-md py-3">
        <button id="navbar_mobile_chevron" onclick="toggleMobileNav(true)" class="absolute -right-5 -translate-x-full w-11 h-11 bg-white hover:bg-blue-600 border hover:border-blue-600 hover:text-white rounded-full grid text-center items-center content-center duration-500">
            <i class="fa-solid fa-chevron-left fa-lg"></i>
        </button>
        <div class="flex flex-col py-20 text-lg text-black">
            <a href="#" class='border-b py-2 px-10 hover:text-blue-600 focus:text-blue-600 focus:bg-slate-300 transition duration-300 ease-in-out'>HOME</a>
            <a href="#" class='border-b py-2 px-10 hover:text-blue-600 focus:text-blue-600 focus:bg-slate-300 transition duration-300 ease-in-out'>ABOUT US</a>
            <a href="#" class='border-b py-2 px-10 hover:text-blue-600 focus:text-blue-600 focus:bg-slate-300 transition duration-300 ease-in-out'>CONTACT US</a>
        </div>  
    </div>
</div>
<div id="navbar" class="w-full top-0 z-10 py-4 lg:py-7 lg:px-32 fixed bg-transparent text-white duration-300">
    <div class="flex flex-col items-center content-center">
        <div class="flex justify-between items-center w-full px-4 ">
            <div class="lg:hidden">
                <button onclick="toggleMobileNav(false)"><i class="fa-solid fa-bars fa-lg"></i></button>
            </div>
            <div>
                {{-- <p class='text-xl p-0 m-0 lg:text-2xl font-medium'>Website</p> --}}
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-28">
            </div>
            <div>
                <div class="relative hidden lg:flex gap-12 text-lg justify-center items-center">
                    <a href="/" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Beranda</a>
    
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