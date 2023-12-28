<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class MyCommerceController extends Controller
{
    private $reviews,  $text, $products;
    public function index()

    {
        return view('website.home.index',[

            'categories' => Category::all()->take('6'),
            'products'    => Product::orderBy('id', 'desc')->take('12')->get(['id', 'category_id', 'name', 'selling_price', 'image']),

        ]);
    }

    public function ajaxSearch()
    {
        $this->text = $_GET['text'];
        $this->products = Product::where('name', 'LIKE', "%($this->text)%")->get();
        return response()->json($this->products);
    }

    public function category($id)
    {
        return view('website.category.index',[
            'categories' => Category::all(),
           'products' =>Product::where('category_id',$id)->orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($id)
    {
        $reviews = Review::all();
        return view('website.detail.index',[
            'product' => Product::find($id),
            'reviews'  => Review::all(),
            compact('reviews'),
        ]);
    }
}
