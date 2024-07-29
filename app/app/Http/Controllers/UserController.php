<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginFormRequest;
use App\Models\User;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('fish-encyclopedia.login.showLogin');
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

            return redirect()->route('user')->with('login_success','ログインに成功しました！');
        }
        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('/')->with("logout","ログアウトしました！");
    }
}
