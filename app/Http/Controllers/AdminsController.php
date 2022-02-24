<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\Value;
use App\User;
use App\Wallet;
use App\Comment;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $value            = Value::find(1);

        if(!$value){
            Value::create();
            return 'value is created... for show action REFRESH PAGE ...';
        }
        
        $users            = User::where('visible', false)->get();

        $wallets          = Wallet::where('visible', false)->get();

        $comments         = Comment::where('completed', false)->get();

        $completeComments = Comment::where('completed', true)->get();

        $transactions     = Transaction::where('completed', false)->get();

        return view('admin.index', compact(
            'users',
            'wallets',
            'comments' ,
            'transactions',
            'completeComments',
            'value'));
    }

    public function setValue(Request $request)
    {
        $value = Value::find($request->id);
        $value->buy     = $request->buy;
        $value->sale    = $request->sale;
        $value->trc20   = $request->trc20;
        $value->benefit = $request->benefit;
        $value->update();
        return back();
    }

    public function userComplete(Request $request)
    {
        $user = User::find($request->id);
        $user->visible = true;
        $user->update();
        return back();
    }

    public function walletComplete(Request $request)
    {
        $wallet = Wallet::find($request->id);
        $wallet->visible = true;
        $wallet->update();
        return back();
    }

    public function transactionComplete(Request $request)
    {
        $transaction = Transaction::find($request->id);
        $transaction->completed = true;
        $transaction->update();
        if($transaction->transaction){
            $user           = User::Find($transaction->user_id);
            $benefit        = $transaction->totalPrice * 0.0076;
            dd(intval($benefit));
            $wallet         = Wallet::Find($transaction->user_id);
            $wallet->rials += intval($benefit);
            $wallet->update();
        }
        return back();
    }

    public function commentShow(Request $request)
    {
        $comment = Comment::find($request->id);
        $user = User::where('id', $comment->user_id)->first();
        return view('admin.showComment', compact('comment','user'));
    }

    public function commentComplete(Request $request)
    {
        $comment = Comment::find($request->id);
        $comment->completed = true;
        $comment->update();
        return back();
    }

}
