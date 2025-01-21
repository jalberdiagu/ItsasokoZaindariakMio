@if($message = Session::get("success"))
    <div class="alert alert-success text-center">
        {{ $message }}
    </div>
@endif

@if($message = Session::get("danger"))
    <div class="alert alert-danger text-center">
        {{ $message }}
    </div>
@endif
