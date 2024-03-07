<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) 
    {
        $loginData = $request->validate([
            'email'=>'email|required',
            'password'=>'required'
        ]);

        if (!auth()->attempt($loginData)){
            return response([
                'response'=>'Invalid Credentials',
                'message'=>'error'
            ]);
        }

        $accesToken = auth()->user()->createToken('authToken')->accessToken;
        return response([
            'profile'=>auth()->user(),
            'access token'=>$accesToken,
            'message'=>'success'
        ]);
    }

    public function getUser(Request $request)
    {
        $user = $request->user(); // Obtener el usuario autenticado desde el token

        return response()->json([
            'profile' => $user,
            'message' => 'success'
        ]);
    }
}
