<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // check the email if it exists
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
// check the password
        if (Hash::check($request->password, $user->password)) {
            $token = $user->createToken('authToken')->accessToken;
            $data = [
                'user' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer',
            ];
            return $data;
        } else {
            return response()->json([
                'message' => 'Password mismatch'
            ], 404);
        }
    }

}
