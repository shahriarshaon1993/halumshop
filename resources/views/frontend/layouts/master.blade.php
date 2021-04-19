<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    info@halumshop.com
                                </li>
                                <li>
                                    +880 1723 77 12 08
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container header__middle">
            <div class="row">
                <div class="col-lg-3">
                    <a href="navbar-brand">
                        <img src="{{ asset('photos/logo.png') }}" alt="Logo" class="header__middle__logo">
                    </a>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <form class="form-inline">
                        <div class="input-group header__middle__search">
                            <input type="text" class="form-control" placeholder="Search for products">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <div class="header__middle__auth">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
