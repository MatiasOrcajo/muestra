<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;


use App\Models\{Categories, Products, Texts, Subcategories};

class ProductController extends Controller
{
    public function index()
    {
        $categories = Categories::orderBy('order')->get();
        $subcategories = [];
        $data = Subcategories::with('products')->get();
        foreach ($data as $subcategory) {
            $subcategories[] = $subcategory;
        }

        $object = [
            "categories"=>$categories,
            "subcategories"=>$subcategories
        ];

        return response()->json($object);
    }

    public function getCategories()
    {
        $getCategories = Categories::orderBy('order')->get();
        return response()->json($getCategories);
    }

    public function showCategory($slug)
    {
        $category = Categories::where('slug', $slug)->first();

        $subcategories = [];
        $data = Subcategories::with('products')->get();
        foreach ($data as $subcategory) {
            $subcategories[] = $subcategory;
        }

        $object = [
            "category"=>$category,
            "subcategories"=>$subcategories
        ];
        return response()->json($object);
    }

    public function showProduct($slug)
    {
        $product = Products::where('slug', $slug)->first();
        $texts = Texts::get();
        $object = ['product'=>$product,
                    'texts'=>$texts];

        return response()->json($object);
    }

    public function store(Request $request) 
    {
        
        $correo = new ContactoMailable($request->all());
        Mail::to(env('MAIL_USERNAME'))->send($correo);

        return "Mensaje Enviado";
    }
}
