@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('ثبت نام در آرسس مارکت') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @include('auth.formSignUp')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('ثبت نام') }}
                                </button>
                                
                            </div>
                        </div>

                        <div class="form-group row mt-3 mb-0">
                            <div class="col-md-6 offset-md-3">
                                <p>
                                    اگر از قبل حساب کاربری دارید
                                    <a href="{{ route('login') }}">{{ __('وارد شوید') }}</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content text-right">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">فورم توافقنامه آرسس مارکت</h5>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>اینجانب ـــــ جهت احراز هویت در سایت به نشانی  ــــــــ</p>
                <p>مسولیت قضایی استفاده ازمشخصاتی مانندکارت بانکی و غیره</p>
                <p> را در حساب خود  در وبسایت ــــــــ برعهده دارم و تعهد میدهم</p>
                <p>حساب بانکی و حساب خود در سایت ــــــ در اختیار فرد یا گروه</p>
                <p> دیگری قرار نخواهم داد و تمامی قوانین و مقررات آرسس مارکت را</p>
                <p>خوانده و قبول دارم </p>
                <p>تابع قوانین جمهوری اسلامی</p>
                <p>نام و نام خانوادگی تاریخ امضا</p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">موارد را خواندم و میپذیرم</button>
            </div>
        </div>
    </div>
</div>

@endsection
