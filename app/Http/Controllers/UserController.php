<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user.form', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.link', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name     = $request->name;
        $user->mobile   = $request->mobile;
        $user->email    = $request->email;
        $user->password = $request->password;
        if ($request->file('avatar'))
        {
            $this->validate($request,['avatar' => 'required|mimes:jpg,jpeg,png,bmp']);
            if ($user->avatar) 
            {
                return 'فقط میتونید یک تصویر آواتار داشته باشید';
            }
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $file->move('user/avatar/' . $user->id . '/', $name) ;
            $user->avatar = "user/avatar/$user->id/$name";
        }
        $request->session()->flash('flash_message','اطلاعات با موفقیت ارسال شد');
        $user->update();
        return back();
    }

    public function destroy($id)
    {
        //
    }
}
