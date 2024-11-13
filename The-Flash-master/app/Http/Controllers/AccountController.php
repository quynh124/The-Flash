<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AccountController extends Controller
{
    // /admin/login
    public function login() {
        return view('admin-pages.login');
    }

    // /account/loginCheck
    public function loginCheck(Request $request) {
        $credentials = request(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect('/admin');
        } else {
            $request->session()->flash('loginFail', 'Incorrect account');
            return redirect('/admin/login');
        }
    }

    // /api/account/sign-in
    public function signInCheck(Request $request) {
        $credentials = request(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = JWTAuth::fromUser($user);
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    // /api/account/sign-up
    public function signUp(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirm = $request->input('passwordConfirm');

        if ($password != $passwordConfirm) return response()->json(
            [
                'isSuccess' => false,
                'message' => 'Password confirm not match'
            ]
        );

        $user = new User();

        $user->name = 'User';
        $user->email = $email;
        $user->password = Hash::make($password);

        $user->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully sign up account'
            ]
        );
    }

    // /admin/logout
    public function logout() {
        Auth::logout();
        return redirect('/admin/login');
    }
}
