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
<div id="navbar" class="w-full top-0 z-10 py-4 lg:py-7 lg:px-32 sticky bg-white text-black duration-300">
    <div class="flex flex-col items-center content-center">
        <div class="flex justify-between w-full px-4 ">
            <div class="lg:hidden">
                <button onclick="toggleMobileNav(false)"><i class="fa-solid fa-bars fa-lg"></i></button>
            </div>
            <div>
                <p class='text-xl p-0 m-0 lg:text-2xl font-medium'>Website</p>
            </div>
            <div>
                <div class="relative hidden lg:flex gap-12 text-lg items-center">
                    <a href="/" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Home</a>
    
                    <a href="/about-us" class='hover:text-[#3789E5] m-0 transition ease-in-out'>About Us</a>
                    <a href="/project" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Project</a>
                    <a href="/contact-us" class='hover:text-[#3789E5] m-0 transition ease-in-out'>Contact Us</a>     
                </div> 
            </div> 
        </div>
    </div>
</div>