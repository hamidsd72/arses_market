{{-- <div class="form-group col-md-1">
    <label for="id">شماره</label> --}}
    <input type="hidden" class="form-control" id="id" name="id" value="{{ $value->id }}" required>
{{-- </div> --}}
<div class="form-group col-lg-2 col-md">
    <label for="benefit">کارمزد خرید</label>
    <input type="benefit" class="form-control" id="benefit" name="benefit" value="{{ $value->benefit }}" required>
</div>
<div class="form-group col-lg-3 col-md">
    <label for="buy">فی فروش به کاربر</label>
    <input type="number" class="form-control" id="buy" name="buy" value="{{ $value->buy }}" required>
</div>
<div class="form-group col-lg-3 col-md">
    <label for="sale">فی خرید از کاربر</label>
    <input type="number" class="form-control" id="sale" name="sale" value="{{$value->sale}}" required>
</div>
<div class="form-group col-lg col-md-12">
    <label for="trc20">trc20</label>
    <input type="text" class="form-control" id="trc20" name="trc20" value="{{ $value->trc20 }}" required>
</div>