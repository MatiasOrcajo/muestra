<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Categories, Products, Texts, SeoGlobal};
use Illuminate\Support\Str;

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
        $category->slug = Str::slug($request->title);
        $category->order = $request->order;

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
        // dd($category, $request->title);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->order = $request->order;
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
        $product->slug = Str::slug($request->title);
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
        $product->slug = Str::slug($request->title);
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

    public function texts()
    {
        $texts = Texts::all();
        return view('texts', compact('texts'));
    }

    public function createTexts(Request $request)
    {
        $text = new Texts;

        $text->cliente_a = $request->cliente_a;
        $text->cliente_b = $request->cliente_b;
        $text->cliente_c = $request->cliente_c;

        $text->save();

        return redirect()->back();
    }

    public function editTexts(Request $request)
    {
        $text = Texts::first();

        $text->cliente_a = $request->cliente_a;
        $text->cliente_b = $request->cliente_b;
        $text->cliente_c = $request->cliente_c;

        $text->save();

        return redirect()->back();
    }

    public function seoGlobal()
    {
        $seo = SeoGlobal::first();
        $head = $seo->head;
        $body = $seo->body;

        return view('seo', compact('head', 'body'));
    }

    public function addSeoGlobal(Request $request)
    {
        $seo = SeoGlobal::first();
        $seo->head = $request->head;
        $seo->body = $request->body;

        $seo->save();

        return redirect()->back();
    }

}
