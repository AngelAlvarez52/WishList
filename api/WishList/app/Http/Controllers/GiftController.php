<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->name;
        $gifts = Gift::where('name','LIKE','%'.$busqueda.'%')
                        ->orderBy('id', 'asc')
                        ->paginate(10);
        $data = [
            "gifts" => $gifts,
            'busqueda'=>$busqueda
        ];
        return view('admin.gift.index', compact('gifts'));
    }

    public function edit($id)
{
    $gift = Gift::findOrFail($id);
    return view('admin.gift.edit', compact('gift'));
}

public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'url' => 'required|string|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gift = Gift::findOrFail($id);
        $gift->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'url' => $request->url
        ]);

        return redirect()->route('gift.index')->with('success', 'Comentario actualizado correctamente.');
    }

    public function destroy($id)
{
    $gifts = Gift::find($id);

    if (!$gifts) {
        return redirect()->route('gift.index')->with('error', 'El regalo no existe.');
    }

    $gifts->delete();

    return redirect()->route('gift.index')->with('success', 'Regalo eliminado correctamente!');
}   

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|int|max:255',
        'image' => 'required|string|max:255',
        'url' => 'required|string|max:255',
    ]);

    Gift::create($request->all());

    return redirect()->route('gift.index')->with('success', 'Regalo creado correctamente.');
}
}
