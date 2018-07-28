<?php

namespace App\Http\Controllers\Frontend;

use Response;
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

    /**
     * Download the product brochure
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downloadBrochure($id)
    {
        $file= storage_path(). '/app/public/products/' .$id .'/';   

        $headers = array(
              'Content-Type: application/pdf',
            );

        return Response::download($file, 'brochure.pdf', $headers);
    }    
}
