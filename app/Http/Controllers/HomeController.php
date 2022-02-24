<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\User;
use App\Value;
use App\Wallet;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    #TODO : validation requests 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $value        = Value::find(1);
        $wallet       = Wallet::find( Auth::user()->id );
        return view('home', compact('wallet','value'));
    }

    public function data()
    {
        $value  = Value::Find(1);
        return response()->json(array(
            'buy'=> strval($value->buy),
            'sale'=> strval($value->sale),
            'benefit'=> strval($value->benefit)));
    }

    public function comment(Request $request)
    {
        $comment = new Comment;
        $comment->user_id   = Auth::user()->id;
        $comment->content   = $request->contents;
        $comment->paragraph = $request->paragraph;
        if ($request->isAdmin){
            $comment->isAdmin   = true;
            dd($comment->isAdmin);
        }
        # save picture comment
        if ($request->file('attachment'))
        {
            $file = $request->file('attachment');
            $name = time().'-'.$file->getClientOriginalName();
            $file->move('comment/attachment/', $name) ;
            $comment->attachment = "comment/attachment/$name";
        }
        # save all to database
        $comment->save();
        $request->session()->flash('flash_message','پیام با موفقیت ارسال شد');
        return back();
    }

}
