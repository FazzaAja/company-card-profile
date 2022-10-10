@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Profile Card</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Deskripsi</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Instagram</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>@if ($product->image)
                    <img src="/storage/{{ $product->image }}" style="width:40px; height:40px;"  />
                @else
                    <img src="/asset/logo_no_bg.png" style="width:40px; height:40px;"  />
                @endif
            </td>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->posisi }}</td>
            <td>{{ $product->deskripsi }}</td>
            <td>{{ $product->email }}</td>
            <td>{{ $product->phone }}</td>
            <td>{{ $product->instagram }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->slug) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection