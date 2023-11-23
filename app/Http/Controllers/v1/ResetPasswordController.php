<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;


class ResetPasswordController extends Controller
{
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );
        if ($status == Password::PASSWORD_RESET) {
            // La contraseña ha sido restablecida con éxito
            return response()->json([
                'status' => 'success',
                'message' => 'Contraseña restablecida con éxito.'
            ], 200); // Código 200 significa OK
        } else {
            // Hubo un error al restablecer la contraseña
            // Aquí también podrías utilizar trans($status) para dar un mensaje más detallado
            return response()->json([
                'status' => 'error',
                'message' => trans($status)
            ], $status == Password::INVALID_TOKEN ? 422 : 500);
        }
    }
}
