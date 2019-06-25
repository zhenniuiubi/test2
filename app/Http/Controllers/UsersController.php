<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
    //显示注册页面
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    //注册逻辑
    public function store()
    {
        //验证 name email password
        $this->validate(request(),[
            'name' => 'required|min:5|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|confired',
        ]);
    }
}
