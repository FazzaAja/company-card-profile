<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="night">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Antarestar</title>
    
  
    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
         container: {
      center: true,
      padding: "16px",
    },
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
    
    <div id="app" class="">
        
        <div class="navbar bg-base-200 ">
   <div class="container">        
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl" href="{{ url('/') }}">Antarestar</a>
  </div>
   <ul>
                <li> <a class=" badge-primary badge" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
          </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                        @csrf
                                    </form></li>
            </ul>
  <div class="flex-none gap-2">
     <form action="" method="get">
        <div class="input-group mx-3 items-center" name="search">
    <input type="text" placeholder="Search…" class="input  input-bordered" name="search"  />
    <button class="btn  btn-square" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
    </button>
  </div>
            </form>
           
        
                                
    </div> 
  </div>
</div>

       

        <main class="py-4">
    
<div class="container">
    @yield('content')
</div>
    
</body>
<script>

function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
</script>
</html>

