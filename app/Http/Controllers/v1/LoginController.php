<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Events\UserSessionChanged;
use App\Models\CgiParameter;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $userData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:3',
        ]);
        if (!Auth::attempt($userData)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Credenciales invalidas'
            ], 401);
        }
        $user = Auth::user();
        // Emitir evento antes de borrar tokens antiguos
        event(new UserSessionChanged($user->id));
        // Eliminar tokens antiguos antes de generar uno nuevo
        $user->tokens()->delete();
        $parameters = CgiParameter::first();
        // Crear un nuevo token
        $token = $user->createToken('mi-token')->plainTextToken;
        return response()->json([
            'status' => 'success',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
            'parameters' => $parameters
        ]);
    }
}
