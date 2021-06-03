@extends('frontend.layouts.master')

@section('content')
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
@endsection
