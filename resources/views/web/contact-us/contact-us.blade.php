@extends('web.layouts.app')

@section('title', 'Contact Us')
@section('navbar')
    @include('web.layouts.navbar.navbar')
@endsection

@section('content')
<div class="relative bg-fixed bg-center bg-no-repeat bg-cover text-center bg-black" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/achievement.jpg') }})">
    <div class="py-20 px-3 text-white">
        <p class="text-4xl">Contact Us</p>
    </div>
</div> 
<div class="px-10 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 md:px-20">
        <div class="py-9 px-10">
            <p class="text-2xl">Contact Details</p>
            <div class="py-6">
                <p class="mb-4">Jl. Merdeka Barat No.12, Jakarta Pusat.</p>
                <p><strong>Phone</strong> : +62-895-2924-8087</p>
                <p><strong>Email</strong> : admin@admin.com</p>
            </div>
        </div>
        <div class="min-w-full bg-[#06283D] rounded-lg shadow-lg">
            <div class="py-9 px-10">
                <p class="text-2xl text-white font-bold">Let's Discuss...</p>

                
                <form class="py-3" autocomplete="off">
                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-4">
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-white">Your Name</label>
                            <input type="text" id="name" placeholder="Name" class="shadow-sm bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-white">Your Email</label>
                            <input type="email" id="email" placeholder="Email" class="shadow-sm bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-white">Message</label>
                        <textarea id="message" rows="10" class="shadow-sm bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Message"></textarea>
                    </div>
                    {{-- <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                            <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                        </div>
                        <label for="terms" class="ml-2 text-sm font-medium  dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
                    </div> --}}
                    <button type="submit" class="text-white bg-[#1363DF] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send</button>
                </form>
  
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function () {
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
</script>    
@endsection