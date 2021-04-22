<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }} @section('title', 'Admin Login')</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">

    <style>
        button {
            cursor: pointer !important;
        }
    </style>
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
                <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">
                    Halumshop <span class="tx-info tx-normal">admin</span>
                </div>

                <div class="tx-center mg-b-60">Halumshop Admin Panel</div>

                @if ($errors->any())
                    <div class="alert alert-warning" role="alert">
                        @if (count($errors) > 1)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @else
                            {{ $errors->first() }}
                        @endif
                    </div>
                @endif

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div><!-- form-group -->

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="ckbox">
                    <input type="checkbox" name="remember"><span>Remember me</span>
                </div><!-- form-group -->

                <button type="submit" class="btn btn-info btn-block">Sign In</button>
            </div><!-- login-wrapper -->
        </form>
    </div><!-- d-flex -->

    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>

</body>

</html>