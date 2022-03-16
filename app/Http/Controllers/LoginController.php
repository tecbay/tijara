<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController
{
    public function __invoke(Request $request)
    {

        $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        /** @var User $user */
        $user = User::whereEmail($request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            return response()->json([
                'token' => $user->createToken($request->header('user-agent', 'unknown-device'))->plainTextToken,
            ]);

        }

        throw ValidationException::withMessages(['Invalid credential.']);
    }
}
