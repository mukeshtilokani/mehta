<?php

namespace App\Http\Controllers;

use Config;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Jobs\ImageConversion;
use Intervention\Image\ImageManager;

class CategoriesController extends Controller
{

    /**
    * @var predefined image path
    */
    protected $imagePath;

    /**
    * @var predefined conversion sizes
    */
    protected $conversions;

    /**
     * Create a new controller instance.
     *
     * @param MarketService $service
     */
    function __construct()
    {
        $this->imagePath = Config::get('config-variables.imagePath');
        $this->conversions = Config::get('img-conversion.conversions');
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

        if($request->category_image) {
            $imageDetail = $this->uploadImage($request->category_image);
            $category->image = $imageDetail['image_url'];
            $category->image_file_name = $imageDetail['image_name'];
        }

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

        if($request->category_image) {
            $imageDetail = $this->uploadImage($request->category_image);
            $category->image = $imageDetail['image_url'];
            $category->image_file_name = $imageDetail['image_name'];
        }

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
    public function destroy($id)
    {
        $category = Category::find($id);

        if($category->delete()) {
            flash()->success('Category deleted successfully');
        }else {
            flash()->error(config('Data could not be deleted at this moment. Please try later.'));
        }
        return redirect()->route('admin.categories.index');
    }

    public function uploadImage($image)
    {
        if($image) {
            $imageManager = new ImageManager();
            $categoryImagePath = storage_path('app/public/categories/');
            $filename = md5(microtime(true) . rand(10,99)) . '.' . $image->getClientOriginalExtension();
            $categoryImagePath .= $filename;
            $image = $imageManager->make($image);
            $image->save($categoryImagePath);

            ImageConversion::dispatch(
              $filename,
              $this->imagePath['category_image'],
              $this->conversions['category_image']
            );
        }

        return [
            'image_url' => asset('storage/categories/' . $filename),
            'image_name' => $filename,
        ];
    }

    public function changeDisplayOnHomePageStatus(Request $request)
    {
        $category = Category::find($request->categoryId);
        $category->is_show_on_home_page = $request->isChecked;
        $category->save();

        return $category;
    }
}
