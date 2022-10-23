@extends('admin.layout')
  
@section('content')
 <div class="container">
<div class="grid grid-cols-2 gap-4">
    <div class="col-lg-6">
        <h2 class="text-3xl  font-bold mx-auto"> Profile</h2>
        <div class="pull-right">
            <a class="badge badge-primary my-2" href="{{ route('admin.index') }}"> Back</a>
            <a class="badge badge-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
        </div>
        <div class="row">
            <div class="card w-96 bg-base-100 shadow-xl">
            @if ($product->image)
                        <img src="/storage/{{ $product->image }}" class="img-preview w-50 h-50 m-3"/>
                    @else
                        <img src="/asset/logo_no_bg.png" style="width:250px; height:250px;"  />
                    @endif
        </div>
        <div class="form-group row">
           <h4 style="font-weight: 600">Nama <span>:</span> <span style="font-weight:400">{{ $product->nama }}</span></h4>
           <h4 style="font-weight: 600">Posisi <span>:</span> <span style="font-weight:400">{{ $product->posisi }}</span></h4>
           <h4 style="font-weight: 600">Deskripsi <span>:</span> <span style="font-weight:400">{{ $product->deskripsi }}</span></h4>
           <h4 style="font-weight: 600">Email <span>:</span> <span style="font-weight:400">{{ $product->email }}</span></h4>
           <h4 style="font-weight: 600">Phone <span>:</span> <span style="font-weight:400">{{ $product->phone }}</span></h4>
        </div>
        </div>
    </div>
    <div class="w-full">
        <table class="table table-fixed table-zebra w-full">
            <thead>
                <tr class="font-bold text-3xl">
                    <th class="font-bold text-xl">Sosmed</th>
                    <th class="font-bold text-xl">Status</th>				
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Instagram</td>
                    <td>@if ($product->instagram)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
                <tr>
                    <td>Facebook</td>
                    <td>@if ($product->facebook)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
                <tr>
                    <td>Tiktok</td>
                    <td>@if ($product->tiktok)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
                <tr>
                    <td>Twitter</td>
                    <td>@if ($product->twitter)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
                <tr>
                    <td>YouTube</td>
                    <td>@if ($product->youtube)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
                <tr>
                    <td>Linkedin</td>
                    <td>@if ($product->linkedin)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
                <tr>
                    <td>Web</td>
                    <td>@if ($product->web)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
                <tr>
                    <td>Pinterest</td>
                    <td>@if ($product->pinterest)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
                <tr>
                    <td>SoundCloud</td>
                    <td>@if ($product->soundcloud)
                        Ada
                    @else
                        Tidak Ada 
                    @endif</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
</div>