<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReviewController extends Controller
{
    public function create()
    {
        return view('review.create');
    }

    public function store(Request $request)
    {
        $review = new review();
        $review->qualification = $request->input('qualification');
        $review->comment = $request->input('comment');
       
        $review->save();
        return $review;
    }

    public function index()
    {
        $review = review::orderBy('id', 'desc')->get();
        return view('review.listar', compact('review'));
    }
    public function show(review $review) {
        return view('review.show', compact('review'));
    }

    public function destroy(review $review) {
        $review->delete();
        return redirect()->route('review.index');
    }

    public function edit (review $review){
    
        return view ('review.edit',compact('review'));

    }

    public function update(Request $request,review $review ){

       
        $review->qualification = $request->input('qualification');
        $review->comment = $request->input('comment');
       
        $review->save();
        return redirect()->route('review.index');

    }
}
