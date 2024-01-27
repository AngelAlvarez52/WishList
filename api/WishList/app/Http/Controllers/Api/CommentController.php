<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function list () {

        $Comments = Comment::all();

        $list = [];

        foreach($Comments as $Comment){

            $objetc = [

                "id" => $Comment->id,
                "text" => $Comment->text,
                "user_id" => $Comment->user_id,
                "product_id" => $Comment->product_id

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $Comment = Comment::where('id','=',$id)->first();

        $object = [

            "id" => $Comment->id,
            "text" => $Comment->text,
            "user_id" => $Comment->user_id,
            "product_id" => $Comment->product_id

        ];

        return response()->json($object);

    }

    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:3',
            'text'=> 'required|min:10,max:50'
        ]);
        
        $Comment = Comment::create([
            'name'=> $data['name']
        ]);

        if ($Comment) {
            $object = [

                "response" => 'Succes.Itemsaved correctly.',
                "data" => $Comment
    
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
