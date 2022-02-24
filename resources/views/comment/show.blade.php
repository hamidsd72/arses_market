@extends('layouts.app')
@section('content')
{{-- <style>
    body{
        background-color: darkslategray;
        }
</style> --}}

<link href="{{ asset('css/comment.css') }}" rel="stylesheet">

<a class="m-5 text-dark h5" href="{{route('home')}}"><< لینک برگشت</a>
<div class="col-12 mt-3">
    <div class="container metta">
        <div class="timeline-centered timeline-sm">
            @include('comment.ticket')
            <article class="timeline-entry">
                <div class="timeline-entry-inner">
                    <div style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);" class="timeline-icon"><img height="100%" src="/plus.png" alt="افزودن"></div>
                </div>
            </article>
        </div>
    </div>
    <div class="row mb-2">
        <form action="{{ route('comment') }}" enctype="multipart/form-data" method="post" class="form-controll mr-5 ml-5 col-lg-6 col-md-9" role="form">
            {{ csrf_field() }}
            @include('comment.form')
            <button type="submit" class="form-control btn btn-outline-success">ارسال پیام به پشتیبان</button>
        </form>
    </div>
</div>

@endsection
