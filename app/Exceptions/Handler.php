<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Symfony\Component\HttpFoundation\Response;

class Handler extends ExceptionHandler
{
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Throwable $e)
    {
        // Aquí interceptamos la excepción de autenticación y devolvemos una respuesta JSON
        if ($e instanceof AuthenticationException) {
            return response()->json([
                'message' => 'El token es invalido.',
                'errors' => [
                    'token' => ['Invalid token']
                ]
            ], 401);
        }

        // Llamada al método padre en caso de que no sea una excepción de autenticación
        return parent::render($request, $e);
    }
    
}
