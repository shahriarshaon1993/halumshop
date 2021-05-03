@extends('frontend.layouts.master')

@section('content')

    {{-- Start Category Section --}}
    <section class="banner">
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                        alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                        alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                        alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
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

    {{-- START BLOG --}}
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>Our Blog</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('photos/category-3.jpg') }}" alt="">
                        </div>

                        <div class="blog__item__text">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o"></i>
                                     May 4,2019
                                </li>
                                <li>
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </li>
                            </ul>
                            <h5>
                                <a href="#">Cooking tips make cooking simple</a>
                            </h5>
                            <p>
                                Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('photos/category-3.jpg') }}" alt="">
                        </div>

                        <div class="blog__item__text">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o"></i>
                                     May 4,2019
                                </li>
                                <li>
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </li>
                            </ul>
                            <h5>
                                <a href="#">Cooking tips make cooking simple</a>
                            </h5>
                            <p>
                                Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('photos/category-3.jpg') }}" alt="">
                        </div>

                        <div class="blog__item__text">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o"></i>
                                     May 4,2019
                                </li>
                                <li>
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </li>
                            </ul>
                            <h5>
                                <a href="#">Cooking tips make cooking simple</a>
                            </h5>
                            <p>
                                Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END BLOG --}}

    {{-- START BRAND --}}
    <section class="brand swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="brand__item set-bg" style='background-image: url("{{ asset('photos/category-5.jpg') }}")'>
                    <div class="brand__text">
                        <a href="#">Facebbok</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </section>
    {{-- END BRAND --}}

@endsection
