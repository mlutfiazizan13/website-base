<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick/ajax-loader.gif') }}">

    <style>
        *{
            font-family: 'Varela'
        }
    </style>
    @yield('css_style')

    {{-- Library --}}


    <title>@yield('title', 'Web')</title>
</head>
<body>
    <div id="page-container" class="flex flex-col justify-between relative min-h-screen">
        <div id="overlay" class="hidden fixed bg-black h-screen w-full z-40 opacity-50 duration-300"></div>
        @include('web.layouts.navbar.navbar')
        <div id="content-wrap" class="flex-grow">
            @yield('content')
        </div>
        <footer id="footer" class="w-full">
            @include('web.layouts.footer')
        </footer>

        {{-- <div class="fixed bottom-0 flex flex-col gap-3 right-0 p-6">
            <a id="email-message" class="invisible grid w-14 h-14 bg-[#25D366] opacity-0 text-white rounded-full text-center items-center content-center duration-500 shadow-lg">
                <i class="fa-brands fa-whatsapp fa-2x"></i>
            </a>
        </div>
        <div class="fixed bottom-0 flex flex-col gap-3 right-0 p-6">
            <a id="wa-message" class="invisible grid w-14 h-14 bg-[#FF0000] opacity-0 text-white rounded-full text-center items-center content-center duration-500 shadow-lg">
                <i class="fa-regular fa-envelope fa-xl"></i>
            </a>
        </div>
        
        <div class="fixed bottom-0 flex flex-col gap-3 right-0 p-6">
            <button id="button-message" class="w-14 h-14 bg-[#06283D] text-white rounded-full grid text-center items-center content-center duration-500 shadow-lg">
                <i class="fa-solid fa-message fa-xl"></i>
            </button>
        </div> --}}
    </div>
    {{-- mobile navbar --}}



    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
    <script src="{{ asset('vendor/slick-1.8.1/slick/slick.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#button-message').on('click', function () {
                $('#email-message').toggleClass('invisible visible opacity-100 -translate-y-32');
                $('#wa-message').toggleClass('invisible visible opacity-100 -translate-y-16');
                $(this).toggleClass('rotate-180');
                
            });

            $(window).scroll(function () { 
                if ($(window).scrollTop() >= 40) {
                    // $('#navbar').removeClass('shadow-sm');

                    $('#navbar').addClass('shadow-sm');
                } else {
                    $('#navbar').removeClass('shadow-sm');
                    // $('#navbar').addClass('shadow-sm');
                }
            });
        });

        
        function toggleMobileNav(isOpen) { 
            if (isOpen === false) {
                $('#overlay').removeClass('hidden');
                $('#navbar_mobile').addClass('translate-x-full');
                $('#navbar_mobile_chevron').removeClass('-translate-x-full');
            } else {
                $('#overlay').addClass('hidden');
                $('#navbar_mobile').removeClass('translate-x-full');
                $('#navbar_mobile_chevron').addClass('-translate-x-full');

                mobileNavbar = false
            }
        }
    </script>
    @yield('script')
</body>

</html>

