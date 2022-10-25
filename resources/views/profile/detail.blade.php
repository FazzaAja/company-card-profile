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

        <div class="grid grid-cols-3 grid-rows-1 gap-4 md:p-5  hover:bg-transparent ">
          <div class="border-2 border-white bg-white text-slate-900 rounded-full p-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">
            <a href="https://antarestar.com/">
              <svg xmlns="http://www.w3.org/2000/svg"  class="w-1/3 md:w-1/4 m-auto" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
              </svg>
            </a>
          </div>
          <div class="border-2 border-white bg-white text-slate-900 rounded-full p-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">
            <a href="http://wa.me/{{ $product->phone }}">
              <svg xmlns="http://www.w3.org/2000/svg"  class="w-1/3 md:w-1/4 m-auto" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg>
            </a>
          </div>
          <div class="flex items-center justify-center">
            <div class="border-2 border-white bg-white text-slate-900 rounded-full p-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">
              <a href="mailto:{{ $product->email }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-1/3 md:w-1/4 m-auto" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </a>
            </div>
          </div>
          <!-- <div class="bg-base-200 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-1/4 m-auto" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>
          </div> -->
        </div>

      </div>
      <a href="{{ url('vcard', $product->id) }}" class="py-2.5 w-full border-2 border-white bg-white text-center font-extrabold  text-slate-900 mt-3 mx-3 hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:animation duration-300">VCF</a>
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
