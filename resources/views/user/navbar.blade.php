<div class="collapse" id="navbarToggleExternalContent">
    <div class="mr-5 text-light text-right">
        <h4 class="mb-4 ">میز کار</h4>
        <a class="btn btn-block btn-secondary" href="{{ route('transaction.create') }}">خرید و فروش تتر</a>
        <a class="btn btn-block btn-secondary" href="{{ route('transaction.index') }}">پیگیری سفارشات</a>        
        <a class="btn btn-block btn-secondary" href="{{route('user.show',Auth::user()->id)}}">ویرایش نمایه</a>
        <a class="btn btn-block btn-secondary" href="{{route('authUser.show',Auth::user()->id)}}">احراز هویت</a>
        <a class="btn btn-block btn-secondary" href="{{route('user.edit',Auth::user()->id)}}">کسب درآمد با معرفی</a>
        <a class="btn btn-block btn-secondary" href="{{route('comment.create') }}">پشتیبانی</a>
        <div class="mt-4 text-dark">
            <h4>آرسس مارکت</h4>
            <p>031-5544-8088</p>
            <div class="row">
                <div class="col">
                    <a href="#">
                        <img class="rounded" src="logo.jpeg" width="50px" alt="آرسس مارکت">
                    </a>
                </div>
                <div class="col text-left">
                    <a href="#">
                        <img class="rounded" src="logo.jpeg" width="50px" alt="آرسس مارکت">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>