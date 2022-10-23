@extends('admin.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center text-3xl font-bold">Edit Profile</h2>
            </div>
            <div class="pull-right">
                <a class="badge badge-lg badge-secondary" href="{{ route('admin.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="text-center alert alert-error block">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul class="block">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li><br>
                @endforeach
            </ul>
        </div>
    @endif
  
   

    
<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[700px] h-full">
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
          @method('PUT')
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="nama"
              class="mb-3 block text-base font-medium "
            >
            Nama
            </label>
            <input type="text" name="nama" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Masukan Nama" value="{{ $product->nama }}">
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="lName"
              class="mb-3 block text-base font-medium "
            >
              Posisi
            </label>
            <input type="text" name="posisi" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Masukan Posisi" value="{{ $product->posisi }}">
          </div>
        </div>
      </div>
      <div class="mb-5">
        <label
          for="guest"
          class="mb-3 block text-base font-medium "
        >
          foto
        </label>
      <input type="file" name="image" class="block w-full text-sm text-gray-500 file:py-2 file:px-6 file:rounded file:border-1 file:border-gray-400 @error('image') is-invalid @enderror" id="image" onchange="previewImage()">
                

                @if ($product->image)
                    <img src="/storage/{{ $product->image }}" class="img-preview w-25 h-25 m-3"  />
                @else
                    <img jclass="img-preview w-20 h-20 m-3"  />
                @endif
                
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
      </div>

      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="date"
              class="mb-3 block text-base font-medium "
            >
              email
            </label>
            <input type="email" name="email" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="@gmail.com" value="{{ $product->email }}">
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Phone
            </label>
             <input type="number" name="phone" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"  placeholder="62" value="{{ $product->phone }}">
          </div>
        </div>
         <div class="w-full px-3">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              deskripsi    
            </label>
               <textarea class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" style="height:150px" name="deskripsi" placeholder="mausakan deskripsi">{{ $product->deskripsi }}</textarea>
          </div>
      </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Instagram
            </label>
              <input type="text" name="instagram" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->instagram }}">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Facebook
            </label>
              <input type="text" name="facebook" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->facebook }}">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Tiktok
            </label>
              <input type="text" name="tiktok" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->tiktok }}">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Twitter
            </label>
              <input type="text" name="twitter" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->twitter }}">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Youtube
            </label>
              <input type="text" name="youtube" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->youtube }}">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Linkedin
            </label>
              <input type="text" name="linkedin" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->linkedin }}">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
            SoundCloud
            </label>
              <input type="text" name="soundcloud" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->soundcloud }}">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Pinterest
            </label>
              <input type="text" name="pinterest" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->pinterest }}">
          </div>
          
        </div>
          <div class="w-full px-3">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Web Personal 
            </label>
              <input type="text" name="web" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="{{ $product->web }}">
          </div>
      </div>
         


      <div class="flex flex-wrap">
       
        <div class=" ">
          
          
        </div>
      </div>
      </div>
      <div>
        <button
          class="btn btn-primary"
        >
          Submit
        </button>
      </div>
    </form>
  </div>
</div>
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
@endsection