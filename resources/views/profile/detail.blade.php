@extends('profile.layout')
  
@section('content')
<body class="" style="background-color: #1c1c1c">
   
    <div class="bg-white h-auto text-center relative m-auto flex items-center">
      <img src="/asset/text_logo_antarestar.png" alt="" class="  w-26  h-16    m-auto" />
    </div>
    <!-- img section -->
    <section class="pb-26">
      <div class="m-auto w-[250px] md:w-[300px] p-10 visible hover:animate-pulse duration-200">
        @if ($product->image)
            <img src="/storage/{{ $product->image }}" alt="{{ $product->nama }}" class="rounded-full hover:aspect-auto"/>
          @else
            <img src="/asset/logo_text_antarestar.jpg" alt="Antarestar" class="rounded-full hover:aspect-auto"/>  
          @endif
      </div>
      <h1 class="font-extra-bold text-4xl text-center text-white">
        {{ $product->nama }}
      </h1>
      <h3 class="font-semi-bold   text-center text-slate-200 mt-3">
        {{ $product->posisi }}
      </h3>
      <h3 class="font-semi-bold text-center text-slate-200">
        {{ $product->deskripsi }}
      </h3>
    </section>
    <!-- button section -->
    <section class="mt-5 m-auto h-[450px]   max-w-[300px]  ">
    <div class="flex flex-wrap justify-center items-center">
      @if ($product->instagram)
        <a href="{{ $product->instagram }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">INSTAGRAM</a>
      @else
        <p class="hidden"></p>
      @endif
      @if ($product->facebook)
        <a href="{{ $product->facebook }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">FACEBOOK</a>
      @else
        <p class="hidden"></p>
      @endif
      @if ($product->tiktok)
        <a href="{{ $product->tiktok }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">TIKTOK</a>
      @else
        <p class="hidden"></p>
      @endif
      @if ($product->twitter)
        <a href="{{ $product->twitter }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">TWITTER</a>
      @else
        <p class="hidden"></p>
      @endif
      @if ($product->youtube)
        <a href="{{ $product->youtube }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">YOUTUBEE</a>
      @else
        <p class="hidden"></p>
      @endif
      @if ($product->linkedin)
        <a href="{{ $product->linkedin }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">LINKEDIN</a>
      @else
        <p class="hidden"></p>
      @endif
      @if ($product->web)
        <a href="{{ $product->web }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">WEB PERSONAL</a>
      @else
        <p class="hidden"></p>
      @endif
      @if ($product->pinterest)
        <a href="{{ $product->pinterest }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">PINTEREST</a>
      @else
        <p class="hidden"></p>
      @endif
      @if ($product->soundcloud)
        <a href="{{ $product->soundcloud }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">SOUND CLOUD</a>
      @else
        <p class="hidden"></p>
      @endif
     </section>
    </div>

</body>
@endsection
