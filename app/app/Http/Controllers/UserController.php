<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('fish-encyclopedia.login.login');
    }
    public function user()
    {
        return view('fish-encyclopedia.login.user');
    }
    /**
     * @param App\Http\Requests\LoginFormRequest;
     * $request
     */
    public function send(LoginFormRequest $request)
    {
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('user')->with("login_success","ログインに成功しました！");
        }
        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }


}
