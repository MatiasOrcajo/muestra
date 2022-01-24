<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Categories, Products, Texts, SeoGlobal, Subcategories};
use Illuminate\Support\Facades\Artisan;
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
        
        Artisan::call('sitemap:generate');
        return redirect()->back();
    }

    public function showCategory(Categories $category)
    {
        $subcategories = $category->subcategories;
        return view('category', compact('subcategories', 'category'));
    }

    public function deleteCategory(Categories $category)
    {
        $category->delete();
        
        Artisan::call('sitemap:generate');
        return redirect()->back();
    }

    public function showSubcategory(Subcategories $subcategory)
    {
        return view('subcategory', compact('subcategory'));
    }

    public function editCategory(Request $request, Categories $category)
    {
        // dd($category, $request->title);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->order = $request->order;
        $category->save();
        
        Artisan::call('sitemap:generate');
        return redirect()->back();
    }

    public function createSubcategory(Request $request)
    {
        $subcategory = new Subcategories;
        $subcategory->title = $request->title;
        $subcategory->category_id = $request->category_id;

        $subcategory->save();

        return redirect()->back();
    }

    public function deleteSubcategory(Subcategories $subcategory)
    {
        $subcategory->delete();

        Artisan::call('sitemap:generate');
        return redirect()->back();
    }

    public function editSubcategory(Subcategories $subcategery)
    {
        $subcategory = Subcategories::where('id', $request->id)->first();
        return view('editSubcategory', compact('subcategory'));
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
        
        Artisan::call('sitemap:generate');
        return redirect(route('dashboard.show.subcategory', $product->subcategories->id));
    }

    public function deleteProduct(Products $product)
    {
        $product->delete();
        
        Artisan::call('sitemap:generate');
        return redirect()->back();
    }

    public function createProduct(Request $request)
    {
        $product = new Products;

        $product->subcategory_id = $request->subcategory_id;
        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->slug = Str::slug($request->title);
        $product->A = $request->A;
        $product->B = $request->B;
        $product->C = $request->C;
        $product->save();
        
        Artisan::call('sitemap:generate');
        return redirect()->back();
    }

    public function products()
    {
        $products = Products::orderBy('id')->get();
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
    
    public function logout()
    {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('login');
    }

}
