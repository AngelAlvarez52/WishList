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
                "gift_id" => $Comment->gift_id

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
            "gift_id" => $Comment->gift_id

        ];

        return response()->json($object);

    }

    public function create(Request $request) {
        $data = $request->validate([
            'text'=> 'required|min:10,max:50',
            'user_id'=> 'required|min:1,max:50',
            'gift_id'=> 'required|min:1,max:50'
        ]);
        
        $Comment = Comment::create([
            'text'=> $data['text'],
            'user_id'=> $data['user_id'],
            'gift_id'=> $data['gift_id']
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

    public function update(Request $request){
        $data = $request->validate([
            'id'=>'required|min:1',
            'text' => 'required|min:3'
        ]);
        
        $comment = Comment::where("id","=", $data['id'])->first();
        $comment->name=$data['text'];
        
        if($comment->update()){
            $object =[
            "response"=>'Sucess. Item update successfully.',
            "data"=> $comment
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
