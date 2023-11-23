<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $response = Password::sendResetLink($request->only('email'));
        if ($response == Password::RESET_LINK_SENT) {
            // La respuesta fue exitosa y el enlace fue enviado
            return response()->json([
                'status' => 'success',
                'message' => 'El token de restablecimiento de contraseña fue enviado con éxito.'
            ], 200); // Código 200 significa OK
        } else {
            // Hubo un error al procesar la solicitud
            // Podrías utilizar el mismo $response para enviar el mensaje de error específico de Laravel
            return response()->json([
                'status' => 'error',
                'message' => trans($response) // Utiliza el helper trans() para obtener un mensaje de error legible.
            ], 500);
        }
    }
}
