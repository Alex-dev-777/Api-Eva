<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $users = User::all()->makeHidden(['password', 'remember_token']);
        return response()->json(['users' => $users]);
    }
}
