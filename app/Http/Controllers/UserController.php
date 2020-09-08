<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5'
        ]);


        return view('admin.index');
    }


    public function registerView()
    {
        return view('register');
    }
    public function register(UserRequest $request)
    {
        return view('admin.index');
    }
}