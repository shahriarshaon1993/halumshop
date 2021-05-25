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
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </li>

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

                        <li class="nav-item ml-3">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Login</button>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    {{-- End Header --}}

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
