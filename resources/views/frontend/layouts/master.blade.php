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

    {{-- Header --}}
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                {{-- Hamburger Menu --}}
                <div class="hamburger__menu mr-3" title="Sidebar">
                    <a href="#" class="hamburger__menu__link">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                </div>

                {{--Navbar Brand --}}
                <a class="navbar-brand" href="#"><span style="color: #17a2b8;">Halum</span>shop</a>

                {{-- Navbar Toggler Button--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav search-box ml-3">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search products" aria-label="Search">
                            <button class="btn btn-outline-muted my-2 my-sm-0" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Wishlist">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>1</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Cartlist">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>1</span>
                            </a>
                        </li>

                        <li class="btn-group ml-4" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Lng
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">Bangla</a>
                                    <a class="dropdown-item" href="#">English</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item ml-3">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Login</button>
                        </li>
                    </ul>
                </div>

                <div class="header__sidebar">
                    <div class="header__sidebar__top">
                        {{--Navbar Brand --}}
                        <a class="navbar-brand" href="#"><span style="color: #17a2b8;">Halum</span>shop</a>
                        <button class="close-btn"><i class="fa fa-times"></i></button>
                    </div>
                    <ul class="header__sidebar__menu">
                        <li class="header__sidebar__menu__item">
                            <a href="#" class="header__sidebar__menu__item__link">Home</a>
                        </li>
                        <li class="header__sidebar__menu__item dropdown">
                            <a href="#" class="header__sidebar__menu__item__link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </li>
                        <li class="header__sidebar__menu__item">
                            <a href="#" class="header__sidebar__menu__item__link">Team</a>
                        </li>
                        <li class="header__sidebar__menu__item">
                            <a href="#" class="header__sidebar__menu__item__link">Pricing</a>
                        </li>
                    </ul>
                    <div class="header__sidebar__media">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    {{-- End Header --}}

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
