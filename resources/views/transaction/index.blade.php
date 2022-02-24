@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="text-dark col-12">
        <a class="ml-5 text-dark" href="{{route('home')}}"><< لینک برگشت</a>

        <table class="table table-hover text-right mt-4">
            <thead>
                <tr>
                    <th scope="col">جزییات</th>
                    <th scope="col">مبلغ سفارش</th>
                    <th scope="col">موضوع سفارش</th>
                    <th scope="col">کد سفارش</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <th scope="row">
                            <a href="#" 
                            title="زمان خرید کاربر" 
                            data-toggle="selfe" 
                            data-trigger="focus" 
                            data-content="{{$transaction->created_at}}">
                            جزییات</a>
                            <script>
                                $(document).ready(function(){
                                    $('[data-toggle="selfe"]').popover();   
                                });
                            </script>
                        </th>
                        <td>{{$transaction->totalPrice}}</td>
                        <td class="@if ($transaction->transaction) text-success @endif">@if ($transaction->transaction) خرید @else فروش @endif {{$transaction->count}} عدد</td>
                        <td>{{$transaction->id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
@endsection