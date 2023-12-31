<?php

namespace App\Http\Controllers;

use App\Models\Cataloge;
use App\Models\Category;
use App\Models\Product;
use App\Models\Starse;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {

        $products_count = Product::count();
        $categories_count = Category::count();

        return view('admin.dashboard',[

            'products_count' => $products_count,
            'categories_count' => $categories_count,

        ]);

    }

    public function index()
    {
        $otherProducts = Product::limit(20)->latest()->get();
        $categories = Category::all();
        $categories_spacial = Category::where('spacial','on')->get();

        return view('index',compact('otherProducts','categories','categories_spacial'));
    }

    public function about()
    {
        $categories = Category::all();

        return view('about',compact('categories'));
    }

    public function catalog()
    {
        $products = Product::limit(20)->latest()->get();
        $otherProducts = Product::limit(20)->latest()->get();
        $categories = Category::all();
        return view('catalog',compact('otherProducts','categories','products'));
    }
    public function productDetail ($slug)
    {
        $product = Product::where('slug',$slug)->first();
//        $otherProducts = Category::where('slug',$slug)->first();

        $otherProducts = Product::limit(50)->latest()->get();
//        $otherProducts = Product::where('categories_id',$product->categories_id)->where('id', '!=', $product->id)->limit(3)->latest()->get();
//        dd($otherPosts);
//        $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();
        return view('product',compact('product','otherProducts'));
    }

    public function catalog_products($category_id)
    {
        $categories = Category::all();
        $products = Product::where('category_id',$category_id)->get();
        return view('catalog',compact('products', 'categories'));
    }

    public function sed()
    {
        back('sed') ;
    }


}
