<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Categories, Products, Texts};

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function categories()
    {
        $categories = Categories::all();

        return view('categories', compact('categories'));
    }

    public function createCategory(Request $request)
    {
        $category = new Categories;
        $category->title = $request->title;
        $category->slug = $request->slug;

        $category->save();

        return redirect()->back();
    }

    public function showCategory(Categories $category)
    {
        $products = $category->products;
        return view('category', compact('products', 'category'));
    }

    public function deleteCategory(Categories $category)
    {
        $category->delete();
        return redirect()->back();
    }

    public function editCategory(Request $request, Categories $category)
    {
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->save();

        return redirect()->back();
    }

    public function editProduct($slug)
    {
        $product = Products::where('slug', $slug)->first();
        return view('editProduct', compact('product'));
    }

    public function updateProduct(Request $request)
    {
        $product = Products::where('id', $request->id)->first();

        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->slug = $request->slug;
        $product->A = $request->A;
        $product->B = $request->B;
        $product->C = $request->C;

        $product->save();

        return redirect(route('dashboard.show.category', $product->categories->id));
    }

    public function deleteProduct(Products $product)
    {
        $product->delete();

        return redirect()->back();
    }

    public function createProduct(Request $request)
    {
        $product = new Products;

        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->slug = $request->slug;
        $product->A = $request->A;
        $product->B = $request->B;
        $product->C = $request->C;
        $product->save();

        return redirect()->back();
    }

    public function products()
    {
        $products = Products::all();
        return view('products', compact('products'));
    }
}
