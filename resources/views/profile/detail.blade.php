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
      <a href="https://www.tiktok.com/@antarestar_outdoor?lang=en" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300"
        >TIKTOK</a>
      @if ($product->instagram)
        <a href="https://www.instagram.com/{{ $product->instagram }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">INSTAGRAM</a>
      @else
        <p class="hidden"></p>
      @endif
      <a href="#" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">YOUTUBE</a>
      <a href="#" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">TWITTER</a>
      <a href="#" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">FACEBOOK</a>
      </section>
    </div>

</body>
@endsection
