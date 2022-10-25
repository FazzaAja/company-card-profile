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

    {{-- <section class="md:w-1/2 md:p-10 w-full  p-2  h-full m-auto" > --}}
  
    {{-- </section> --}}

    <section class="md:w-1/2 md:p-10 w-full  p-2  h-full m-auto">
    <div class="flex flex-wrap justify-center items-center">
      <div class="p-5 w-full h-full">

        <div class="grid grid-cols-3 grid-rows-1 gap-4 md:  hover:bg-transparent ">

          <div class="border-2 border-white bg-white text-slate-900 p-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">
            <a href="tel://{{ $product->phone }}">
              <svg xmlns="http://www.w3.org/2000/svg"  class="w-1/3 md:w-1/4 m-auto" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg>
            </a>
          </div>
          <div class="flex items-center justify-center">
            <div class="border-2 border-white bg-white text-slate-900 p-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">
              <a href="{{ url('vcard', $product->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-1/3 md:w-1/4 m-auto"  fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="flex items-center justify-center">
            <div class="border-2 border-white bg-white text-slate-900 p-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">
              <a href="mailto:{{ $product->email }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-1/3 md:w-1/4 m-auto" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

      </div>
      <a href="wa.me/{{ $product->phone }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">WHATSAPP</a>
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
      <a href="https://antarestar.com/" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">ANTARESTAR</a>
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
