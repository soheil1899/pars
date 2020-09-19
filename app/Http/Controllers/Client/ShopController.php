<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function getProducts(Request $request)
    {
        if ($request->category_id != 0)
            return Product::where('category_id', $request->category_id)->paginate(9);

        return Product::paginate(9);
    }

    public function getProduct(Request $request)
    {
        return Product::where('id', $request->productid)->with('category', 'gallery', 'attributes.product_values')->first();
    }

    public function getProductGroup()
    {
        return Category::where('parent_id', '<>', 0)->get();
    }
}
