@extends('layouts.admin')
@section('content')

    <a href="{{ route('admin') }}" class="m-5 text-success">برگشت به میز کار</a>

    <div class="col-lg-8 mx-auto mt-5 p-5 bg-white rounded">
        <div id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-block btn-light mb-3" data-toggle="collapse" data-target="#collapseComment{{ $comment->id }}" aria-expanded="true" aria-controls="collapseComment{{ $comment->id }}">
                    نام کاربری تیکت
                    {{ $user->name }}
                </button>
            </h5>
        </div>
        <div class="row text-left">
            <div class="col-lg-8 col-md-10 pr-4">
                <p>content = {{ $comment->content }}</p>
                <p>paragraph = {{ $comment->paragraph }}</p>
                @if($comment->attachment)
                    <a href="/{{ $comment->attachment }}" class="mt-4">پیوست تیکت</a>
                @endif
            </div>
            @unless ($comment->completed)
                <div class="col mt-4">
                    <form action="{{ route('commentComplete') }}" method="POST" role="form">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" id="{{$comment->id}}" name="id" value="{{$comment->id}}" required>
                        <button type="submit" class="mt-2 btn btn-block btn-outline-info">تکمیل تیکت</a>
                    </form>
                </div>
            @endunless
            <div>
                <hr style="background-color: lemonchiffon">
                <form action="{{ route('comment') }}" enctype="multipart/form-data" method="post" role="form">
                    {{ csrf_field() }}
                    @include('comment.form')
                    <input type="hidden" class="form-control" id="{{$comment->isAdmin}}" name="isAdmin" value=true required>
                    <button type="submit" class="form-control btn btn-outline-success">ارسال پیام به پشتیبان</button>
                </form>
            </div> 
        </div>
    </div>

@endsection
