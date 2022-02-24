@extends('layouts.admin')
@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myDIV *").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <div class="col-12">

        <div class="bg-secondary rounded mr-5 ml-5 text-white">
            <div id="accordion">
                <div>
                    <h5 class="mb-0 h5">
                        <button class="btn btn-block" data-toggle="collapse" data-target="#collapseValue" aria-expanded="true" aria-controls="collapseValue">
                            <h4 class="text-warning">
                                <i class="bx bxs-dollar-circle h1"></i>
                                لیست قیمت خرید و فروش 
                            </h4>
                        </button>
                    </h5>
                </div>
                <div id="collapseValue" class="collapse" aria-labelledby="headingUserValue" data-parent="#accordion">
                    <form class="row m-5" action="{{ route('setValue') }}" method="post" role="form">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        @include('admin.value')
                        <button type="submit" class="btn btn-block btn-success m-5 p-3">ارسال قیمت ها</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
                    
    <div class="row text-center m-5">

        <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-secondary rounded p-3 text-white">
                <i class="bx bxs-user text-success h1"></i>
                <input id="myInput" type="text" placeholder="Search.." class="form-control mb-3">
                <div id="accordion">
                    @foreach($users as $user)
                        <div id="myDIV">
                            <h5 class="mb-0 h5">
                                <button class="btn btn-block @if ($user->cardImage) btn-success @else  btn-light @endif mb-3" data-toggle="collapse" data-target="#collapseUser{{ $user->id }}" aria-expanded="true" aria-controls="collapseUser{{ $user->id }}">
                                    {{ $user->name }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseUser{{ $user->id }}" class="collapse" aria-labelledby="headingUser{{ $user->id }}" data-parent="#accordion">
                            <div class="text-left">
                                <hr style="background-color: lemonchiffon">
                                <p>fullName = {{ $user->fullName }}</p>
                                <p>uid = {{ $user->uid }}</p>
                                <p>mobile = {{ $user->mobile }}</p>
                                <p>phone = {{ $user->phone }}</p>
                                <p>nationalCode = {{ $user->nationalCode }}</p>
                                <p>postCode = {{ $user->postCode }}</p>
                                <p>address = {{ $user->address }}</p>
                                <p>email = {{ $user->email }}</p>
                                @if($user->cardImage)
                                    <a href="/{{ $user->cardImage }}">تصویر کارت ملی</a>
                                @else
                                    <p class="text-warning">بدون تصویر کارت</p>
                                @endif
                                @if($user->selfe)
                                    <a href="/{{ $user->selfe }}">تصویر سلفی</a>
                                    <form action="{{ route('userComplete') }}" method="POST" role="form">
                                        {{ method_field('PATCH') }}
                                        {{ csrf_field() }}
                                        <input type="hidden" class="form-control" id="{{$user->id}}" name="id" value="{{ $user->id }}" required>
                                        <button type="submit" class="mt-2 btn btn-block btn-outline-success">تایید کاربر</button>
                                    </form>
                                @else
                                    <p class="text-warning">بدون تصویر سلفی</p>
                                @endif

                            </div>
                            <hr style="background-color: lemonchiffon">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-secondary rounded p-3 text-white">
                <i class="bx bxs-wallet text-info h1"></i>
                <div id="accordion">
                    @foreach($wallets as $wallet)
                        <div id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-light mb-3" data-toggle="collapse" data-target="#collapseWallet{{ $wallet->id }}" aria-expanded="true" aria-controls="collapseWallet{{ $wallet->id }}">
                                    {{ $wallet->user_id }}کیف کاربر شماره
                                </button>
                            </h5>
                        </div>
                        <div id="collapseWallet{{ $wallet->id }}" class="collapse" aria-labelledby="headingWallet{{ $wallet->id }}" data-parent="#accordion">
                            <div class="text-left">
                                <hr style="background-color: lemonchiffon">
                                <p>bankName = {{ $wallet->bankName }}</p>
                                <p>substation = {{ $wallet->substation }}</p>
                                <p>cardId = {{ $wallet->cardId }}</p>
                                <p>nationalCardId = {{ $wallet->nationalCardId }}</p>
                                <a href="/{{ $wallet->picture }}">تصویر کارت</a>
                                <form action="{{ route('walletComplete') }}" method="POST" role="form">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <input type="hidden" class="form-control" id="{{$wallet->id}}" name="id" value="{{ $wallet->id }}" required>
                                    <button type="submit" class="mt-2 btn btn-block btn-outline-success">تایید کیف پول</button>
                                </form>
                            </div>
                            <hr style="background-color: lemonchiffon">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-secondary rounded p-3 text-white">
                <i class="bx bxs-dollar-circle text-warning h1"></i>
                <div id="accordion">
                    @foreach($transactions as $transaction)
                        <div id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-light mb-3" data-toggle="collapse" data-target="#collapse{{ $transaction->id }}" aria-expanded="true" aria-controls="collapse{{ $transaction->id }}">
                                    {{ $transaction->user_id }}شماره کاربر تراکنش
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{ $transaction->id }}" class="collapse" aria-labelledby="heading{{ $transaction->id }}" data-parent="#accordion">
                            <div class="text-left">
                                <hr style="background-color: lemonchiffon">
                                @if($transaction->transaction)
                                    <p class="text-center">خرید</p>
                                    <p> وضعیت پرداخت انلاین = {{ $transaction->paid ? "true" : "false" }}</p>
                                @else
                                    <p class="text-center">فروش</p>
                                    <p>pushTo = {{ $transaction->pushTo }}</p>
                                @endunless
                                <p>dollarRate = {{ $transaction->dollarRate }}</p>
                                <p>count = {{ $transaction->count }}</p>
                                <p>totalPrice = {{ $transaction->totalPrice }}</p>
                                <p>trc20 = {{ $transaction->trc20 }}</p>
                                <form action="{{ route('transactionComplete') }}" method="POST" role="form">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <input type="hidden" class="form-control" id="transaction->id" name="id" value="{{ $transaction->id }}" required>
                                    <button type="submit" class="mt-2 btn btn-block btn-outline-success">معامله تکمیل شد</button>
                                </form>
                            </div>
                            <hr style="background-color: lemonchiffon">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-5">
            <div class="bg-secondary rounded p-3 text-white">
                <i class="bx bxs-comment h1"></i>
                <div id="accordion">
                    @foreach($comments as $comment)
                        <div id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-light mb-3" data-toggle="collapse" data-target="#collapseComment{{ $comment->id }}" aria-expanded="true" aria-controls="collapseComment{{ $comment->id }}">
                                    {{ $comment->user_id }} شماره کاربر تیکت
                                </button>
                            </h5>
                        </div>
                        <div id="collapseComment{{ $comment->id }}" class="collapse" aria-labelledby="headingComment{{ $comment->id }}" data-parent="#accordion">
                            <div class="text-left">
                                <hr style="background-color: lemonchiffon">
                                <p>content = {{ $comment->content }}</p>
                                <p>paragraph = {{ $comment->paragraph }}</p>
                                @if($comment->attachment)
                                    <a href="/{{ $comment->attachment }}" class="mt-4">پیوست تیکت</a>
                                @endif
                                <form action="{{ route('commentShow') }}" method="get" role="form">
                                    {{ csrf_field() }}
                                    <input type="hidden" class="form-control" id="{{$comment->id}}" name="id" value="{{$comment->id}}" required>
                                    <button type="submit" class="mt-2 btn btn-block btn-outline-info">رفتن تیکت</button>
                                </form>
                            </div>
                            <hr style="background-color: lemonchiffon">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-5">
            <div class="bg-secondary rounded p-3 text-white">
                <i class="bx bxs-comment text-dark h1"></i>
                <div id="accordion">
                    @foreach($completeComments as $comment)
                        <div id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-light mb-3" data-toggle="collapse" data-target="#collapseComment{{ $comment->id }}" aria-expanded="true" aria-controls="collapseComment{{ $comment->id }}">
                                    {{ $comment->user_id }} شماره کاربر تیکت
                                </button>
                            </h5>
                        </div>
                        <div id="collapseComment{{ $comment->id }}" class="collapse" aria-labelledby="headingComment{{ $comment->id }}" data-parent="#accordion">
                            <div class="text-left">
                                <hr style="background-color: lemonchiffon">
                                <p>content = {{ $comment->content }}</p>
                                <p>paragraph = {{ $comment->paragraph }}</p>
                                @if($comment->attachment)
                                    <a href="/{{ $comment->attachment }}" class="mt-4">پیوست تیکت</a>
                                @endif
                                <form action="{{ route('commentShow') }}" method="get" role="form">
                                    {{ csrf_field() }}
                                    <input type="hidden" class="form-control" id="{{$comment->id}}" name="id" value="{{$comment->id}}" required>
                                    <button type="submit" class="mt-2 btn btn-block btn-outline-info">رفتن تیکت</button>
                                </form>
                            </div>
                            <hr style="background-color: lemonchiffon">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection
