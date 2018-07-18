<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

    /**
     * Product detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request, $id)
    {
        $productDetail = Product::with('category')->where('id', $id)->first();
        
        return view('pages.frontend.product_detail', compact('productDetail'));
    }
}
