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

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out',
        ],200);
    }

    public function showProfile()
{
    $user = auth()->user();
    return response()->json([
        'profile' => $user,
        'message' => 'success'
    ]);
}

}
