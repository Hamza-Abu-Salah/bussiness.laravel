<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show_login_view()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (auth()->guard('admin')->attempt(['username'=>$request->input('username'), 'password'=>$request->input('password')])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.show_login_view');
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.show_login_view');
    }
}
