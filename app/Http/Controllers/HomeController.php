<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->paginate(6);

        return view('profile.home', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function show($slug)
    {

        $product = Product::where('slug', $slug)->first();
        return view('profile.detail', ['product' => $product]);
    }
}
