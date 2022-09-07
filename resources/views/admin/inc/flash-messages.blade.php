@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  <strong>Success!</strong> {{ $message }}
</div>
@endif
@if ($message = Session::get('update'))
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
  <strong></strong> {{ $message }}
</div>
@endif
@if ($message = Session::get('delete'))
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
  <strong> {{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
  <strong>Error!</strong> {{ $message }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
  <strong>Error!</strong> Something whent wrong!
</div>
@endif


@if (session('status'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('status') }}
    </div>
@endif
