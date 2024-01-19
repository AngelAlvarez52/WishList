<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function list () {

        $Ratings = Rating::all();

        $list = [];

        foreach($Ratings as $Rating){

            $objetc = [

                "id" => $Rating->id,
                "rating" => $Rating->rating,
                "user_id" => $Rating->user_id,
                "product_id" => $Rating->product_id

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $Rating = Rating::where('id','=',$id)->first();

        $object = [

            "id" => $Rating->id,
            "rating" => $Rating->rating,
            "user_id" => $Rating->user_id,
            "product_id" => $Rating->product_id

        ];

        return response()->json($object);

    }
}
