<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::All();
        
        return view('pages.frontend.categories', compact('categories'));
    }

    /**
     * Category detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryDetail(Request $request, $id)
    {
        $categoryDetail = Category::find($id);

        $subCategories = Category::where('parent_id', $categoryDetail->id)->get();

        $categoryProducts = Product::where('category_id', $categoryDetail->id)->get();
        
        return view('pages.frontend.category_detail', compact('categoryDetail', 'subCategories', 'categoryProducts'));
    }
}
