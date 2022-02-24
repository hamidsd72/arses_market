<div class="form-group row">
    <div class="col-md-6 offset-md-3">
        <input id="name" placeholder="نام کاربری" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <label for="name" class="col-md col-form-label">{{ __('نام کاربری') }}</label>
</div>

<div class="form-group row">
    <div class="col-md-6 offset-md-3">
        <input id="email" placeholder="آدرس ایمیل" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <label for="email" class="col-md col-form-label">{{ __('آدرس ایمیل') }}</label>
</div>

<div class="form-group row">
    <div class="col-md-6 offset-md-3">
        <input id="mobile" placeholder="09133626262 به لاتین" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
        @error('mobile')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <label for="mobile" class="col-md col-form-label">{{ __('شماره موبایل') }}</label>
</div>

<div class="form-group row">
    <div class="col-md-6 offset-md-3">
        <input id="uid" placeholder="اگر معرف دارید نام کاربری را وارد کنید" type="text" class="form-control @error('uid') is-invalid @enderror" name="uid" value="@if($name){{$name}}@endif">
        @error('uid')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <label for="uid" class="col-md col-form-label">{{ __('نام معرف') }}</label>
</div>

<div class="form-group row">
    <div class="col-md-6 offset-md-3">
        <input id="password" placeholder="رمز عبور" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <label for="password" class="col-md col-form-label">{{ __('رمز عبور') }}</label>
</div>

<div class="form-group row">
    <div class="col-md-6 offset-md-3">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
    <label for="password-confirm" class="col-md col-form-label">{{ __('تایید رمز عبور') }}</label>
</div>

<div class="form-group row">
    <div class="col-md-8 offset-md-1 text-right">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" required>
        <label class="form-check-label" for="remember">
            <a href="#myModal" class="" data-toggle="modal">تمامی قوانین آرسس مارکت را قبول دارم</a>
        </label>
    </div>
</div>
