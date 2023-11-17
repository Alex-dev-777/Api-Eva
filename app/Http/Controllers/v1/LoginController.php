<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $userData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if (!Auth::attempt($userData)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Credenciales invalidassss'
            ], 401);
        }

        $user = Auth::user();

        // Eliminar tokens antiguos antes de generar uno nuevo
        $user->tokens()->delete();

        // Crear un nuevo token
        $token = $user->createToken('mi-token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ]
        ]);
    }
}
