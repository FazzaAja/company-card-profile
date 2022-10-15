@extends('profile.layout')
  
@section('content')
 <body class="bg-base-200">
    <div class="p-10">

      <div class="md:px-96">
        <div class="form-control">
          <form action="" method="get">
            <div class="input-group input-group-lg mb-10">
              <input type="text" placeholder="Search…" class="input input-bordered w-full h-16" name="search"/>
              <button class="btn btn-lg btn-square" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>

      @foreach ($products->where('posisi', 'Owner Antarestar') as $produk)
        <div class="card md:w-1/4 w-full bg-base-100 shadow-xl m-auto">
          <figure class="px-10 pt-10">
            @if ($produk->image)
                        <img src="/storage/{{ $produk->image }}" alt="{{ $produk->nama }}" class="rounded-full"/> 
                    @else
                        <img src="/asset/logo_text_antarestar.jpg" alt="Antarestar" class="rounded-full"/>  
                    @endif 
          </figure>
          <div class="card-body text-center">
            <h2 class="text-2xl -mb-2 font-bold text-center">{{ $produk->nama }}</h2>
            <h2 class="text-lg font-semibold text-center">
              {{ $produk->posisi }}
            </h2>
            <div class="card-actions">
              <a href="{{ route('profile.detail',$produk->slug) }}" class="btn btn-block text-white">Lihat Profile</a>
            </div>
          </div>
        </div>
      @endforeach

      <div class="flex flex-wrap justify-center mt-10">
        @foreach ($products as $product)
        <div class="card md:w-1/5 w-full bg-base-100 shadow-xl h-[450px] mx-3 mt-5">
          <figure class="px-10 pt-10">
            @if ($product->image)
                        <img src="/storage/{{ $product->image }}" alt="{{ $product->nama }}" class="rounded-full"/> 
                    @else
                        <img src="/asset/logo_text_antarestar.jpg" alt="Antarestar" class="rounded-full"/>  
                    @endif
          </figure>
          <div class="card-body text-center">
            <h3 class="text-2xl -mb-2 font-bold text-center">
              {{ $product->nama }}
            </h3>
            <h3 class="text-lg font-semibold text-center">
              {{ $product->posisi }}
            </h3>

            <div class="card-actions">
              <a href="{{ route('profile.detail',$product->slug) }}" class="btn btn-block text-white">Lihat Profile</a>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      <div class="my-5">
        {{ $products->withQueryString()->links() }}
    </div>
    </div>
    
  </body>

@endsection
