<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->name;
        $shops = Shop::where('name','LIKE','%'.$busqueda.'%')
                        ->orderBy('id', 'asc')
                        ->paginate(10);
        $data = [
            "shops" => $shops,
            'busqueda'=>$busqueda
        ];
        return view('admin.shop.index', compact('shops'));
    }


    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('admin.shop.edit', compact('shop'));
    }

    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'adress' => 'required|string|max:255',
        'cel' => 'required|string|max:255'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $shop = Shop::findOrFail($id);
    $shop->update([
        'name' => $request->name,
        'adress' => $request->adress,
        'cel' => $request->cel
    ]);

    return redirect()->route('shop.index')->with('success', 'Tienda actualizada exitosamente');
}


    public function destroy($id)
    {
        $shop = Shop::find($id);

        if (!$shop) {
            return redirect()->route('shop.index')->with('error', 'La tienda no existe.');
        }

        $shop->delete();

        return redirect()->route('shop.index')->with('success', 'Tienda eliminada correctamente!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'cel' => 'required|string|max:255',
        ]);

        // Crear una nueva instancia de Shop con los datos del formulario
        $shop = new Shop();
        $shop->name = $request->name;
        $shop->adress = $request->adress; // Asegúrate de asignar la dirección
        $shop->cel = $request->cel;
        $shop->save(); // Guardar el nuevo registro en la base de datos

        return redirect()->route('shop.index')->with('success', 'Tienda creada correctamente.');
    }
}
