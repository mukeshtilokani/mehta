<?php

namespace App\Http\Controllers;

use JavaScript;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();

        return view('pages.backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $noImagePath = asset('img/noimage.png');
        JavaScript::put([
            'no_image_url' => $noImagePath
        ]);

        return view('pages.backend.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->description = $request->description;

        $imageOrder = json_decode($request->image_order);

        if($product->save()) {
            if($request->product_image) {
                foreach($request->product_image as $key=>$image) {
                    $media = $product->addMedia($image)
                            ->preservingOriginal()
                            ->toMediaCollection('product');
                    $media->order_column = array_search($key, $imageOrder) + 1;
                    $media->save();
                }
            }
        }

        flash()->success('Product added successfully.');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $productImages = $product->getMedia('product');
        $categories = Category::pluck('name', 'id');
        $noImagePath = asset('img/noimage.png');
        JavaScript::put([
            'no_image_url' => $noImagePath
        ]);

        return view('pages.backend.products.edit', compact('categories', 'product', 'productImages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestProductImage=$request->product_image;
        
        $product = Product::find($id);
        $productImages = $product->getMedia('product');
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->description = $request->description;
        
        $imageOrder=json_decode($request->image_order);
        $existingImagesIndex=json_decode($request->existing_images_order);

        if($product->save()) {
            if($request->removed_images!="") {
                $removedImages=explode(",", $request->removed_images);
                foreach ($removedImages as $index) {
                    $productImages[$index]->delete();
                    unset($productImages[$index]);
                }
            }

            if($request->updated_product_images!="") {
                $updatedImages=json_decode($request->updated_product_images);
                foreach ($updatedImages as $image) {
                    $index=$image->index;
                    $key = array_search($productImages[$index]->id, array_column($existingImagesIndex, 'id'));
                    $productImages[$index]->delete();
                    $media = $product->addMedia($requestProductImage[$index])
                                ->preservingOriginal()
                                ->toMediaCollection('product');
                    $productImages[$index]=$media;
                    $existingImagesIndex[$key]->id=$media->id;
                }
            }

            foreach($productImages as $media) {
                $key = array_search($media->id, array_column($existingImagesIndex, 'id'));
                $index=$existingImagesIndex[$key]->index;
                $media->order_column = array_search($index, $imageOrder) + 1;
                $media->save();
            }

            if($request->newly_added_images!="") {
                $newlyAddedImages=explode(",", $request->newly_added_images);
                foreach ($newlyAddedImages as $key=>$index) {
                    $media = $product->addMedia($requestProductImage[$index])
                         ->preservingOriginal()
                         ->toMediaCollection('product');
                    $media->order_column = array_search($index, $imageOrder) + 1;
                    $media->save();
                }
            }
        }

        flash()->success('Product updated successfully.');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->clearMediaCollection('product');

        if($product->delete()) {
            flash()->success('Product deleted successfully');
        }else {
            flash()->error(config('Data could not be deleted at this moment. Please try later.'));
        }
        return redirect()->route('products.index');
    }
}
