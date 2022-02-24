@extends('layouts.welcome')
@section('content')
    <style>
        .collapsible-link::before {
            content: '';
            width: 14px;
            height: 2px;
            background: #000000;
            position: absolute;
            top: calc(50% - 1px);
            right: 1rem;
            display: block;
            transition: all 0.3s;
        }

        /* Vertical line */
        .collapsible-link::after {
            content: '';
            width: 2px;
            height: 14px;
            background: #000000;
            position: absolute;
            top: calc(50% - 7px);
            right: calc(1rem + 6px);
            display: block;
            transition: all 0.3s;
        }

        .collapsible-link[aria-expanded='true']::after {
            transform: rotate(90deg) translateX(-1px);
        }

        .collapsible-link[aria-expanded='true']::before {
            transform: rotate(180deg);
        }
    </style>
    
    <a class="ml-5 mt-2 text-light float-left" href="{{route('home')}}"><< لینک برگشت</a>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-9 col-md-11 mx-auto">
                <!-- Accordion -->
                <small class="text-muted">برای دیدن جزییات بیشتر به کنسول مرورگر مراجعه شود</small>
                <div id="accordionExample" class="accordion shadow">
                    <!-- Accordion item 1 -->
                    <div class="card bg-dark">
                        <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 font-weight-bold">
                                <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark collapsible-link py-2">
                                    بخش خرید دلار از آرسس مارکت
                                </a>

                                @include('user.errors')
                            </h6>
                        </div>
                        <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                            <div class="card-body pr-5 text-right">
                                <p id="lowMoney" class="text-dark"></p>
                                <form method="post" action="{{ route('transaction.store') }}" class="needs-validation" novalidate>
                                    {{ csrf_field() }}
                                    <div class="col-md-8 mb-4 float-right">
                                        <div class="custom-control text-center custom-control-inline">
                                            <p> هزار تومان </p>
                                            <label id="return2"> {{$value->buy}} </label>
                                            <p> : خرید از آرسس مارکت </p>
                                        </div>
                                        <div class="custom-control mb-3">
                                            <label for="validationCustom01">: تعداد (دلار)</label>
                                            <input type="number" class="form-control save-data" name="counter" id="validationCustom01" onkeyup="count()" placeholder="تعداد به عدد لاتین" required>
                                            <div class="valid-feedback">!مناسب</div>
                                            <div class="invalid-feedback">از مقادیر معتبر استفاده کنید</div>
                                        </div>
                                        <div class="custom-control text-center custom-control-inline">
                                            <p> هزار تومان </p>
                                            <label id="sum">{{$value->buy}}</label>
                                            <p> : مبلغ </p>
                                        </div>
                                        <div class="custom-control mb-2">
                                            <label for="validationCustom02">TRC20 آدرس ولت </label>
                                            <input type="text" class="form-control" name="trc20" id="validationCustom02" placeholder="شماره ولت تی آر سی بیست" required>
                                            <div class="valid-feedback">!مناسب</div>
                                            <div class="invalid-feedback">از مقادیر معتبر استفاده کنید</div>
                                            <p>هرگونه اشتباه در هنگام وارد کردن آدرس ولت بر عهده خریدار میباشد,بنابراین در وارد کردن آدرس دقت فرمایید</p>
                                        </div>
                                        <div class="custom-control text-center custom-control-inline">
                                            <p>هزار تومان</p>
                                            <label id="total">{{$value->buy}}</label>
                                            <p> : جمع پرداخت + کارمزد انتقال</p>
                                        </div>
                                        <input id="transaction" type="hidden" name="transaction" value=1>
                                        <input id="dollarRate" type="hidden" name="dollarRate">
                                        <input id="totalPrice" type="hidden" name="totalPrice">

                                        <div class="custom-control text-center custom-control-inline">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" required>
                                                <label class="form-check-label" for="remember">
                                                    <p class="">تمامی قوانین آرسس مارکت را قبول دارم</p>
                                                </label>
                                        </div>
                                        
                                        <div id="submit" >
                                            <button class="btn btn-outline-success" style="margin-right: 30%" type="submit">ارسال سفارش</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion item 2 -->
                    <div class="card bg-dark">
                        <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 font-weight-bold">
                                <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">
                                    بخش فروش دلار به آرسس مارکت
                                </a>
                            </h6>
                        </div>
                        <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                            <div class="card-body pr-5 text-right">
                                <form method="post" action="{{ route('transaction.store') }}" class="needs-validation" novalidate>
                                    {{ csrf_field() }}
                                    <div class="col-md-8 mb-4 float-right">
                                        <div class="custom-control text-center custom-control-inline">
                                            <p> هزار تومان </p>
                                            <label id="return2"> {{$value->sale}} </label>
                                            <p> : فروش به آرسس مارکت </p>
                                        </div>
                                        <div class="custom-control">
                                            <label for="validationCustom010">: تعداد (دلار)</label>
                                            <input type="number" class="form-control save-data" name="counter" id="validationCustom010" onkeyup="count2()" placeholder="تعداد به عدد لاتین" required>
                                            <div class="valid-feedback">!مناسب</div>
                                            <div class="invalid-feedback">از مقادیر معتبر استفاده کنید</div>
                                        </div>
                                        <div class="custom-control text-center custom-control-inline">
                                            <p> هزار تومان </p>
                                            <label id="sum2">{{$value->sale}}</label>
                                            <p> : مبلغ </p>
                                        </div>
                                        <div class="custom-control">
                                            <p class="pr-3"> trc20 آدرس </p>
                                            <div class="custom-control-inline">
                                                <button class="btn btn-sm btn-light mr-2" onclick="copy()">کپی</button>
                                                <input type="text" id="myInput" class="form control form-control" value="{{ $value->trc20 }}">
                                            </div>
                                            <div class="valid-feedback">!مناسب</div>
                                            <div class="invalid-feedback">از مقادیر معتبر استفاده کنید</div>
                                            <p>هرگونه اشتباه در کپی کردن آدرس ولت بالا برعهده فروشنده میباشد</p>
                                        </div>
                                        <div class="custom-control">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect"> اضافه شدن مبلغ به </label>
                                            <select class="custom-select mr-sm-2" name="pushTo" id="inlineFormCustomSelect">
                                                <option value="wallet" selected>کیف پول</option>
                                                <option value="other">حساب بانکی</option>
                                            </select>
                                        </div>
                                        <div class="custom-control">
                                            جمع پرداخت + کارمزد انتقال
                                            <label id="total2">{{$value->sale}}</label>
                                            هزار تومان
                                        </div>
                                        <input id="transaction2" type="hidden" name="transaction" value=0>
                                        <input id="dollarRate2" type="hidden" name="dollarRate">
                                        <input id="totalPrice2" type="hidden" name="totalPrice">

                                        <div class="custom-control text-center custom-control-inline">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" required>
                                            <label class="form-check-label" for="remember">تمامی قوانین آرسس مارکت را قبول دارم</label>
                                        </div>

                                        <div id="submit2" >
                                            <button class="btn btn-outline-success mt-3" style="margin-right: 30%" type="submit">ارسال سفارش</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        var checkSims = function() {
            $.ajax({
                type: "GET",
                url:  '/user/market/data',
                success: function(data) {
                    $("#return").html(data.buy);
                },
                error: function() {
                    console.log(this.error);
                }
            });

        }

        var interval = 1000 * 60 * 10; // where X is your every X minutes

        setInterval(checkSims, interval);

        function count(){

            $.ajax({
                type: "GET",
                url:  '/user/market/data',
                success: function(data) {
                    console.clear();
                    var price = parseInt(data.buy);
                    console.log('بروزرسانی هر ده دقیقه یکبار');
                    console.log('قیمت واحد');
                    console.log(price);

                    var count = parseInt(document.getElementById("validationCustom01").value) ;
                    var sum   = price * count;

                    console.log('کل مبلغ');
                    console.log(sum);

                    $("#sum").html(sum);
                    var total = sum + parseInt(data.benefit);
                    console.log('کل مبلغ و کارمزد')
                    console.log(total)
                    var lowMoney = parseInt("{{ $wallet->rials }}");
                    var max = lowMoney - total;
                    console.log('باقیمانده پول کیف')
                    console.log(max)

                    if (total > 50000000 || count < 10) {
                        $("#submit").html("<p class='text-danger'>حداقل سفارش ده عدد و حداکثر مبلغ پنجاه میلیون میباشد</p><button id='submit' class='btn btn-outline-secondary disabled' style='margin-right: 30%' type='submit'>ارسال سفارش</button>");
                        console.log("%c%s","color: red; background: yellow; font-size: 10px;", "WARNING!");
                        console.log('حداقل ده عدد و حداکثر مبلغ پنجاه میلیون');
                    }
                    // else if (max < 0) {
                    //     $("#submit").html("<p class='text-warning'>مبلغ درخواست از موجودی کیف پول بیشتر شد</p><button id='submit' class='btn btn-outline-secondary disabled' style='margin-right: 30%' type='submit'>ارسال سفارش</button>");
                    //     console.log("%c%s","color: red; background: yellow; font-size: 10px;", "WARNING!");
                    //     console.log('از مبلغ کیف پول بیشتر است');
                    // }
                    else{
                        $("#submit").html("<button id='submit' class='btn btn-outline-success' style='margin-right: 30%' type='submit'>ارسال سفارش</button>");
                        console.log("%c%s","color: white; background: black; font-size: 10px;", "TRANSACTION TRUE!");
                    }

                    $("#total").html(total);

                    document.getElementById("dollarRate").value = (price);
                    document.getElementById("totalPrice").value = (total);


                },
                error: function() {
                    console.log(this.error);
                }
            });

        };
    </script>

    <script>
        var checkSims = function() {
            $.ajax({
                type: "GET",
                url:  '/user/market/data',
                success: function(data) {
                    $("#return2").html(data.sale);
                },
                error: function() {
                    console.log(this.error);
                }
            });

        }

        var interval = 1000 * 60 * 10; // where X is your every X minutes

        setInterval(checkSims, interval);

        function count2(){

            $.ajax({
                type: "GET",
                url:  '/user/market/data',
                success: function(data) {
                    console.clear();
                    var price2 = parseInt(data.sale);
                    console.log('بروزرسانی هر ده دقیقه یکبار');
                    console.log('قیمت واحد فروش');
                    console.log(price2);

                    var count2 = parseInt(document.getElementById("validationCustom010").value) ;
                    var sum2   = price2 * count2;

                    console.log('کل مبلغ فروش');
                    console.log(sum2);

                    $("#sum2").html(sum2);

                    var total2 = sum2;
                    console.log('کل مبلغ و کارمزد فروش')
                    console.log(total2)

                    var lowMoney2 = parseInt("{{ $wallet->dollar }}");
                    var max2 = lowMoney2 - count2;
                    console.log('باقیمانده دلار کیف')
                    console.log(max2)

                    if (total2 > 50000000) {
                        $("#submit2").html("<p class='text-danger'>حداکثر مبلغ پنجاه میلیون میباشد</p><button id='submit2' class='btn btn-outline-secondary disabled' style='margin-right: 30%' type='submit'>ارسال سفارش</button>");
                        console.log("%c%s","color: red; background: yellow; font-size: 10px;", "WARNING!");
                        console.log('حداکثر مبلغ فروش پنجاه میلیون');
                    }
                    else if (max2 < 0) {
                        $("#submit2").html("<p class='text-warning'>تعداد دلار ورودی از موجودی کیف پول بیشتر شد</p><button id='submit2' class='btn btn-outline-secondary disabled' style='margin-right: 30%' type='submit'>ارسال سفارش</button>");
                        console.log("%c%s","color: red; background: yellow; font-size: 10px;", "WARNING!");
                        console.log('از دلار کیف پول بیشتر است');
                    }
                    else{
                        $("#submit2").html("<button id='submit2' class='btn btn-outline-success' style='margin-right: 30%' type='submit'>ارسال سفارش</button>");
                        console.log("%c%s","color: white; background: black; font-size: 10px;", "TRANSACTION TRUE!");
                    }

                    $("#total2").html(total2);

                    document.getElementById("dollarRate2").value = (price2);
                    document.getElementById("totalPrice2").value = (total2);
                },
                error: function() {
                    console.log(this.error);
                }
            });

        };
    </script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script>
        function copy() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        }
    </script>

@endsection
