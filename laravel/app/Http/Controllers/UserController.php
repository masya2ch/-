<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidationLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function loginPost(RequestValidationLogin $request)
    {
        if(Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->route('welcome');
        }
        return back()->with(['errorSuccess' => 'Не верный пароль']);
    }
}

