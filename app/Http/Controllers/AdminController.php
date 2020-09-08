<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;


class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.index')->with('users', $users);
    }

    public function create()
    {

        return view('admin.create');
    }

    public function store(UserRequest $request)
    {

        $user = new User();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->company = $request->company;
        $user->contact = $request->contact;
        $user->type = 'employee';

        $user->save();

        return redirect('admin');
    }
}