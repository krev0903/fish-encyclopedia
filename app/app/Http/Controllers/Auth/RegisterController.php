<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('fish-encyclopedia.login.register');
    }

    public function register(Request $request)
    {
    $validated = $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:5|',
    ]);
  
    $result = User::create([
        'name'        => $request->name,
        'email'       => $request->email,
        'password'    => Hash::make($request->password),
        'locked_flg'  => 0,
        'error_count' => 0,
    ]);
    
    if (!empty($result)){
        session()->flash('message','登録しました。');
    } else {
        session()->flash('error','登録出来ませんでした。');
    }

    return redirect()->route('register');
    }
}
