<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Categories, Products, Texts};

class ProductController extends Controller
{
    public function index()
    {
        $categories = Categories::with('products')->get();
        return response()->json($categories);
    }

    public function getCategories()
    {
        $getCategories = Categories::all();
        return response()->json($getCategories);
    }

    public function showCategory($slug)
    {
        $category = Categories::where('slug', $slug)->with('products')->first();
        return response()->json($category);
    }

    public function showProduct($slug)
    {
        $product = Products::where('slug', $slug)->first();
        $texts = Texts::get();
        $object = ['product'=>$product,
                    'texts'=>$texts];

        return response()->json($object);
    }
}
