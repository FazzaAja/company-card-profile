<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="night">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>Admin Antarestar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
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
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <div id="app">
        <div class="navbar bg-base-200 ">
   <div class="container">        
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl" href="{{ url('/') }}">Antarestar</a>
  </div>
   <ul>
                <li>  @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="badge badge-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="badge badge-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                    <a class="dropdown-item badge badge-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                        @endguest</li>
            </ul>
  <div class="flex-none gap-2">
     
                                   
                                
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