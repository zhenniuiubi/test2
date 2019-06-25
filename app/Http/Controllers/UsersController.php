<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function index()
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(111111),
        ]);
        Auth::login($user);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show',[$user]);
        // return back();
    }
}
