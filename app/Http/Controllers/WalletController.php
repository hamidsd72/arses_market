<?php

namespace App\Http\Controllers;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
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
        //
    }

    public function edit($id)
    {
        $wallet = Wallet::find( Auth::user()->id );
        return view('user.wallet', compact('wallet'));
    }

    public function update(Request $request, $id)
    {
        $wallet = Wallet::find( Auth::user()->id);
        $wallet->visible        = false;
        $wallet->cardId         = $request->cardId;
        $wallet->bankName       = $request->bankName;
        $wallet->substation     = $request->substation;
        $wallet->nationalCardId = $request->nationalCardId;
        if ($wallet->picture)
        {
            $wallet->update();
            $request->session()->flash('flash_message','اطلاعات با موفقیت ارسال شد');
            return back();
        }
        # save picture wallet
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $file->move('wallet/photo/' . $wallet->id . '/', $name) ;
        $wallet->picture = "wallet/photo/$wallet->id/$name";
        # save all to database
        $wallet->update();
        $request->session()->flash('flash_message','اطلاعات با موفقیت ارسال شد');
        return back();
    }

    public function destroy($id)
    {
        //
    }
}
