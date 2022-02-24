@extends('layouts.app')

@section('content')


<div class="container text-right">
    <form action="{{ route('authUser.update',Auth::user()->id) }}" method="post" enctype="multipart/form-data" role="form">
        {{ method_field('PATCH') }}
        <!-- Modal Header -->
        <div class="modal-header">
            {{ csrf_field() }}
            <a class="ml-5 text-dark h5 mt-2" href="{{route('home')}}"><< لینک برگشت</a>
            <button type="button" class="close " data-dismiss="modal"></button>
            <h5 class="text-right p-2">تایید هویت کاربر</h5>
        </div>
        <!-- Modal body -->
        <div class="modal-body">

            <div class="row">
                <div class="col-lg-4 mt-4 mb-5 text-center">
                    @if ($user->selfe && $user->cardImage)
                        <img src="/{{$user->selfe}}" width="45%" alt="{{$user->name}}">
                        <img src="/{{$user->cardImage}}" width="45%" alt="{{$user->name}}">
                    @endif
                </div>
    
                <div class="@if ($user->selfe) col-lg-8 @endif">
                    <div class="row mr-lg-4 mr-3 ml-lg-4 ml-3">
                        <div class="form-group col-lg-6">
                            <label for="firstName">نام</label>
                            <input type="text" class="form-control text-right" id="firstName" name="firstName" value="{{ Auth::user()->firstName }}" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="lastName">نام خانوادگی</label>
                            <input type="text" class="form-control text-right" id="lastName" name="lastName" value="{{ Auth::user()->lastName }}" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="address">آدرس کامل</label>
                            <input type="text" class="form-control text-right" id="address" name="address" value="{{ Auth::user()->address }}" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="phone">تلفن ثابت</label>
                            <input type="number" class="form-control text-right" id="phone" name="phone" value="{{ Auth::user()->phone }}" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="nationalCode">کد ملی</label>
                            <input type="number" class="form-control text-right" id="nationalCode" name="nationalCode" value="{{ Auth::user()->nationalCode }}" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="postCode">کد پستی</label>
                            <input type="number" class="form-control text-right" id="postCode" name="postCode" value="{{ Auth::user()->postCode }}" required>
                        </div>
                    </div>
                    <div class="row col-11 mx-auto">
                        @unless(Auth::user()->selfe)
                            <div class="text-left mb-5 col-lg">
                                <div class="custom-file">
                                    <input name="selfe" id="selfe" type="file" class="custom-file-input" required>
                                    <label class="custom-file-label" for="selfe">عکس سلفی</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    <div class="mr-2 mt-2 text-right">
                                        <a href="#" 
                                        class="text-light" 
                                        title="موارد لازم برای تصویر سلفی" 
                                        data-toggle="selfe" 
                                        data-trigger="focus" 
                                        data-content="تصویر سلفی باید واضع و شفاف باشد بطوریکه تمامی نوشته های تصویر خوانا باشد بدون عینک , کلاه و ... باشد">
                                        قوانین ارسال تصویر سلفی</a>
                                        <script>
                                            $(document).ready(function(){
                                                $('[data-toggle="selfe"]').popover();   
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        @endunless
                        @unless(Auth::user()->cardImage)
                            <div class="text-left col-lg">
                                <div class="custom-file">
                                    <input name="cardImage" id="cardImage" type="file" class="custom-file-input" required>
                                    <label class="custom-file-label" for="cardImage">عکس از کارت ملی</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    <div class="mr-2 mt-2 text-right">
                                        <a href="#" 
                                            class="text-light" 
                                            title="موارد لازم برای تصویر کارت ملی" 
                                            data-toggle="cardImage" 
                                            data-trigger="focus" 
                                            data-content="تصویر کارت ملی باید واضع و شفاف باشد بطوریکه تمامی نوشته های تصویر خوانا باشد">
                                            قوانین ارسال تصویر کارت ملی</a>
                                        <script>
                                            $(document).ready(function(){
                                                $('[data-toggle="cardImage"]').popover();   
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        @endunless
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
            <button type="submit" class="btn btn-success">تایید</button>
        </div>
    </form>
</div>

@endsection
