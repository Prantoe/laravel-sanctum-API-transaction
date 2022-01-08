<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function current()
    {
        $user = Auth::user();

        return response()->json([
            'message' => 'Current user login',
            'data' => $user
        ]);
    }
}
