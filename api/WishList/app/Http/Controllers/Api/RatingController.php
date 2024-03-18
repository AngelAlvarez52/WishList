<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function list () {

        $Ratings = Rating::all();

        $list = [];

        foreach($Ratings as $Rating){

            $objetc = [

                "id" => $Rating->id,
                "rating" => $Rating->rating,
                "user_id" => $Rating->user_id,
                "gift_id" => $Rating->gift_id

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }

    public function rating_gift(Request $request) {
        // Obtener el ID del regalo del parámetro de consulta
        $giftId = $request->query('gift_id');
    
        // Filtrar los comentarios por el ID del regalo
        $ratings = Rating::where('gift_id', $giftId)->get();
    
        // Construir la respuesta JSON
        $list = $ratings->map(function($rating) {
            return [
                "id" => $rating->id,
            "rating" => $rating->rating,
            "user_id" => $rating->user_id,
            "gift_id" => $rating->gift_id
            ];
        });
    
        return response()->json($list);
    }

    public function item ($id) {

        $Rating = Rating::where('id','=',$id)->first();

        $object = [

            "id" => $Rating->id,
            "rating" => $Rating->rating,
            "user_id" => $Rating->user_id,
            "gift_id" => $Rating->gift_id

        ];

        return response()->json($object);

    }

    public function create(Request $request) {
        $data = $request->validate([
            'rating'=> 'required|min:1|max:5',
            'user_id'=> 'required|min:1,max:1000',
            'gift_id'=> 'required|min:1,max:1000'
        ]);
        
        $rating = Rating::updateOrCreate(
            ['user_id' => $data['user_id'], 'gift_id' => $data['gift_id']],
            ['rating' => $data['rating']]
        );
    
        return response()->json(['success' => true, 'data' => $rating]);
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'rating' => 'required|min:1|max:5'
        ]);
        
        $rating = Rating::findOrFail($id);
        $rating->rating = $data['rating'];
        $rating->save();
    
        return response()->json(['success' => true, 'data' => $rating]);
    }

    public function delete($id) {
        // Buscar el rating por su ID
        $rating = Rating::find($id);
    
        // Verificar si el rating existe
        if (!$rating) {
            return response()->json(['success' => false, 'message' => 'Rating not found'], 404);
        }
    
        // Eliminar el rating
        $rating->delete();
    
        return response()->json(['success' => true, 'message' => 'Rating deleted successfully']);
    }
    

}
