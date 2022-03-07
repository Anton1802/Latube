<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {

      if($request->isMethod('get'))
      {

        return view('auth.register');

      }

      if($request->isMethod('post'))
      {

        $validate = $request->validate([
            'email' => ['required', 'email'],
            'username' => ['required', 'max:10', 'min:4'],
            'password' => ['required']
        ]);

        $user = User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('main');

      }

    }
}
