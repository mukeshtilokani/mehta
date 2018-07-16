<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class GalleriesController extends Controller
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
        $galleries = Gallery::All();

        return view('pages.backend.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pages.backend.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->title = $request->title;

        if($request->gallery_image) {
            $imageDetail = $this->uploadImage($request->gallery_image);
            $gallery->image = $imageDetail['image_url'];
            $gallery->image_file_name = $imageDetail['image_name'];
        }

        $gallery->save();

        flash()->success('Gallery added successfully.');
        return redirect()->route('admin.galleries.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Gallery $gallery
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);

        return view('pages.backend.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Gallery $gallery
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->title = $request->title;

        if($request->gallery_image) {
            $imageDetail = $this->uploadImage($request->gallery_image);
            $gallery->image = $imageDetail['image_url'];
            $gallery->image_file_name = $imageDetail['image_name'];
        }

        $gallery->save();

        flash()->success('Gallery updated successfully.');
        return redirect()->route('admin.galleries.index');
    }

    /**
     * Remove the gallery from storage.
     *
     * @param  instance of gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        if($gallery->delete()) {
            flash()->success('Gallery deleted successfully');
        }else {
            flash()->error(config('Data could not be deleted at this moment. Please try later.'));
        }
        return redirect()->route('admin.galleries.index');
    }

    public function uploadImage($image)
    {
        if($image) {
            $imageManager = new ImageManager();
            $galleryImagePath = storage_path('app/public/galleries/');
            $filename = md5(microtime(true) . rand(10,99)) . '.' . $image->getClientOriginalExtension();
            $galleryImagePath .= $filename;
            $image = $imageManager->make($image);
            $image->save($galleryImagePath);
        }

        return [
            'image_url' => asset('storage/galleries/' . $filename),
            'image_name' => $filename,
        ];
    }
}
