<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
            $user = User::where('email', $request->email)->first();
            if($user->is_admin) {
                return redirect()->route('user');
            }
            return redirect()->route('home');
    }
}
