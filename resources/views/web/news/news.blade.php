@extends('web.layouts.app')

@section('title', 'Berita')

@section('css_style')
<style>
    .overlay {
      position: relative;
    }
    
    .overlay img {
      width: 100%;
      height: auto;
    }
    
    .overlay::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      height: 100%;
      width: 100%;
      background-image: linear-gradient(0deg, rgb(0, 0, 0), transparent 50%);
      poionter-events: none;
      border-radius: 0.5rem;
    }
    
    .overlay-content {
      position: absolute;
      bottom: 0;
      left: 0;
      z-index: 2;
      padding: 1em;
    }
  </style>
@endsection

@section('content')
{{-- <div class="relative bg-fixed bg-center bg-no-repeat bg-cover text-center bg-black" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/achievement.jpg') }})">
    <div class="py-20 px-3 text-white">
        <p class="text-4xl">Project</p>
    </div>
</div>  --}}
{{-- <p>{{ \Request::getSession()->getId() }}</p>
<p>{{ \Request::getClientIp() }}</p>
<p>{{ \Request::header('User-Agent') }}</p> --}}
<p class="text-4xl font-semibold text-center">Berita</p>
<div class="p-5 md:p-10 lg:p-20">

    <div class="grid grid-cols-1 lg:grid-cols-3">
        <div class="grid grid-cols-1 gap-10 col-span-2">
        @if ($news->isEmpty())
            <div class="text-center">
                <p class="text-2xl">Tidak ada Berita</p>
            </div>
        @else
            @foreach ($news as $n)
                <a href="{{ route('news.detail', $n->slug) }}" class="grid grid-cols-1 lg:flex gap-10 lg:gap-5">
                    <div>
                        <div class="hidden lg:block bg-center bg-cover bg-no-repeat h-40 w-64" style="background-image: url({{ $n->image_url }})"></div>
                        <img class="w-full lg:hidden" src="{{ $n->image_url }}" alt="">
                    </div>
                    <div>
                        <p class="font-semibold text-2xl hover:underline decoration-[#00a549]">{{ $n->title }}</p>
                        <div class="py-2 flex flex-col lg:flex-row lg:gap-10 text-lg">
                            <p>By <span class="font-semibold">{{ $n->created_by }}</span></p>
                            <p class="font-semibold text-gray-700">{{ Carbon\Carbon::parse($n->created_at)->translatedFormat('d F Y') }}</p>
                        </div>
                        <p>{{ $n->content_preview }}</p>
                    </div>
                </a>
            @endforeach
        @endif
        {{ $news->links('pagination::simple-tailwind') }}

        </div>

        <div class="text-center py-20 lg:py-0">
            <div class="lg:px-10 justify-items-center">
                <p class="text-2xl font-bold pb-5">Trending Post</p>
                <hr class="border-2 border-[#00a549]">
                <div class="grid grid-cols-1 gap-3 text-left py-6">
                    @if ($news->isEmpty())
                        <div class="text-center">
                            <p class="text-xl">Tidak ada berita</p>
                        </div>
                    @else
                        @foreach ($news as $n)
                            <a href="{{ route('news.detail', $n->slug) }}" class="text-lg font-semibold underline decoration-[#00a549] decoration-2 hover:decoration-dashed">{{ $n->title }}</a>
                        @endforeach                
                    @endif

                </div>
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