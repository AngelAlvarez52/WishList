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

    public function create(Request $request) {
        $data = $request->validate([
            'rating'=> 'required|min:1,max:5',
            'user_id'=> 'required|min:1,max:1000',
            'product_id'=> 'required|min:1,max:1000'
        ]);
        
        $Rating = Rating::create([
            'rating'=> $data['rating'],
            'user_id'=> $data['user_id'],
            'product_id'=> $data['product_id']
        ]);

        if ($Rating) {
            $object = [

                "response" => 'Succes.Itemsaved correctly.',
                "data" => $Rating
    
            ];
    
            return response()->json($object);
        }else {
            $object = [

                "response" => 'Error:Something went wrong, please try again.',
    
            ];
    
            return response()->json($object);
        }

    }




}
