<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $products = Product::all();
        $productCategories = Category::all();
        $galleries = Gallery::all();

        return view('pages.backend.dashboard.index', compact('products', 'productCategories', 'galleries'));
    }
}
