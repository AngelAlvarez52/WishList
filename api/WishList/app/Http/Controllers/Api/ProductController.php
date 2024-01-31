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

    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:5,max:50',
            'description'=> 'required|min:5,max:50',
            'price'=> 'required|min:1,max:50',
            'image'=> 'required|min:1,max:50',
            'category_id'=> 'required|min:1,max:50'
        ]);
        
        $Product = Product::create([
            'name'=> $data['name'],
            'description'=> $data['description'],
            'price'=> $data['price'],
            'image'=> $data['image'],
            'category_id'=> $data['category_id']
        ]);

        if ($Product) {
            $object = [

                "response" => 'Succes.Itemsaved correctly.',
                "data" => $Product
    
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
            'price' => 'required|min:3',
            'image' => 'required|min:3',
            'category_id' => 'required|min:3'
        ]);
        
        $product = Product::where("id","=", $data['id'])->first();
        $product->name=$data['name'];
        $product->description=$data['description'];
        $product->price=$data['price'];
        $product->image=$data['image'];
        $product->category_id=$data['category_id'];
        
        if($product->update()){
            $object =[
            "response"=>'Sucess. Item update successfully.',
            "data"=> $product
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
