<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function list () {

        $Shops = Shop::all();

        $list = [];

        foreach($Shops as $Shop){

            $objetc = [

                "id" => $Shop->id,
                "name" => $Shop->name,
                "adress" => $Shop->adress,
                "cel" => $Shop->cel

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $Shop = Shop::where('id','=',$id)->first();

        $object = [

            "id" => $Shop->id,
            "name" => $Shop->name,
            "adress" => $Shop->adress,
                "cel" => $Shop->cel

        ];

        return response()->json($object);

    }
}
