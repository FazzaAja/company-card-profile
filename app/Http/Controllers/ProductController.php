<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('admin.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $requestData = $request->all();
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'nama' => 'required',
            'posisi' => 'required',
            'deskripsi' => 'required',
            'email' => 'required|email||ends_with:@gmail.com',
            'phone' => 'required|digits_between:11,14|numeric|starts_with:62',
        ]);

        // upload img

        $path = '';

        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $path = $request->file('image')->storeAs('image',  $newName, 'public');
        }

        $requestData['image'] = $path;
        Product::create($requestData);

        return redirect()->route('admin.index')
            ->with('success', 'Product created successfully.')
            ->with('image');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $product = Product::where('slug', $slug)->first();
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $requestData = $request->all();
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'nama' => 'required',
            'posisi' => 'required',
            'deskripsi' => 'required',
            'email' => 'required|email||ends_with:@gmail.com',
            'phone' => 'required|digits_between:11,14|numeric|starts_with:62',
        ]);

        $path = '';

        if ($request->file('image')) {
            if ($product->image) {
                unlink(public_path('/storage/' . $product->image));
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $path = $request->file('image')->storeAs('image',  $newName, 'public');
            $requestData['image'] = $path;
        } else {
            unset($requestData['image']);
        }

        $product->update($requestData);

        return redirect()->route('admin.index')
            ->with('success', 'Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            unlink(public_path('/storage/' . $product->image));
        }
        $product->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Product deleted successfully');
    }
}
