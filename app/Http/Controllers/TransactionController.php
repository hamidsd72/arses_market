<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\Value;
use App\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();
        return view('transaction.index', compact('transactions'));
    }

    public function create()
    {
        $wallet = Wallet::where('id', Auth::user()->id)->first();
        $value  = Value::Find(1);
        return view('market.index',compact('value','wallet'));
    }

    public function store(Request $request)
    {
        $value                       = Value::find(1);
        $transaction                 = new Transaction;
        $transaction->user_id        = Auth::user()->id;
        $transaction->transaction    = $request->transaction;
        $transaction->count          = $request->counter;
        $transaction->totalPrice     = $request->totalPrice;
        $transaction->pushTo         = $request->pushTo;
        
        if ($request->transaction) {
            $transaction->trc20      = $request->trc20;
            $transaction->dollarRate = $value->buy;
            $request->session()->flash('flash_message','خرید با موفقیت انجام شد');
        }
        else {
            $w = Wallet::find(Auth::user()->id);
            if( $w->dollar >= $transaction->count ){
                $transaction->dollarRate = $value->sale;
                $request->session()->flash('flash_message','فروش با موفقیت انجام شد');
            }else{
                $request->session()->flash('flash_message','تعداد دلار کیف شما کمتر از تعداد انتخاب شده میباشد');
                return back();
            }
        }
        $transaction->save();
        return back();

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
