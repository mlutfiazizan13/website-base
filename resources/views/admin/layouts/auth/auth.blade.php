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
            font-family: 'Overpass', sans-serif;
        }
    </style>

    {{-- Library --}}


    <title>@yield('title', 'Web Kontraktor')</title>
</head>
<body>
    <div id="page-container" class="flex flex-col justify-between relative min-h-screen">
        <div id="content-wrap" class="flex-grow">
            @yield('content')
        </div>
    </div>
    {{-- mobile navbar --}}



    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
    <script src="{{ asset('vendor/slick-1.8.1/slick/slick.min.js') }}"></script>
    {{-- <script>
        $(document).ready(function () {
            $('#button-message').on('click', function () {
                $('#email-message').toggleClass('invisible visible opacity-100 -translate-y-32');
                $('#wa-message').toggleClass('invisible visible opacity-100 -translate-y-16');
                $(this).toggleClass('rotate-180');
                
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
    </script> --}}
    @yield('script')
</body>

</html>

