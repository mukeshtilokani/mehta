<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param MarketService $service
     */
    function __construct()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::All();

        return view('pages.backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $parentCategories = Category::pluck('name', 'id');

        return view('pages.backend.categories.create', compact('parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent;
        $category->description = $request->description;
        $category->save();

        flash()->success('Category added successfully.');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $parentCategories = Category::pluck('name', 'id');

        return view('pages.backend.categories.edit', compact('parentCategories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent;
        $category->description = $request->description;
        $category->save();

        flash()->success('Category updated successfully.');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the category from storage.
     *
     * @param  instance of category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category = Category::find($id);

        if($category->delete()) {
            flash()->success('Category deleted successfully');
        }else {
            flash()->error(config('Data could not be deleted at this moment. Please try later.'));
        }
        return redirect()->route('admin.categories.index');
    }
}
