<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EditController extends Controller
{
    public function index() {
        return view('admin.edit');
    }

    public function update(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|max:10',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Obtener el usuario actual
        $user = Auth::user();

        // Actualizar el usuario
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;

        // Si se proporciona una nueva contraseña, actualizarla
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('edit.user')->with('success', 'Perfil actualizado con éxito.');
    }
}
