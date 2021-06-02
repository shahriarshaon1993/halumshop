<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>

    {{-- Header --}}
    <header class="header">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
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
                            <input class="form-control mr-sm-2 search-product" type="search" placeholder="Search products" aria-label="Search">
                            <button class="btn btn-outline-muted my-2 my-sm-0" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item wishlist">
                            <a class="nav-link" href="#" title="Wishlist">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>1</span>
                            </a>
                        </li>

                        <li class="nav-item cart">
                            <a class="nav-link" href="#" title="Cartlist">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>1</span>
                            </a>
                        </li>

                        <li class="nav-item ml-3 user-btn">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                                <i class="fa fa-user-o" aria-hidden="true"></i> Login
                            </button>
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
                    <!--<div class="header__sidebar__media">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div> -->
                </div>

            </div>
        </nav>
    </header>
    {{-- End Header --}}

    {{-- Main --}}
    <main role="main">
        {{-- Banner --}}
        <section class="banner">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="https://mdbootstrap.com/img/Photos/Slides/img%20(49).jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="https://mdbootstrap.com/img/Photos/Slides/img%20(50).jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Another example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide" src="https://mdbootstrap.com/img/Photos/Slides/img%20(56).jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>One more for good measure.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        {{--End Banner --}}

        {{-- Products --}}
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="section-title">
                            <h4>Products</h4>
                        </div>
                        <div class="section-button">
                            <a href="#" class="btn btn-info">View all &#10141;</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 mt-4">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mt-4">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mt-4">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mt-4">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mt-4">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mt-4">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mt-4">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mt-4">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--End Products --}}

        {{-- Categories --}}
        <section class="category spad">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-md-2">
                        <div class="section-title">
                            <h4>Categories</h4>
                        </div>

                        <div class="row">
                            <div class="swiper-container category-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide col-md-4">
                                        <div class="card p-3 text-center border-0">
                                             <div class="card-body">
                                                <img src="{{ asset('photos/img25.jpg') }}">
                                                <hr/>
                                                <h2 class="card-title display-1" style="font-size:3.0vmin;">
                                                    <a href="#">Saving Account</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide col-md-4">
                                        <div class="card p-3 text-center border-0">
                                             <div class="card-body">
                                                <img src="{{ asset('photos/img25.jpg') }}">
                                                <hr/>
                                                <h2 class="card-title display-1" style="font-size:3.0vmin;">
                                                    <a href="#">Saving Account</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide col-md-4">
                                        <div class="card p-3 text-center border-0">
                                             <div class="card-body">
                                                <img src="{{ asset('photos/img25.jpg') }}">
                                                <hr/>
                                                <h2 class="card-title display-1" style="font-size:3.0vmin;">
                                                    <a href="#">Saving Account</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide col-md-4">
                                        <div class="card p-3 text-center border-0">
                                             <div class="card-body">
                                                <img src="{{ asset('photos/img25.jpg') }}">
                                                <hr/>
                                                <h2 class="card-title display-1" style="font-size:3.0vmin;">
                                                    <a href="#">Saving Account</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide col-md-4">
                                        <div class="card p-3 text-center border-0">
                                             <div class="card-body">
                                                <img src="{{ asset('photos/img25.jpg') }}">
                                                <hr/>
                                                <h2 class="card-title display-1" style="font-size:3.0vmin;">
                                                    <a href="#">Saving Account</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 order-md-1 asaid">
                        <img src="{{ asset('photos/img-1.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Category Image">
                    </div>
                </div>
            </div>
        </section>
        {{-- End Categories --}}

        {{-- Best Rated --}}
        <section class="best-rated spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="section-title">
                            <h4>Best rated</h4>
                        </div>
                        <div class="section-button">
                            <a href="#" class="btn btn-info">View all &#10141;</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--End Best Rated --}}

        {{-- Hot Deal --}}
        <section class="hot-deal spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="section-title">
                            <h4>Hot deal</h4>
                        </div>
                        <div class="section-button">
                            <a href="#" class="btn btn-info">View all &#10141;</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Hot Deal --}}

        {{-- Trand --}}
        <section class="trand spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="section-title">
                            <h4>Tranding</h4>
                        </div>
                        <div class="section-button">
                            <a href="#" class="btn btn-info">View all &#10141;</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{ asset('photos/img25.jpg') }}" alt="product image 1">
                                    <img class="pic-2" src="{{ asset('photos/img26.jpg') }}" alt="product image 2">
                                </a>
                                <span class="product-sale-label">sale!</span>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <div class="product-rating">
                                    <a class="add-to-cart" href="#"> ADD TO CART </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="price"><span>$28.00</span>$20.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Trand --}}

        {{-- Blog --}}
        <section class="blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="section-title">
                            <h4>Blog</h4>
                        </div>
                        <div class="section-button">
                            <a href="#" class="btn btn-info">View all &#10141;</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__single__latest">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(50).jpg" alt="Blog Image">
                            <div class="blog__single__latest__text p-2">
                                <div class="blog__single__latest__text__tag">
                                    <div class="blog__single__latest__text__tag__item">
                                        <i class="fa fa-calendar-o"></i>
                                        May 4,2019
                                    </div>
                                    <div class="blog__single__latest__text__tag__item">
                                        <i class="fa fa-comment-o"></i>
                                        8
                                    </div>
                                </div>
                                <a href=""><h4>The Best Street Style From London Fashion Week</h4></a>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog__single__latest">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(20).jpg" alt="Blog Image">
                            <div class="blog__single__latest__text p-2">
                                <div class="blog__single__latest__text__tag">
                                    <div class="blog__single__latest__text__tag__item">
                                        <i class="fa fa-calendar-o"></i>
                                        May 4,2019
                                    </div>
                                    <div class="blog__single__latest__text__tag__item">
                                        <i class="fa fa-comment-o"></i>
                                        10
                                    </div>
                                </div>
                                <a href=""><h4>The Best Street Style From London Fashion Week</h4></a>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog__single__latest">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(13).jpg" alt="Blog Image">
                            <div class="blog__single__latest__text p-2">
                                <div class="blog__single__latest__text__tag">
                                    <div class="blog__single__latest__text__tag__item">
                                        <i class="fa fa-calendar-o"></i>
                                        May 4,2019
                                    </div>
                                    <div class="blog__single__latest__text__tag__item">
                                        <i class="fa fa-comment-o"></i>
                                        5
                                    </div>
                                </div>
                                <a href=""><h4>The Best Street Style From London Fashion Week</h4></a>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Blog --}}

        {{-- Partner Logo --}}
        <div class="partner-logo">
            <div class="container">

            </div>
        </div>
        {{-- End Partner Logo --}}

        {{-- Footer Section --}}
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer__left">
                            <div class="footer__left__logo">
                                {{--Navbar Brand --}}
                                <a class="navbar-brand" href="#"><span style="color: #17a2b8;">Halum</span>shop</a>
                            </div>
                            <ul>
                                <li>Address: 60-49 Road 11378 New York</li>
                                <li>Phone: +65 11.188.888</li>
                                <li>Email: examle@gmail.com</li>
                            </ul>
                            <div class="footer__left__social">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 offset-lg-1">
                        <div class="footer__widget">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Blogs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer__widget">
                            <h5>My Account</h5>
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer__newslatter__item">
                            <h5>Join Our Newsletter Now</h5>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            <form action="#" class="footer__newslatter__item__form">
                                <input type="text" name="" id="" placeholder="Enter Your Mail">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__copyright__reserved">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__copyright__reserved__text">
                                Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/profile.php?id=100005939237959" target="_blank">Shaon Shahriar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{-- End Footer Section --}}
    </main>
    {{--End Main --}}

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
