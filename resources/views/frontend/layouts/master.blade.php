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
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                {{--Navbar Brand --}}
                <a class="navbar-brand" href="#">Halumshop</a>

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
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="menu-item">Hello 7</li>
                        <li class="menu-item">Hello 8</li>
                        <li class="menu-item">Hello 9</li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    {{-- End Header --}}

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
