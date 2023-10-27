@extends('web.layouts.app')

@section('title', 'Home')

@section('navbar')
    @include('web.layouts.navbar.navbar-home')
@endsection

@section('content')

    <section class="bg-center bg-cover bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url({{asset('images/photos/Artboard-1.png')}})">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none md:text-5xl lg:text-6xl text-[#00a549]">Yayasan Harapan Tumbuh Bersama Bangsa</h1>
            <p class="mb-8 text-lg font-normal text-[#00a549] lg:text-xl sm:px-16 lg:px-48">Lembaga filantropi yang mengelola Zakat, Infak, Sedekah, dan Donasi Sosial melalui 3 program utama yaitu Bidang Pendidikan, Sosial , dan Keagamaan.</p>
            {{-- <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>  
            </div> --}}
        </div>
    </section>

    <div class="container mx-auto px-3 xl:px-20 py-10 text-center">
        <p class="text-3xl font-semibold pb-10">Berita</p>
        {{-- <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe!</p> --}}
            @if ($news->isEmpty())
                <div class="text-center">
                    <p class="text-2xl">Tidak ada Berita</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 text-left py-10">

                    @foreach ($news as $n)
                        <a href="{{ route('news.detail', $n->slug) }}" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div>
                                {{-- <img class="rounded-t-lg" src="" alt="" /> --}}
                                <div class="rounded-t-lg bg-center bg-cover bg-no-repeat bg-gray-700 h-60" style="background-image: url({{ $n->image_url }})">
            
                                </div>
                            </div>
                            <div class="p-5">
                                <div href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $n->title }}</h5>
                                </div>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ strlen($n->content_preview)  >= 200 ? substr($n->content_preview, 0, 100) .'....' : $n->content_preview }}</p>
                                <div class="">
                                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $n->created_by }}</p>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ Carbon\Carbon::parse($n->created_at)->translatedFormat('d F Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
        
            @endif

        <div class="flex justify-end">
            <a href="{{ route('news') }}" class="text-xl font-semibold hover:text-[#1363DF]">See More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>

    {{-- <div class="relative group dark:bg-gray-800 dark:border-gray-700">
    
        <div class='w-full'>
            <img src="{{ asset('images/photos/Artboard-1.png') }}" alt="" />
        </div>
        <div class='invisible group-hover:visible'>
            <div class='absolute top-0 w-full h-full group-hover:bg-black opacity-50 group-hover:opacity-30 duration-500'></div>
            
            <div>
                <p class='absolute px-3 top-3 text-white'>Lorem, ipsum.</p>

                <div class='absolute px-3 bottom-3 flex w-full justify-between items-center'>
                    <p class='text-white'>Lutfi</p>
                </div>
            </div>
        </div>
    </div> --}}

{{-- 
    <div class="h-[500px] container mx-auto px-10 xl:px-28 py-14 text-center">
        <p class="text-3xl">Tentang Kami</p>
        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe!</p>
    </div> --}}
    <div class="container mx-auto px-3 xl:px-28 py-10 text-center">
        <p class="text-3xl font-semibold">About Us</p>
        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe!</p>
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="py-9 px-10">
                <img src="{{ asset('images/yayasanhtbb.jpg') }}" alt="">
            </div>
            <div class="py-9 px-10 text-left">
                <p class="text-[#06283D] font-bold text-2xl mb-3">Latar Belakang</p>
                <p>Yayasan Harapan Tumbuh Bersama Bangsa atau disingkat Yayasan HTBB, berdiri pada Tahun 2022 dengan mengelola 3 (tiga) bidang, yaitu Sosial, Pendidikan dan Keagamaan. Tujuan dari pendirian Yayasan ini adalah untuk ikut berpartisipasi di dalam berbagai kegiatan kemasyarakatan serta menjadi bagian dari tanggungjawab sebagai warga negara. Saat ini kantor Yayasan HTBB berlokasi di Komplek Ruko Plaza Niaga Jl. KSR Dadi Kusmayadi No. 18, Kelurahan Tengah, Kecamatan Cibinong, Kabupaten Bogor.</p>
    
            </div>
            {{-- <div class="min-w-full bg-[#06283D] text-white rounded-lg shadow-lg">
            </div> --}}
        </div>
        <div class="flex justify-end">
            <a href="/about-us" class="text-xl font-semibold hover:text-[#1363DF]">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
    {{-- <div class="p-10 md:p-20">

    </div> --}}

    {{-- <div class="container mx-auto px-10 xl:px-28 py-20 text-center bg-[#DFF6FF]">
        <p class="text-3xl font-semibold">Partner</p>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8 m py-10">
            <div class="flex flex-col bg-[#06283D] text-white items-center content-center text-center rounded-lg shadow-lg py-10 md:py-16 px-10">
                <i class="fa-solid fa-hand-fist fa-6x"></i>
                <p class="font-semibold pt-4 pb-2">Lorem Ipsum</p>
                <p class="text-sm">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-col bg-[#06283D] text-white items-center content-center text-center rounded-lg shadow-lg py-10 md:py-16 px-10">
                <i class="fa-solid fa-city fa-6x"></i>
                <p class="font-semibold pt-4 pb-2">Lorem Ipsum</p>
                <p class="text-sm">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-col bg-[#06283D] text-white items-center content-center text-center rounded-lg shadow-lg py-10 md:py-16 px-10">
                <i class="fa-solid fa-clock fa-6x"></i>
                <p class="font-semibold pt-4 pb-2">Lorem Ipsum</p>
                <p class="text-sm">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-col bg-[#06283D] text-white items-center content-center text-center rounded-lg shadow-lg py-10 md:py-16 px-10">
                <i class="fa-solid fa-earth-americas fa-6x"></i>
                <p class="font-semibold pt-4 pb-2">Lorem Ipsum</p>
                <p class="text-sm">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div> --}}

    
    <div>
        <img src="{{ asset('images/Spanduk-1.png') }}" class="w-full" alt="">
    </div>

    {{-- <div class="relative bg-fixed bg-center bg-no-repeat bg-cover text-center bg-black" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/photos/Artboard-2.png') }})">
        <div class="py-14 px-3 text-white">
            <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit temporibus pariatur quis a ipsum unde. Rem a ut incidunt optio!</p>
            <div class="flex justify-center gap-5 py-10 xl:gap-12">
                <div>
                    <p class="text-2xl md:text-4xl">100+</p>
                    <p>Lorem, ipsum.</p>
                </div>
                <div>
                    <p class="text-2xl md:text-4xl">40+</p>
                    <p>Lorem, ipsum.</p>
                </div>
                <div>
                    <p class="text-2xl md:text-4xl">20</p>
                    <p>Lorem, ipsum.</p>
                </div>
            </div>
            <p class="text-xl">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>  --}}
{{-- 
    <div class="py-20 text-center px-10 lg:px-40">
        <p class="text-3xl font-semibold">Client Kami</p>
        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe!</p>

        <div class="relative group">
            <div class="client px-4">
                <div class="grid grid-cols-1 content-center items-center text-center">
                    <img data-lazy="{{ asset('images/google.png') }}" alt="">
                    <img data-lazy="{{ asset('images/microsoft.png') }}" alt="">
                </div>
                <div class="grid grid-cols-1 content-center items-center text-center">
                    <img data-lazy="{{ asset('images/facebook.png') }}" alt="">
                    <img data-lazy="{{ asset('images/microsoft.png') }}" alt="">
                </div>
                <div class="grid grid-cols-1 content-center items-center text-center">
                    <img data-lazy="{{ asset('images/facebook.png') }}" alt="">
                    <img data-lazy="{{ asset('images/microsoft.png') }}" alt="">
                </div>
            </div>
            <div class="hidden group-hover:block transition ease-in-out duration-500">
                <a class="absolute top-1/2 left-0 my-0 mx-auto prev-arrow hover:text-blue-600 duration-200"><i class="fa-solid fa-chevron-left fa-xl"></i></a>
                <a class="absolute top-1/2 right-0 next-arrow hover:text-blue-600 duration-200"><i class="fa-solid fa-chevron-right fa-xl"></i></a>
            </div>
        </div>

    </div> --}}

    <div class="container mx-auto px-10 xl:px-28 py-10 text-center bg-white">
        <p class="text-3xl font-semibold">Partner</p>
        {{-- <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe!</p> --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 m py-10">
            <div class="flex flex-col text-black items-center content-center text-center py-10 md:py-16 px-10">
                <div>
                    <img class="w-52" src="{{ asset('icon/kitabisa.png') }}" alt="">
                </div>
            </div>
            <div class="flex flex-col text-black items-center content-center text-center py-10 md:py-16 px-10">
                <div>
                    <img class="w-52" src="{{ asset('icon/flip.svg') }}" alt="">
                </div>
            </div>
            <div class="flex flex-col text-black items-center content-center text-center py-10 md:py-16 px-10">
                <div>
                    <img class="w-52" src="{{ asset('icon/baznas.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 text-center text-white px-10 lg:px-40 bg-[#00a549]">
        <p class="text-3xl font-semibold">Galeri</p>
        {{-- <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe!</p> --}}
        @if ($galleries->isEmpty())
            <div class="text-center py-10">
                <p class="text-2xl">Tidak ada foto</p>
            </div>
        @else
            <div class="relative group py-10">
                <div class="portofolio px-5">
                    @foreach ($galleries as $g)
                        
                        <div class="">
                            <img data-lazy="{{ $g->image_url }}" class="object-cover max-w-full h-96 m-auto" alt="">
                            <p class="py-2">{{ $g->title }}</p>
                        </div>
                    @endforeach
                    
                </div>
                <div class="hidden group-hover:block transition ease-in-out duration-500">
                    <a class="absolute top-1/2 -left-0 my-0 mx-auto porto-prev-arrow hover:text-blue-600 duration-200"><i class="fa-solid fa-chevron-left fa-xl"></i></a>
                    <a class="absolute top-1/2 -right-0 porto-next-arrow hover:text-blue-600 duration-200"><i class="fa-solid fa-chevron-right fa-xl"></i></a>
                </div>
            </div>
    
        @endif

        {{-- <div class="relative group">
            <div class="portofolio px-5">
                <!-- Item 1 -->
                <div class="">
                    <img data-lazy="{{ asset('images/photos/Donasi_Cianjur.png') }}" class="object-cover max-w-full h-96 m-auto" alt="">
                    <p class="py-2">Lorem ipsum dolor sit amet.</p>
                </div>
                <!-- Item 2 -->
                <div class="">
                    <img data-lazy="{{ asset('images/photos/Donasi_Cianjur_1.png') }}" class="object-cover max-w-full h-96 m-auto" alt="">
                    <p class="py-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <!-- Item 3 -->
                <div class="">
                    <img data-lazy="{{ asset('images/photos/Donasi_Cianjur_2.png') }}" class="object-cover max-w-full h-96 m-auto" alt="">
                    <p class="py-2">Lorem ipsum dolor sit amet.</p>
                </div>
                <!-- Item 4 -->
                <div class="">
                    <img data-lazy="{{ asset('images/photos/Donasi_Cianjur_3.png') }}" class="object-cover max-w-full h-96 m-auto" alt="">
                    <p class="py-2">Lorem ipsum dolor sit amet.</p>
                </div>
                <!-- Item 5 -->
                <div class="">
                    <img data-lazy="{{ asset('images/photos/Shadaqah Maal.png') }}" class="object-cover max-w-full h-96 m-auto" alt="">
                    <p class="py-2">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="hidden group-hover:block transition ease-in-out duration-500">
                <a class="absolute top-1/2 -left-0 my-0 mx-auto porto-prev-arrow hover:text-blue-600 duration-200"><i class="fa-solid fa-chevron-left fa-xl"></i></a>
                <a class="absolute top-1/2 -right-0 porto-next-arrow hover:text-blue-600 duration-200"><i class="fa-solid fa-chevron-right fa-xl"></i></a>
            </div>
        </div> --}}

        <div class="flex justify-end">
            <a href="#" class="text-xl font-semibold hover:text-[#1363DF]">See More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>

    

@endsection

@section('script')
    <script>
        $(document).ready(function () {

            // $(window).scroll(function () { 
            //     if ($(window).scrollTop() >= 40) {
            //         $('#navbar').removeClass('bg-transparent text-white');

            //         $('#navbar').addClass('bg-white text-black shadow-sm');
            //     } else {
            //         $('#navbar').removeClass('bg-white text-black shadow-sm');
            //         $('#navbar').addClass('bg-transparent text-white');
            //     }
            // });

            // $("img").lazyload({
            //     effect : "fadeIn"
            // });

            $('.news').slick({
                dots:true,
                lazyLoad: 'ondemand',
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: $('.news-prev-arrow'),
                nextArrow: $('.news-next-arrow'),
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                ]
            });

            $('.client').slick({
                dots:true,
                infinite: false,
                lazyLoad: 'ondemand',
                slidesToShow: 2,
                slidesToScroll: 1,
                arrow:true,
                prevArrow: $('.prev-arrow'),
                nextArrow: $('.next-arrow'),
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                ]
            });

            $('.portofolio').slick({
                dots:true,
                lazyLoad: 'ondemand',
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: $('.porto-prev-arrow'),
                nextArrow: $('.porto-next-arrow'),
                // centerMode: true,
                // centerPadding: '0px',

                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                ]
            });
        });
//         curr_slide = 1;

// sliderElemnt = document.getElementById('slider');
// total_slides = sliderElemnt.childElementCount;
// // console.log(total_slides);

// function next() {
//   if (curr_slide < total_slides) {
//     curr_slide++;
//     slide_show();
//   }
// }

// function prev() {
//   if (curr_slide > 1) {
//     curr_slide--;
//     slide_show();
//   }
// }

// function slide_show() {
//   slides = document.getElementById('slider').getElementsByTagName('li');
//   for (let index = 0; index < total_slides; index++) {
//     const element = slides[index];
//     if(curr_slide == index+1){
//       element.classList.remove('hidden');
//     }else{
//         element.classList.add('hidden');
//     }
//   }
// }
    //     	$("img").lazyload({
	//     effect : "fadeIn"
	// });
    </script>
@endsection