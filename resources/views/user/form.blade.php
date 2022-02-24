@extends('layouts.app')
@section('content')

    <div class="container text-right">
        <form action="{{ route('user.update',Auth::user()->id) }}" method="post" enctype="multipart/form-data" role="form">
            {{ method_field('PATCH') }}
            <!-- Modal Header -->
            <div class="modal-header">
                {{ csrf_field() }}
                <a class="ml-5 text-dark h5 mt-2" href="{{route('home')}}"><< لینک برگشت</a>
                <button type="button" class="close " data-dismiss="modal"></button>
                <h5 class="modal-title p-2">ویرایش نمایه</h5>
            </div>
            <!-- Modal body -->
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-4 text-center">
                        @if ($user->avatar)
                            <img src="/{{$user->avatar}}" class="rounded" width="200px" alt="{{$user->name}}">
                            @if (Auth::user()->avatar)
                                <div class="mr-5 ml-5 mt-2">
                                    <a class="btn btn-block btn-danger" href="#">حذف تصویر نمایه</a>
                                </div>
                            @endif
                        @endif
                    </div>
    
                    <div class="@if ($user->selfe) col-lg-8 @endif row">
                        <div class="form-group col-lg-6">
                            <label for="name">نام کاربر</label>
                            <input type="text" class="form-control text-right" id="name" name="name" value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="password">رمز عبور</label>
                            <input type="password" class="form-control text-right" id="password" name="password" value="{{ Auth::user()->password }}" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="mobile">موبایل</label>
                            <input type="number" class="form-control text-right" id="mobile" name="mobile" value="{{ Auth::user()->mobile }}" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="email">آدرس ایمیل</label>
                            <input type="text" class="form-control text-right" id="email" name="email" value="{{ Auth::user()->email }}" required>
                        </div>
                    </div>
                </div>
                
                @unless ($user->avatar)                
                    <div class="custom-file text-left">
                        <input name="avatar" id="avatar" type="file" class="custom-file-input" required>
                        <label class="custom-file-label" for="avatar">عکس برای نمایه</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                @endunless
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                <button type="submit" class="btn btn-success">تایید</button>
            </div>
        </form>
    </div>

@endsection