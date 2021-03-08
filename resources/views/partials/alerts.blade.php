
 @if (session('success'))
 <div class="alert alert-success text-center" role="alert">
    <button class="btn btn-sm close" data-dismiss="alert">X</button>

     {{ session('success') }}
 </div>
@endif

@if (session('warning'))
<div class="alert alert-warning text-center" role="alert">
    <button class="btn btn-sm close" data-dismiss="alert">X</button>

    {{ session('warning') }}
</div>
@endif


@if (session('error'))

<div class="alert alert-danger text-center" role="alert">
    <button class="btn btn-sm close" data-dismiss="alert">X</button>

    {{ session('error') }}

</div>
@endif

