@extends('products.layout')
 
@section('content')
    
<div class="p-10 center">
    <div class="row " data-theme="night">
        <div class="flex my-3">
              <a class="btn" href="{{ route('admin.create') }}"> Create New Profile</a>
           
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-zebra table-fixed  ">
        <tr>
            <th >No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Deskripsi</th>
            <th>Phone</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12"> @if ($product->image)
                    <img src="/storage/{{ $product->image }}" style="width:40px; height:40px;"  />
                @else
                    <img src="/asset/logo_no_bg.png" style="width:40px; height:40px;"  />
                @endif</div>
                </div>
               
            </td>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->posisi }}</td>
            <td>{{ $product->deskripsi }}</td>
            <td>{{ $product->phone }}</td>
            <td>{{ $product->email }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="badge badge-info" href="{{ route('products.show',$product->slug) }}">Show</a>
    
                    <a class="badge badge-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="badge badge-md text-white">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="my-5">
        {{ $products->withQueryString()->links() }}
    </div>  

</div>
@endsection