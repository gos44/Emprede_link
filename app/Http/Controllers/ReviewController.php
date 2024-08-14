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
        $review = new Review();
        $review->qualification = $request->input('qualification');
        $review->comment = $request->input('comment');
       
        $review->save();
        return $review;
    }

    public function index()
    {
        $review = Review::orderBy('id', 'desc')->get();
        return view('review.listar', compact('review'));
    }
    public function show(Review $review) {
        return view('review.show', compact('review'));
    }

    public function destroy(Review $review) {
        $review->delete();
        return redirect()->route('review.index');
    }

    public function edit (Review $review){
    
        return view ('review.edit',compact('review'));

    }

    public function update(Request $request,Review $review ){

       
        $review->qualification = $request->input('qualification');
        $review->comment = $request->input('comment');
       
        $review->save();
        return redirect()->route('review.index');

    }
}
