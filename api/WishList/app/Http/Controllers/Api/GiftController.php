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

        foreach($Gifts as $gift){

            $objetc = [

                "id" => $gift->id,
                "name" => $gift->name,
                "description" => $gift->description,
                "url" => $gift->url,
                "price" => $gift->price,
                "image" => $gift->image,
                "category_id" => $gift->category_id,
                "user_id" => $gift->user_id,
                "shop_id" => $gift->shop_id

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function gitf_user(Request $request) {
        // Obtener el ID de usuario del parámetro de consulta
        $userId = $request->query('user_id');

        // Filtrar los regalos por el ID de usuario
        $gifts = Gift::where('user_id', $userId)->get();

        // Construir la respuesta JSON
        $list = $gifts->map(function($gift) {
            return [
                "id" => $gift->id,
                "name" => $gift->name,
                "description" => $gift->description,
                "url" => $gift->url,
                "price" => $gift->price,
                "image" => $gift->image,
                "category_id" => $gift->category_id,
                "user_id" => $gift->user_id,
                "shop_id" => $gift->shop_id
            ];
        });

        return response()->json($list);
    }
    public function item ($id) {

        $Gift = Gift::where('id','=',$id)->first();

        $object = [

            "id" => $Gift->id,
            "name" => $Gift->name,
            "description" => $Gift->description,
            "url" => $Gift->url,
            "price" => $Gift->price,
            "image" => $Gift->image,
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
            'url'=> 'required|min:1',
            'price'=> 'required|min:1,max:50',
            'image'=> 'required',
            'category_id'=> 'required|min:1,max:100',
            'user_id'=> 'required|min:1,max:100',
            'shop_id'=> 'required|min:1,max:100',
        ]);
        $Gift = Gift::create([
            'name'=> $data['name'],
            'description'=> $data['description'],
            'url'=> $data['url'],
            'price'=> $data['price'],
            'image'=> $data['image'],
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
            'id' => 'required|integer',
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'url' => 'required|min:1',
            'price' => 'required|min:1',
            'image' => 'sometimes|min:1', // El campo de imagen ahora es opcional
        ]);
        
        $gift = Gift::find($data['id']);
        if(!$gift) {
            return response()->json(["response" => 'Error: Gift not found.'], 404);
        }
    
        $gift->name = $data['name'];
        $gift->description = $data['description'];
        $gift->url = $data['url'];
        $gift->price = $data['price'];
    
        // Solo actualiza la imagen si se proporcionó
        if(isset($data['image'])) {
            $gift->image = $data['image'];
        }
        
        if($gift->save()){
            $object = [
                "response" => 'Success. Item updated successfully.',
                "data" => $gift
            ];
            return response()->json($object);
        } else {
            $object = [
                "response" => 'Error: Something went wrong, please try again.',
            ];
            return response()->json($object, 500);
        }
    }
    


    public function delete($id) {
        $gift = Gift::find($id);
    
        if (!$gift) {
            return response()->json(['response' => 'Error: Gift not found.'], 404);
        }
    
        if ($gift->delete()) {
            return response()->json(['response' => 'Success: Gift deleted successfully.']);
        } else {
            return response()->json(['response' => 'Error: Something went wrong while deleting the gift.'], 500);
        }
    }
    
}
