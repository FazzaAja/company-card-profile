<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use WithPagination;



class HomeController extends Controller
{
    protected $paginationTheme = 'bootstrap';
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $products = Product::where('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('posisi', 'LIKE', '%' . $search . '%')
            ->orWhere('deskripsi', 'LIKE', '%' . $search . '%')
            ->paginate(8);

        return view('profile.home', compact('products'));
    }

    public function show($slug)
    {

        $product = Product::where('slug', $slug)->first();
        return view('profile.detail', ['product' => $product]);
    }
}
