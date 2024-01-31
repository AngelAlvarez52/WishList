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

    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:5,max:50',
            'description'=> 'required|min:5,max:50',
            'url'=> 'required|min:1,max:50',
            'category_id'=> 'required|min:1,max:50',
            'user_id'=> 'required|min:1,max:50',
            'shop_id'=> 'required|min:1,max:50'
        ]);
        
        $Gift = Gift::create([
            'name'=> $data['name'],
            'description'=> $data['description'],
            'url'=> $data['url'],
            'category_id'=> $data['category_id'],
            'user_id'=> $data['user_id'],
            'shop_id'=> $data['shop_id']
        ]);

        if ($Gift) {
            $object = [

                "response" => 'Succes.Itemsaved correctly.',
                "data" => $Gift
    
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
            'description' => 'required|min:3',
            'url' => 'required|min:3'
        ]);
        
        $gift = Gift::where("id","=", $data['id'])->first();
        $gift->name=$data['name'];
        $gift->description=$data['description'];
        $gift->url=$data['url'];
        
        if($gift->update()){
            $object =[
            "response"=>'Sucess. Item update successfully.',
            "data"=> $gift
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
