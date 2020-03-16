<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
//    public function login(Request $request) {
        //dd($request()->all());
        //if(Auth::attempt([
            //dd($request->email);
         //   'password' => $request->password
        //])) {
//            $user = User::where('email', $request->email)->first();
//            if($user->is_admin) {
//                return redirect()->route('user');
//            }
//            return redirect()->route('home');
//        }
//    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            // If you are logging in the user via email, change the username to email
            'password'  => 'required'
        ]);

        if(! Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Invalid credentials
            return redirect()->route('home');
        }
        return redirect()->route('user');
        // Else, the user has been logged in. Do as you wish.
    }
}
