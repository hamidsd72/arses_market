@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- wallet edit -->
{{-- @include('user.wallet') --}}
<!-- edit auth -->
{{-- @include('user.authForm') --}}

    
     
<div class="col-12">
    <div class="row">
        <div class="col-8 mx-auto">
            @include('user.errors')
            @if (session()->has('flash_message'))
                <small class="text-success text-center">{{ session()->get('flash_message') }}</small>
            @endif
            <div class="card-body text-right">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card mr-5 ml-5">
                    <div class="card-header pr-2">
                        <p class="float-left h5"><a class="bg-white rounded-circle" href="#"><img src="plus.png" class="rounded" width="20px" alt=""></a> شارژ کیف پول</p>
                        <p class="h5">
                            کیف پول ریالی
                            @if($wallet && $wallet->picture)
                                <a href="/{{ $wallet->picture }}">
                                    <img src="{{ $wallet->picture }}" class="rounded" height="30px" alt="تصویر کیف پول">
                                </a>
                            @endif
                        </p>
                    </div> 
                    <div class="card-body text-center">
                        @if ($wallet || $wallet->cardId)
                            <h5>
                                موجودی ریالی
                                {{$wallet->rials}}
                                -
                                موجودی تتر
                                {{$wallet->dollar}}
                            </h5>
                            <p class="pt-2">بروزرسانی اطلاعات کیف پول<br>
                                <a class="btn btn-outline-primary" href="{{ route('wallet.edit',Auth::user()->id)}}">فورم بروزرسانی اطلاعات کیف پول</a>
                            </p>
                            @if ($wallet->picture)
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ $wallet->picture }}" class="rounded" width="100%" alt="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="col-7">
                                        <h7>{{ $wallet->cardId }} شماره کارت</h7><br>
                                        <h7>شماره شبا</h7><br>
                                        <h7>{{ $wallet->nationalCardId }}</h7><br>
                                        <h7>{{ $wallet->bankName }} نام بانک</h7><br>
                                        <h7>{{ $wallet->substation }} شعبه بانک</h7>
                                    </div>
                                </div>
                            @endif
                        @else
                            <p class="text-center pt-2">تکمیل اطلاعات کیف پول<br>
                                <a class="btn btn-outline-primary" href="#myModal3" data-toggle="modal">فورم تکمیل اطلاعات کیف پول</a>
                            </p>
                        @endif
                    </div>
                </div>
                <div class="mr-5 ml-5">
                    <div class="text-center">
                        <div class="m-4">
                            <div class="custom-control-inline mb-2">
                                <input class="form-control form-control-sm col-6" id="buy" type="text" value="{{$value->buy ?? ''}}"><label> قیمت خرید تتر </label>
                            </div>
                            <div class="custom-control-inline mb-2">
                                <input class="form-control form-control-sm col-6" id="sale" type="text" value="{{$value->sale ?? ''}}"><label> قیمت فروش تتر </label>
                            </div>
                        </div>
                        {{-- <a class="btn btn-block btn-outline-primary p-2" href="{{ route('market') }}">خرید و فروش دلار(تتر)</a> --}}
                        @unless (Auth::user()->visible)
                            <hr>        
                            <div class="btn btn-block btn-outline-danger p-2">احراز هویت انجام نشده</div>
                        @endunless
                    </div>
                </div>
            </div>
        </div>
        @include('user.navbar')
    </div>
</div>

<script>
    var checkSims = function() {
        $.ajax({
            type: "GET",
            url:  '/user/market/data',
            success: function(data) {
                console.clear();
                var buy = parseInt(data.buy);
                var sale = parseInt(data.sale);
                console.log('بروزرسانی هر ده دقیقه یکبار');
                console.log('قیمت خرید');
                console.log(buy);
                console.log('قیمت فروش');
                console.log(sale);
                document.getElementById("buy").value = (buy);
                document.getElementById("sale").value = (sale);
            },
            error: function() {
                console.log(this.error);
            }
        });
    }

    var interval = 1000 * 6 * 1; // where X is your every X minutes

    setInterval(checkSims, interval);
</script>

@endsection
