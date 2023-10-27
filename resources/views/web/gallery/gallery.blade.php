@extends('web.layouts.app')

@section('title', 'Galeri')

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
<p class="text-4xl font-semibold text-center">Galeri</p>
<div class="p-10 md:p-20">

  @if ($galleries->isEmpty())
      <div class="text-center">
          <p class="text-2xl">Tidak ada foto</p>
      </div>
  @else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

      @foreach ($galleries as $g)
        <div>
          <div class="overlay">
            <img class="rounded-lg" data-original="{{ $g->image_url }}" alt="{{ $g->title }}" />
            <div class="overlay-content">
              <p class="text-white">{{ $g->title }}<p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  @endif

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

        $("img").lazyload({
            effect : "fadeIn"
        });
    });    
</script>    

@endsection