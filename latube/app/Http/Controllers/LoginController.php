<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

      if($request->isMethod('get'))
      {

        return view('auth.login');

      }

      if($request->isMethod('post'))
      {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials))
        {

            $request->session()->regenerate();

            return redirect()->route('main');

        }

        return back()->withErrors([
            'username' => 'Не верное имя пользователя или пароль'
        ]);

      }

    }
}
