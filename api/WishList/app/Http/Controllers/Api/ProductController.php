<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list () {

        $Products = Product::all();

        $list = [];

        foreach($Products as $Product){

            $objetc = [

                "id" => $Product->id,
                "name" => $Product->name,
                "description" => $Product->description,
                "price" => $Product->price,
                "image" => $Product->image,
                "category_id" => $Product->category_id

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $Product = Product::where('id','=',$id)->first();

        $object = [

            "id" => $Product->id,
            "name" => $Product->name,
            "description" => $Product->description,
            "price" => $Product->price,
            "image" => $Product->image,
            "category_id" => $Product->category_id

        ];

        return response()->json($object);

    }
}
