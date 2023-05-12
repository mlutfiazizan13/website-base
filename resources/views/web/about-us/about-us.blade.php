@extends('web.layouts.app')

@section('title', 'About Us')
@section('navbar')
    @include('web.layouts.navbar.navbar')
@endsection

@section('content')
<div class="relative bg-fixed bg-center bg-no-repeat bg-cover text-center bg-black" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/achievement.jpg') }})">
    <div class="py-20 px-3 text-white">
        <p class="text-4xl">About Us</p>
    </div>
</div> 
<div class="p-10 md:p-20">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="py-9 px-10">
            <img src="{{ asset('images/construction.jpg') }}" alt="">
        </div>
        <div class="py-9 px-10 text-left">
            <p class="text-[#06283D] font-bold text-2xl mb-3">Lorem, ipsum.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel saepe neque, labore repudiandae molestias architecto, deleniti ad dolorum vitae quae autem veritatis quisquam corporis atque unde. Exercitationem nemo accusamus molestiae deserunt unde officiis accusantium doloremque molestias laborum iusto quo itaque corrupti veritatis, natus quaerat, eius ducimus nobis ipsam? Nobis nostrum veniam fugit ipsam animi ab pariatur quaerat molestiae. Ducimus corrupti amet aut quaerat pariatur excepturi ratione quae architecto incidunt. Qui laboriosam earum fuga assumenda, officiis facilis? Placeat, quam nostrum officiis mollitia ipsa velit perspiciatis eos assumenda iste. Fugiat optio adipisci iste eaque harum neque voluptatibus, corrupti numquam aliquid deserunt. Eum!</p>

        </div>
        {{-- <div class="min-w-full bg-[#06283D] text-white rounded-lg shadow-lg">
        </div> --}}
    </div>
</div>
<div class="py-20 px-10 lg:px-40 bg-[#DFF6FF]">
    <div class="grid grid-cols-1 md:grid-cols-1 gap-10">
        <div class="flex flex-col content-center items-center">
            <div class="w-24 h-24 bg-[#06283D] text-white rounded-full grid text-center items-center content-center">
                <i class="fa-solid fa-brain fa-3x"></i>
            </div>
            <div class="py-5 text-center">
                <p class="text-3xl font-bold py-3">Vission</p>
                <p class="text-xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nobis error dolores omnis praesentium ab voluptatem commodi officiis fugit ducimus.</p>
            </div>
        </div>
        <div class="flex flex-col content-center items-center">
            <div class="w-24 h-24 bg-[#06283D] text-white rounded-full grid text-center items-center content-center">
                <i class="fa-solid fa-bullseye fa-3x"></i>
            </div>
            <div class="py-5">
                <p class="text-center text-3xl font-bold py-3">Mission</p>
                <ol class="list-disc text-xl">
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatibus dolores hic.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="py-20 text-center px-10 lg:px-40 bg-white">
    <p class="text-3xl">Our Team</p>
    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe!</p>
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