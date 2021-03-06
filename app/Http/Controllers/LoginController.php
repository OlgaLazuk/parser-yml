<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registration(UserRegistrationRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('catalog');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = Auth::attempt($request->only(['email', 'password']));
        if ($credentials) {
            return redirect('catalog');
        } else {
            return back();
        }
    }
}
