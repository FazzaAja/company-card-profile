@extends('admin.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Profile</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto:</strong>
                
                {{-- <input type="hidden" name="oldImage" value="{{ $product->image }}"> --}}
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="previewImage()">
                

                @if ($product->image)
                    <img src="/storage/{{ $product->image }}" class="img-preview w-25 h-25 m-3"  />
                @else
                    <img jclass="img-preview w-25 h-25 m-3"  />
                @endif
                
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $product->nama }}" class="form-control" placeholder="Masukan Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Posisi:</strong>
                    <input type="text" name="posisi" value="{{ $product->posisi }}" class="form-control" placeholder="Masukan Posisi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Detail">{{ $product->deskripsi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $product->email }}" class="form-control" placeholder="@gmail.com">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="number" name="phone" value="{{ $product->phone }}" class="form-control" placeholder="62">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h2><strong>Opsional</strong></h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Instagram:</strong>
                    <input type="text" name="instagram" value="{{ $product->instagram }}" class="form-control" placeholder="https://">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Facebook:</strong>
                <input type="text" name="facebook" class="form-control" placeholder="https://" value="{{ $product->facebook }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tiktok:</strong>
                <input type="text" name="tiktok" class="form-control" placeholder="https://" value="{{ $product->tiktok }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Twitter:</strong>
                <input type="text" name="twitter" class="form-control" placeholder="https://" value="{{ $product->twitter }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>YouTube:</strong>
                <input type="text" name="youtube" class="form-control" placeholder="https://" value="{{ $product->youtube }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Linkedin:</strong>
                <input type="text" name="linkedin" class="form-control" placeholder="https://" value="{{ $product->linkedin }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Web Personal:</strong>
                <input type="text" name="web" class="form-control" placeholder="https://" value="{{ $product->web }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pinterest:</strong>
                <input type="text" name="pinterest" class="form-control" placeholder="https://" value="{{ $product->pinterest }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SoundCloud:</strong>
                <input type="text" name="soundcloud" class="form-control" placeholder="https://" value="{{ $product->soundcloud }}">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection