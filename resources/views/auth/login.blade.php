@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">

            <h2 class="text-light text-center">آرسس مارکت <img src="/logo.jpeg" width="15%" alt=""></h2>

            <div class="card">
                <div class="card-header text-center">
                    {{ __('ورود به حساب کاربری') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label> --}}

                            <div class="col-md-8 offset-md-2">
                                <div class="input-group">
                                    <input id="email" type="email" placeholder="آدرس ایمیل" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label> --}}

                            <div class="col-md-8 offset-md-2">
                                <div class="input-group">
                                    <input id="password" type="password" placeholder="رمزعبور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">*</div>
                                    </div>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('ذخیره ورود') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('ورود به حساب') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mt-1 mb-0">
                            <div class="col-md-8 offset-md-2">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-light" href="{{ route('password.request') }}">
                                        {{ __('!رمز عبور یادم نیست') }}
                                    </a>
                                @endif
                                <a class="float-right mt-1 btn btn-light" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
