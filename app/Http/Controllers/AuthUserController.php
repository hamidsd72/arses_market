<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AuthUserController extends Controller
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
        return view('user.authUser', compact('user'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->visible      = false;
        $user->firstName    = $request->firstName;
        $user->lastName     = $request->lastName;
        $user->phone        = $request->phone;
        $user->nationalCode = $request->nationalCode;
        $user->postCode     = $request->postCode;
        $user->address      = $request->address;
        # save a selfe picture
        if ($user->selfe || $user->cardImage)
        {
            $user->update();
            $request->session()->flash('flash_message','اطلاعات با موفقیت ارسال شد');
            return back();
        }
        
        $this->validate($request,[
            'selfe' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);
        
        $selfe           = $request->file('selfe');
        $selfeName       = $selfe->getClientOriginalName();
        $selfe->move('user/selfe/' . $user->id . '/', $selfeName) ;
        $user->selfe     = "user/selfe/$user->id/$selfeName";
        # save a cardImage picture
        
        $this->validate($request,[
            'cardImage' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);
        
        $cardImage       = $request->file('cardImage');
        $cardImageName   = $cardImage->getClientOriginalName();
        $cardImage->move('user/cardImage/' . $user->id . '/', $cardImageName) ;
        $user->cardImage = "user/cardImage/$user->id/$cardImageName";
        # coonfirm and update
        $user->update();
        $request->session()->flash('flash_message','اطلاعات با موفقیت ارسال شد');
        return back();
    }
    
    public function destroy($id)
    {
        //
    }
}
