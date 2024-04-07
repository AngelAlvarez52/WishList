<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->rating;
        $ratings = Rating::where('rating','LIKE','%'.$busqueda.'%')
                        ->orderBy('id', 'asc')
                        ->paginate(10);
        $data = [
            "ratings" => $ratings,
            'busqueda'=>$busqueda
        ];
        return view('admin.rating.index', compact('ratings'));
    }

    public function edit($id)
{
    $rating = Rating::findOrFail($id);
    return view('admin.rating.edit', compact('rating'));
}

public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'rating' => 'required|string|max:5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $rating = Rating::findOrFail($id);
        $rating->update([
            'rating' => $request->rating,
        ]);

        return redirect()->route('rating.index')->with('success', 'Calificacion actualizada correctamente.');
    }

    public function destroy($id)
{
    $ratings = Rating::find($id);

    if (!$ratings) {
        return redirect()->route('rating.index')->with('error', 'La calificacion no existe.');
    }

    $ratings->delete();

    return redirect()->route('rating.index')->with('success', 'Calificacion eliminada correctamente!');
}   

    public function store(Request $request)
{
    $request->validate([
        'rating' => 'required|string|max:5'
    ]);

    Rating::create($request->all());

    return redirect()->route('rating.index')->with('success', 'Calificacion creada correctamente.');
}
}

