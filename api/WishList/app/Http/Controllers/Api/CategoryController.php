<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list () {

        $categories = Category::all();

        $list = [];

        foreach($categories as $category){

            $objetc = [

                "id" => $category->id,
                "name" => $category->name



            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $category = category::where('id','=',$id)->first();

        $object = [

            "id" => $category->id,
            "name" => $category->name

        ];

        return response()->json($object);

    }

    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:3,max:20'
        ]);
        
        $category = Category::create([
            'name'=> $data['name']
        ]);

        if ($category) {
            $object = [

                "response" => 'Succes.Item saved correctly.',
                "data" => $category
    
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
