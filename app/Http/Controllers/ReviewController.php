<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('website.home.index', compact('reviews'),[
            'categories' => Category::all()->take('6'),
            'products'    => Product::orderBy('id', 'desc')->take('12')->get(['id', 'category_id', 'name', 'selling_price', 'image'])
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'rating' => 'required|integer|between:1,5',
        ]);

        Review::created([

            'customer_id' => auth()->id(),
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect('/reviews')->with('success', 'Review submitted successfully!');
    }
}
