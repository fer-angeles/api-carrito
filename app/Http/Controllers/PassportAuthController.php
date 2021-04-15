<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PassportAuthController extends Controller
{
    public function login(Request $request)
    {
        $loginRequest = User::where('code_user', $request->code_user)->first();

        if( !$loginRequest )
            return response()->json(['No existe el registro'], 401);

        auth()->loginUsingId($loginRequest->id);

        if( !auth()->check() )
            return response()->json(['error' => 'Unauthorised'], 401);

        $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
        return response()->json(['token' => $token,'user' => auth()->user()], 200);
    }



}
