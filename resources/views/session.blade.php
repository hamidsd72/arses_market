@if (session()->has('flash_message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <h4 class="text-success text-center">{!! session()->get('flash_message') !!}</h4>
        {{-- <a class="float-left h1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a> --}}
    </div>
    <script>
        setTimeout(function() { 
                $(".alert").alert('close')
        }, 5000);
    </script>
@endif
