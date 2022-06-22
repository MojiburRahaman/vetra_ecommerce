<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function FrontendView()
   {
    return view('frontend.main',[
        'categories' => Category::with('SubCategory')->withcount(['Product','SubCategory'])->get(),
        'Brands' => Brand::latest('id')->get(),
        'Product' => Product::latest('id')->with('Gallery')->where('status',1)->get(),
    ]);
   }
   public function ProductView(Product $product)
   {
    // return $product;
    return view('frontend.pages.product-view',[
        'product'=> $product,
        'similar_product' => Product::where('category_id',$product->category_id)->get(),
    ]);
   }
}
