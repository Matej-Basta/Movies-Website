<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store()
    {

        // dd("doooo");
        $review = new Review;
        $review->text = $_POST["value"];
        $review->movie_id = $_POST["movie_id"];
        $review->save();

        return redirect()->back();
    }
}
