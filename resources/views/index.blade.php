@extends('layouts.welcome')
@section('content')
<!-- ======= Header ======= -->
{{-- <img src="logo.jpeg" width="10%" class="float-left rounded" alt="آرسس مارکت"> --}}
<header id="header" class="header-tops float-lg-right text-center">
    <div class="container">

        <h1><a href="#">آرسس مارکت</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        <h2><span>سریعترین پلتفرم خرید و فروش ارز دیجیتال</span></h2>

        <nav class="nav-menu">
            <ul>
                <li><a href="/home" class="text-success">ورود</a></li>
                <li><a href="#contact">ارتباط با ما</a></li>
                {{-- <li><a href="#services">خدمات</a></li> --}}
                <li><a href="#resume">آرسس چیست</a></li>
                <li class="active"><a href="#header">خانه</a></li>
            </ul>
        </nav><!-- .nav-menu -->

        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

    </div>
</header><!-- End Header -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

        <div class="text-right">
            <img src="t.png" class="float-right pt-1 ml-2" width="25px" alt="T">
            <h3>سریعترین پلتفرم خرید و فروش ارز دیجیتال</h3>
        </div>

        <div class="row text-right">
            <div class="col-lg-12 p-lg-4 p-3">
                <div class="resume-item">
                    <h4>تیم آرسس مارکت</h4>
                    <p class="d-none d-lg-block h5">
                        تیم آرسس از چندین جوان باتجربه در زمینه ارز دیجیتال(رمز ارز) تشکیل شده که بخوبی نیازها و
                        چالش های موجود در این حیطه را شناسایی کرده و درپی برطرف کردن این نیاز هستند
                    </p>
                    <p class="d-lg-none">
                        تیم آرسس از چندین جوان باتجربه در زمینه ارز دیجیتال(رمز ارز) تشکیل شده که بخوبی نیازها و
                        چالش های موجود در این حیطه را شناسایی کرده و درپی برطرف کردن این نیاز هستند
                    </p>
                </div>
            </div>
            <div class="col-lg-6 p-4 d-lg-none">
                <div class="resume-item">
                    <h4 class="">آرسس مارکت چیست ؟</h4>
                    <h5 class="">: خرید و فروش دلار دیجیتال(تتر) با</h5>
                    <p class="">
                    <ul>
                        <li>سرعت بالا</li>
                        <li>بهترین قیمت</li>
                        <li>پشتیبانی فعال</li>
                        <li>کمترین کارمزد انتقال</li>
                        <li>احراز هویت سریع و آسان</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 p-4">
                <div class="resume-item pb-4">
                    <h4>بهترین ها در آرسس مارکت</h4>
                    <p class="h5 d-none d-lg-block">
                        اگر تریدر ارز دیجیتال هستید و در صرافی هایی مانند بایننس و کوینکس یا صرافی های مشابه فعالیت میکنید
                        کیفیت خرید و فروش تتر را در آرسس مارکت خواهید یافت
                    </p>
                    <p class="d-lg-none">
                        اگر تریدر ارز دیجیتال هستید و در صرافی هایی مانند بایننس و کوینکس یا صرافی های مشابه فعالیت میکنید
                        کیفیت خرید و فروش تتر را در آرسس مارکت خواهید یافت
                    </p>
                </div>
                <div class="resume-item">
                    <h4>: کسب درآمد از طریق آرسس مارکت</h4>
                    <br>
                    <ul class="pr-2" style="color: #0000">
                        <li><p class="text-white"><strong>شما میتوانید به راحتی لینک معرفی اختصاصی خود را در پنل کاربری دریافت کنید</strong></p></li>
                        <li><p class="text-white">کافیست دوستان شما, از طریق لینک ارسالی ثبت نام کنند</p></li>
                        <li><p class="text-white">حالا با هر خرید توسط افراد معرفی شده ۲۰ درصد کارمزد دریافت میکنید</p></li>
                        <li><p class="text-white">که به کیف پول شما اضافه خواهد شد و میتوانید آنرا بصورت ریالی یا دلاری استفاده کنید</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 p-4 d-none d-lg-block">
                <div class="resume-item">
                    <h4>آرسس مارکت چیست ؟</h4>
                    <h5>: خرید و فروش دلار دیجیتال(تتر) با</h5>
                    <ul class="mt-2" style="color: #0000">
                        <li><p class="text-white">سرعت بالا</p> </li>
                        <li><p class="text-white">بهترین قیمت</p> </li>
                        <li><p class="text-white">پشتیبانی فعال</p> </li>
                        <li><p class="text-white">کمترین کارمزد انتقال</p> </li>
                        <li><p class="text-white">احراز هویت سریع و آسان</p> </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Resume Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="text-right">
            <img src="t.png" class="float-right pt-1 ml-2" width="25px" alt="T">
            <h3>خدمات آرسس مارکت</h3>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">میتوانید</a></h4>
                    <p></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">میتوانید</a></h4>
                    <p></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">میتوانید</a></h4>
                    <p></p>
                </div>
                {{-- <div class="icon"><i class="bx bx-world"></i>
                <div class="icon"><i class="bx bx-slideshow"></i>
                <div class="icon"><i class="bx bx-arch"></i> --}}
            </div>


        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="text-right">
            <img src="t.png" class="float-right pt-1 ml-2" width="25px" alt="T">
            <h3>ارتباط با تیم آرسس مارکت</h3>
        </div>

        <div class="row mt-2">

            <div class="col-md-6 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>آدرس شرکت</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-share-alt"></i>
                    <h3>آرسس در شبکه های اجتماعی</h3>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>رایانامه آرسس</h3>
                    <p>contact@example.com</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>تماس با ما</h3>
                    <p>+1 5589 55488 55</p>
                </div>
            </div>
        </div>

        <form action="" method="post" role="form" class="php-email-form mt-4">
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="نام و نام خانوادگی" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="رایانامه شما" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="موضوع پیام" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="توضیحات پیام"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">ارسال پیام</button></div>
        </form>

    </div>
</section><!-- End Contact Section -->

<div class="credits">powered by <a target="blank" href="http://jarchi-parsi.ir/my/">hamidsd72</a></div>

@endsection
