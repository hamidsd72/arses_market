
@extends('layouts.app')
@section('content')

<div class="container text-right">
    <form action="{{ route('wallet.update',Auth::user()->id) }}" enctype="multipart/form-data" method="post" role="form">
    {{ method_field('PATCH') }}
    <!-- Modal Header -->
        <div class="modal-header">
            {{ csrf_field() }}
            <a class="ml-5 text-dark h5 mt-2" href="{{route('home')}}"><< لینک برگشت</a>
            <button type="button" class="close " data-dismiss="modal"></button>
            <h5 class="modal-title">ویرایش کیف پول</h5>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row">
                @if($wallet->picture)
                    <div class="col-lg-4 mt-5 mb-5 text-center">
                        <img src="/{{$wallet->picture}}" class="rounded" width="100%" alt="{{Auth::user()->name}}">
                    </div>
                @endif
                <div class="@if($wallet->picture) col-lg-8 @else col-lg-12 @endif">
                    <div class="form-group">
                        <label for="bankName">نام بانک</label>
                        <input type="text" class="form-control" id="bankName" name="bankName" value="{{ $wallet->bankName }}" required>
                    </div>
                    <div class="form-group">
                        <label for="substation">شعبه ی</label>
                        <input type="text" class="form-control" id="substation" name="substation" value="{{ $wallet->substation }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cardId">شماره کارت</label>
                        <input type="number" class="form-control" id="cardId" name="cardId" value="{{ $wallet->cardId }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nationalCardId">شماره شبا</label>
                        <input type="number" class="form-control" id="nationalCardId" name="nationalCardId" value="{{ $wallet->nationalCardId }}" required>
                    </div>
                    
                    @unless($wallet->picture)
                        <div class="custom-file text-left mt-2">
                            <input name="file" id="file" type="file" class="custom-file-input" required>
                            <label class="custom-file-label" for="file">عکس از کارت</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                            <div class="mr-2 mt-2 text-right">
                                <a href="#"
                                class="text-light"
                                title="موارد لازم برای تصویر کارت"
                                data-toggle="file"
                                data-trigger="focus"
                                data-content="تصویر کارت باید واضع و شفاف باشد بطوریکه تمامی نوشته های تصویر خوانا باشد میتوانید برای امنیت بیشتر cvv2 کارت را بپوشانید">
                                قوانین ارسال تصویر کارت</a>
                                <script>
                                    $(document).ready(function(){
                                        $('[data-toggle="file"]').popover();
                                    });
                                </script>
                            </div>
                        </div>
                    @endunless
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
