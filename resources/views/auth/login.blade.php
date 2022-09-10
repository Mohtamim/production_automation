<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.inc.style')
    <title>Document</title>
</head>
<body>

    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
        <div class="card mt-3 mb-3">
            <div class="card-body">
                <div class="col-md-12">
                    @include('admin.inc.flash-messages')
                  </div>
               <form action="{{ route('admin.login') }}" method="POST">
                <div class="row">
                    <div class="col-md-12 mb-3">

                        <h2>Sign In</h2>
                        <p>Enter your email and password to login</p>

                    </div>
                    @csrf
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="userName">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <div class="form-check form-check-primary form-check-inline">
                                <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                <label class="form-check-label" for="form-check-default">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-secondary w-100">SIGN IN</button>
                        </div>
                    </div>



                </div>
               </form>

            </div>
        </div>
    </div>

</body>
</html>
