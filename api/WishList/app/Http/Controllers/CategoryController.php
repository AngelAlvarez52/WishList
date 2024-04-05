<?php

namespace App\Http\Controllers;

use App\Models\Category;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('admin.category.edit', compact('category'));
}

public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $category = Category::findOrFail($id);

    // Evitar que se actualice el ID
    $request->merge(['id' => $category->id]);

    $category->update($request->all());

    return redirect()->route('category.index', ['categories' => $category->id])->with('success', 'Categoria actualizada correctamente.');
}


    public function destroy($id)
{
    $categories = Category::find($id);

    if (!$categories) {
        return redirect()->route('category')->with('error', 'La Categoría no existe.');
    }

    $categories->delete();

    return redirect()->route('category')->with('success', 'Categoria eliminada correctamente!');
}   

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255'
    ]);

    Category::create($request->all());

    return redirect()->route('category')->with('success', 'Categoría creada correctamente.');
}
}
