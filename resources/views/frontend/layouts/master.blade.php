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
    {{-- Start Header Section --}}
    <header class="header">
        {{-- Start Header Top --}}
        <div class="header__top">
            <div class="container-fluid">
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
        {{-- End Header Top --}}

        {{-- Start Middle Section --}}
        <div class="container-fluid header__middle">
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
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <div class="header__middle__cart">
                        <a href="#">
                            <i class="fa fa-heart fa-2x"></i>
                            <span>0</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart fa-2x"></i>
                            <span>0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Middle Section --}}

        {{-- Start Navbar --}}
        <div class="container-fluid header__main">
            <div class="row px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a class="header__main__toggle d-flex align-items-center justify-content-between w-100" data-toggle="collapse" href="#navbar-vertical">
                        <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                        <i class="fa fa-angle-down text-dark"></i>
                    </a>
                    <nav class="header__main__drowp collapse position-absolute navbar navbar-vertical align-items-start" id="navbar-vertical">
                        <div class="navbar-nav w-100">
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                                <div class="header__main__drowp__sub dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="" class="dropdown-item">Men's Dresses</a>
                                    <a href="" class="dropdown-item">Women's Dresses</a>
                                    <a href="" class="dropdown-item">Baby's Dresses</a>
                                </div>
                            </div>
                            <a href="" class="nav-item nav-link">Shirts</a>
                            <a href="" class="nav-item nav-link">Jeans</a>
                            <a href="" class="nav-item nav-link">Swimwear</a>
                            <a href="" class="nav-item nav-link">Sleepwear</a>
                            <a href="" class="nav-item nav-link">Sportswear</a>
                            <a href="" class="nav-item nav-link">Jumpsuits</a>
                            <a href="" class="nav-item nav-link">Blazers</a>
                            <a href="" class="nav-item nav-link">Jackets</a>
                            <a href="" class="nav-item nav-link">Shoes</a>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar header__navbar__main navbar-expand-lg navbar-dark py-lg-0 px-0">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav text-center mr-auto py-0">
                                <a href="index.html" class="nav-item nav-link active">Home</a>
                                <a href="shop.html" class="nav-item nav-link">About</a>
                                <a href="detail.html" class="nav-item nav-link">Blog</a>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="form-inline my-2 my-lg-0 justify-content-center">
                                <a href="shop.html" class="nav-item nav-link">
                                    <i class="fa fa-sign-in mx-2"></i>Sign In
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        {{-- End Navbar --}}

    </header>
    {{-- Start Header Section --}}

    {{-- Start Category Section --}}
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg" style="background-image: url('{{ asset('photos/category-1.jpg') }}')">
                        <div class="categories__text">
                            <h2>Women’s fashion</h2>
                            <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore edolore magna aliquapendisse ultrices gravida.</p>
                            <a href="#" class="text-decoration-none">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" style="background-image: url('{{ asset("photos/category-2.jpg") }}')">
                                <div class="categories__text">
                                    <h4>Men's fashion</h4>
                                    <p>358 items</p>
                                    <a href="#">Show now</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" style="background-image: url('{{ asset("photos/category-3.jpg") }}')">
                                <div class="categories__text">
                                    <h4>Men's fashion</h4>
                                    <p>358 items</p>
                                    <a href="#">Show now</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" style="background-image: url('{{ asset("photos/category-4.jpg") }}')">
                                <div class="categories__text">
                                    <h4>Men's fashion</h4>
                                    <p>358 items</p>
                                    <a href="#">Show now</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" style="background-image: url('{{ asset("photos/category-5.jpg") }}')">
                                <div class="categories__text">
                                    <h4>Men's fashion</h4>
                                <p>358 items</p>
                                <a href="#">Show now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Category Section --}}

    {{-- Start Product Section --}}
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>All Product</h4>
                    </div>
                </div>
            </div>
            <div class="row product__gallery">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product__item">
                        <div class="product__item__img">
                            <img src="{{ asset('photos/category-2.jpg') }}" alt="" class="card-img-top">
                            <div class="label new">New</div>
                        </div>
                        <div class="product__item__text">
                            <h6 class="card-title">Card Title</h6>
                            <div class="product__price">
                                BDT 490
                                <span>BDT 890</span>
                            </div>
                            {{-- <a href="#" class="btn btn-sm btn-success mt-3">Add To Cart</a> --}}
                        </div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('photos/category-2.jpg') }}" class="image-popup">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-shopping-cart"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product__item">
                        <div class="product__item__img">
                            <img src="{{ asset('photos/category-2.jpg') }}" alt="" class="card-img-top">
                            <div class="label new">New</div>
                        </div>
                        <div class="product__item__text">
                            <h6 class="card-title">Card Title</h6>
                            <div class="product__price">
                                BDT 490
                                <span>BDT 890</span>
                            </div>
                        </div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('photos/category-2.jpg') }}" class="image-popup">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-shopping-cart"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product__item">
                        <div class="product__item__img">
                            <img src="{{ asset('photos/category-2.jpg') }}" alt="" class="card-img-top">
                            <div class="label new">New</div>
                        </div>
                        <div class="product__item__text">
                            <h6 class="card-title">Card Title</h6>
                            <div class="product__price">
                                BDT 490
                                <span>BDT 890</span>
                            </div>
                        </div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('photos/category-2.jpg') }}" class="image-popup">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-shopping-cart"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product__item">
                        <div class="product__item__img">
                            <img src="{{ asset('photos/category-2.jpg') }}" alt="" class="card-img-top">
                            <div class="label new">New</div>
                        </div>
                        <div class="product__item__text">
                            <h6 class="card-title">Card Title</h6>
                            <div class="product__price">
                                BDT 490
                                <span>BDT 890</span>
                            </div>
                        </div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('photos/category-2.jpg') }}" class="image-popup">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-shopping-cart"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product__item">
                        <div class="product__item__img">
                            <img src="{{ asset('photos/category-2.jpg') }}" alt="" class="card-img-top">
                            <div class="label new">New</div>
                        </div>
                        <div class="product__item__text">
                            <h6 class="card-title">Card Title</h6>
                            <div class="product__price">
                                BDT 490
                                <span>BDT 890</span>
                            </div>
                        </div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('photos/category-2.jpg') }}" class="image-popup">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-shopping-cart"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product__item">
                        <div class="product__item__img">
                            <img src="{{ asset('photos/category-2.jpg') }}" alt="" class="card-img-top">
                            <div class="label new">New</div>
                        </div>
                        <div class="product__item__text">
                            <h6 class="card-title">Card Title</h6>
                            <div class="product__price">
                                BDT 490
                                <span>BDT 890</span>
                            </div>
                        </div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('photos/category-2.jpg') }}" class="image-popup">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-shopping-cart"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product__item">
                        <div class="product__item__img">
                            <img src="{{ asset('photos/category-2.jpg') }}" alt="" class="card-img-top">
                            <div class="label new">New</div>
                        </div>
                        <div class="product__item__text">
                            <h6 class="card-title">Card Title</h6>
                            <div class="product__price">
                                BDT 490
                                <span>BDT 890</span>
                            </div>
                        </div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('photos/category-2.jpg') }}" class="image-popup">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-shopping-cart"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product__item">
                        <div class="product__item__img">
                            <img src="{{ asset('photos/category-2.jpg') }}" alt="" class="card-img-top">
                            <div class="label new">New</div>
                        </div>
                        <div class="product__item__text">
                            <h6 class="card-title">Card Title</h6>
                            <div class="product__price">
                                BDT 490
                                <span>BDT 890</span>
                            </div>
                        </div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('photos/category-2.jpg') }}" class="image-popup">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="image-popup">
                                    <span class="fa fa-shopping-cart"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Product Section --}}

    {{-- START SUBCRIBE --}}
    <section class="subscribe py-5">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6 subscribe__text">
                    <h2>Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe__form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" name="" id="" placeholder="Enter e-mail address">
                            <input type="submit" class="submit px-3" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- END SUBCRIBE --}}

    {{--START TREND --}}
    <section class="trend">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Hot Trend</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Hot Trend</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Hot Trend</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="{{ asset('photos/ht-1.jpg') }}" alt="">
                            </div>

                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">BDT 45</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--END TREND --}}

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
