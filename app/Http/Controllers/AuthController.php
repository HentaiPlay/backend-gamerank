<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nickname' => 'required|min:3',
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['message' => 'Fail to register']);
        }

        $user = new User;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['message' => 'Success add new user']);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nickname' => 'required|min:3',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['message' => 'Fail to validate login']);
        }

        $credential = request(['nickname', 'password']);
        if(!Auth::attempt($credential)){
            return response()->json(['message' => 'Not found user (Unautherized)']);
        }

        $user = User::where('nickname', $request->nickname)->first();
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'token' => $tokenResult,
            'message' => 'Success to login'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Token deleted']);
    }
}
