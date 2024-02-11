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

    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:5,max:50',
            'adress'=> 'required|min:5,max:50',
            'cel'=> 'required|min:1,max:50'
        ]);
        
        $Shop = Shop::create([
            'name'=> $data['name'],
            'adress'=> $data['adress'],
            'cel'=> $data['cel']
        ]);

        if ($Shop) {
            $object = [

                "response" => 'Succes.Itemsaved correctly.',
                "data" => $Shop
    
            ];
    
            return response()->json($object);
        }else {
            $object = [

                "response" => 'Error:Something went wrong, please try again.',
    
            ];
    
            return response()->json($object);
        }

    }

    public function update(Request $request){
        $data = $request->validate([
            'id'=>'required|min:1',
            'name' => 'required|min:3',
            'adress' => 'required|min:3',
            'cel' => 'required|min:3'
        ]);
        
        $shop = Shop::where("id","=", $data['id'])->first();
        $shop->name=$data['name'];
        $shop->adress=$data['adress'];
        $shop->cel=$data['cel'];
        
        if($shop->update()){
            $object =[
            "response"=>'Sucess. Item update successfully.',
            "data"=> $shop
            ];

            return response()->json($object);
        } else {
            $object = [

                "response" => 'Error:Something went wrong, please try again.',
    
            ];
    
            return response()->json($object);
        }
    }


}
