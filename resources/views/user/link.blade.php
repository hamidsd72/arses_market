@extends('layouts.app')
@section('content')

    <div class="container text-right">
        <!-- Modal Header -->
        <div class="modal-header">
            <a class="ml-5 text-dark h5 mt-2" href="{{route('home')}}"><< لینک برگشت</a>
            <button type="button" class="close " data-dismiss="modal"></button>
            <h5 class="modal-title">ویرایش نمایه</h5>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="form-group">
                <p>لینک برای معرفی دوستان</p>
                <p>لینک زیر را کپی کرده و برای دوستان ارسال نمایید</p>
                <input type="text" id="myInput" class="form control form-control" value="mysite/register/{{ Auth::user()->name }}">
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
            <button class="btn btn-success" onclick="copy()">کپی</button>
        </div>
    </div>

    <script>
        function copy() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        }
    </script>

@endsection