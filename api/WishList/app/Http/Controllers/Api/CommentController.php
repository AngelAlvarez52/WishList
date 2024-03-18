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

    public function comments_gift(Request $request) {
        // Obtener el ID del regalo del parámetro de consulta
        $giftId = $request->query('gift_id');
    
        // Filtrar los comentarios por el ID del regalo
        $comments = Comment::where('gift_id', $giftId)->get();
    
        // Construir la respuesta JSON
        $list = $comments->map(function($comment) {
            return [
                "id" => $comment->id,
                "text" => $comment->text,
                "user_id" => $comment->user_id,
                "gift_id" => $comment->gift_id,
                "created_at" => $comment->created_at,
                "updated_at" => $comment->updated_at
            ];
        });
    
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
            'text'=> 'required',
            'user_id'=> 'required',
            'gift_id'=> 'required',
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
            'id'=>'required',
            'text' => 'required'
        ]);
        
        $comment = Comment::where("id","=", $data['id'])->first();
        $comment->text=$data['text'];
        
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

    public function delete($id) {
        // Buscar el comentario por su ID
        $comment = Comment::find($id);
        
        // Verificar si el comentario existe
        if (!$comment) {
            $object = [
                "response" => 'Error: Comment not found.'
            ];
            return response()->json($object, 404); // 404: Not Found
        }
    
        // Intentar eliminar el comentario
        if ($comment->delete()) {
            $object = [
                "response" => 'Success: Comment deleted successfully.'
            ];
            return response()->json($object);
        } else {
            $object = [
                "response" => 'Error: Something went wrong while deleting the comment. Please try again.'
            ];
            return response()->json($object, 500); // 500: Internal Server Error
        }
    }

}
