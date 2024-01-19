<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function list () {

        $Gifts = Gift::all();

        $list = [];

        foreach($Gifts as $Gift){

            $objetc = [

                "id" => $Gift->id,
                "name" => $Gift->name,
                "description" => $Gift->description,
                "url" => $Gift->url,
                "category_id" => $Gift->category_id,
                "user_id" => $Gift->user_id,
                "shop_id" => $Gift->shop_id

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $Gift = Gift::where('id','=',$id)->first();

        $object = [

            "id" => $Gift->id,
            "name" => $Gift->name,
            "description" => $Gift->description,
            "url" => $Gift->url,
            "category_id" => $Gift->category_id,
            "user_id" => $Gift->user_id,
            "shop_id" => $Gift->shop_id

        ];

        return response()->json($object);

    }
}
