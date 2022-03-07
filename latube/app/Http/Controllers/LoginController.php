<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        $validate = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validate))
        {

            $request->session()->regenerate();

            return redirect()->route('main');

        }

        return back()->withErrors([
            'username' => 'Не верное имя пользователя или пароль'
        ]);

      }

    }

    public function logout()
    {

      Session::flush();

      Auth::logout();

      return redirect()->route('main');

    }

}
