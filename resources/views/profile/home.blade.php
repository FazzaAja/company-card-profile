@extends('profile.layout')
  
@section('content')
<body>
  <div class="p-10 flex flex-wrap justify-center ">

    @foreach ($products as $product)
      <div class="card card-compact md:w-1/4 w-full  bg-base-100 shadow-xl h-[400px] mx-3 mt-5">
        <figure>@if ($product->image)
                        <img src="/storage/{{ $product->image }}" alt="{{ $product->nama }}" class="rounded-full m-auto w-[250px] h-[250px]"/> 
                    @else
                        <img src="/asset/logo_text_antarestar.jpg" alt="Antarestar" class="rounded-full m-auto w-[250px] h-[250px]"/>  
                    @endif
        </figure>
        <div class="card-body">
          <h2 class="text-xl font-semibold text-left ">{{ $product->nama }}</h2>
          <a href="{{ route('profile.detail',$product->slug) }}" class="btn btn-primary">Lihat Profile</a>   
        </div>
      </div>
    @endforeach

  </div>
</body>

@endsection
