<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view('admin.auth.login');
    }
    public function postlogin(Request $request)
    {
        $request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $validate=auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin',
        ], $request->password);

        if(!$validate){
            return redirect()->route('dashboard')->with('success','Login Successfull');
        } else {
            return redirect()->back()->with('error','Login Failed');
        }
    }

}
