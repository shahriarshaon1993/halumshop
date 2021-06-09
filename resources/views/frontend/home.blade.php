@extends('frontend.layouts.master')

@section('content')

    @include('backend.partials._message')

    {{-- Banner --}}
    <section class="banner">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($sliders as $key => $slider)
                    <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="first-slide" src="{{ asset($slider->image) }}" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>{{ $slider->title }}</h1>
                                <p>{!! $slider->description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
    @if ($products->count() > 0))
        <section class="product spad">
            <div class="container section-shadow">
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
                    @foreach ($products as $product)
                        <div class="col-md-3 col-sm-6 mt-4">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img class="pic-1" src="{{ asset($product->image_one) }}" alt="product image 1">
                                        <img class="pic-2" src="{{ asset($product->image_two) }}" alt="product image 2">
                                    </a>

                                    @if ($product->discount_price == NULL || $product->hot_new == 1)
                                        <span class="product-sale-label">new!</span>
                                    @else
                                        <span class="product-sale-label">
                                            @php
                                                $amount = $product->selling_price - $product->discount_price;
                                                $discount = $amount/$product->selling_price*100;
                                            @endphp
                                            {{ intval($discount) }}%
                                        </span>
                                    @endif

                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-rating">
                                        <a class="add-to-cart" href="#"> ADD TO CART </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ $product->product_title }}</a></h3>
                                    @if ($product->discount_price == NULL)
                                        <div class="price">৳ {{ $product->selling_price }}</div>
                                    @else
                                        <div class="price">
                                            <span>৳ {{ $product->selling_price }}</span>
                                            ৳ {{ $product->discount_price }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{--End Products --}}

    {{-- Categories --}}
    @if ($parentCategories->count() > 0)
        <section class="category spad">
            <div class="container section-shadow">
                <div class="row">
                    <div class="col-md-8 order-md-2">
                        <div class="section-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="row">
                            @foreach ($parentCategories as $parentCategory)
                                <div class="col-md-4 mb-3">
                                    <a href="#" class="btn btn-category">
                                        <div class="d-flex justify-content-between align-items-center px-1">
                                            <span>{{ $parentCategory->name }}</span>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-4 order-md-1 asaid">
                        <img src="{{ asset('photos/img-1.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Category Image">
                    </div>
                </div>
            </div>
        </section>
    @endif
    {{-- End Categories --}}

    {{-- Best Rated --}}
    @if ($bestRated->count() > 0)
        <section class="best-rated spad">
            <div class="container section-shadow">
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
                <div class="row product-slider">
                    @foreach ($bestRated as $product)
                        <div class="col-md-12 mt-4">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img class="pic-1" src="{{ asset($product->image_one) }}" alt="product image 1">
                                        <img class="pic-2" src="{{ asset($product->image_two) }}" alt="product image 2">
                                    </a>

                                    @if ($product->discount_price == NULL || $product->hot_new == 1)
                                        <span class="product-sale-label">new!</span>
                                    @else
                                        <span class="product-sale-label">
                                            @php
                                                $amount = $product->selling_price - $product->discount_price;
                                                $discount = $amount/$product->selling_price*100;
                                            @endphp
                                            {{ intval($discount) }}%
                                        </span>
                                    @endif

                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-rating">
                                        <a class="add-to-cart" href="#"> ADD TO CART </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ $product->product_title }}</a></h3>
                                    @if ($product->discount_price == NULL)
                                        <div class="price">৳ {{ $product->selling_price }}</div>
                                    @else
                                        <div class="price">
                                            <span>৳ {{ $product->selling_price }}</span>
                                            ৳ {{ $product->discount_price }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{--End Best Rated --}}

    {{-- Hot Deal --}}
    @if ($hotDeal->count() > 0)
        <section class="hot-deal spad">
            <div class="container section-shadow">
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
                <div class="row product-slider">
                    @foreach ($hotDeal as $product)
                        <div class="col-md-12 mt-4">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img class="pic-1" src="{{ asset($product->image_one) }}" alt="product image 1">
                                        <img class="pic-2" src="{{ asset($product->image_two) }}" alt="product image 2">
                                    </a>

                                    @if ($product->discount_price == NULL || $product->hot_new == 1)
                                        <span class="product-sale-label">new!</span>
                                    @else
                                        <span class="product-sale-label">
                                            @php
                                                $amount = $product->selling_price - $product->discount_price;
                                                $discount = $amount/$product->selling_price*100;
                                            @endphp
                                            {{ intval($discount) }}%
                                        </span>
                                    @endif

                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-rating">
                                        <a class="add-to-cart" href="#"> ADD TO CART </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ $product->product_title }}</a></h3>
                                    @if ($product->discount_price == NULL)
                                        <div class="price">৳ {{ $product->selling_price }}</div>
                                    @else
                                        <div class="price">
                                            <span>৳ {{ $product->selling_price }}</span>
                                            ৳ {{ $product->discount_price }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{-- End Hot Deal --}}

    {{-- Trand --}}
    @if ($trands->count() > 0)
        <section class="trand spad">
            <div class="container section-shadow">
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
                <div class="row product-slider">
                    @foreach ($trands as $product)
                        <div class="col-md-12 mt-4">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img class="pic-1" src="{{ asset($product->image_one) }}" alt="product image 1">
                                        <img class="pic-2" src="{{ asset($product->image_two) }}" alt="product image 2">
                                    </a>

                                    @if ($product->discount_price == NULL || $product->hot_new == 1)
                                        <span class="product-sale-label">new!</span>
                                    @else
                                        <span class="product-sale-label">
                                            @php
                                                $amount = $product->selling_price - $product->discount_price;
                                                $discount = $amount/$product->selling_price*100;
                                            @endphp
                                            {{ intval($discount) }}%
                                        </span>
                                    @endif

                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-rating">
                                        <a class="add-to-cart" href="#"> ADD TO CART </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ $product->product_title }}</a></h3>
                                    @if ($product->discount_price == NULL)
                                        <div class="price">৳ {{ $product->selling_price }}</div>
                                    @else
                                        <div class="price">
                                            <span>৳ {{ $product->selling_price }}</span>
                                            ৳ {{ $product->discount_price }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{-- End Trand --}}

    {{-- Blog --}}
    @if ($posts->count() > 0)
        <section class="blog spad">
            <div class="container section-shadow">
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

                <div class="row blog-slider">
                    @foreach ($posts as $post)
                        <div class="col-md-12">
                            <div class="blog__single__latest">
                                <img src="{{ $post->image }}" alt="Blog Image">
                                <div class="blog__single__latest__text p-2">
                                    <div class="blog__single__latest__text__tag">
                                        <div class="blog__single__latest__text__tag__item">
                                            <i class="fa fa-calendar-o"></i>
                                            {{ $post->created_at->format('F d, Y') }}
                                        </div>
                                        <div class="blog__single__latest__text__tag__item">
                                            <i class="fa fa-comment-o"></i>
                                            8
                                        </div>
                                    </div>
                                    <a href=""><h4>{{ $post->title_en }}</h4></a>
                                    <p>{{ Str::limit($post->description_en, 80) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{-- End Blog --}}

    {{-- Partner Logo --}}
    @if ($brands->count() > 0)
        <div class="partner">
            <div class="container">
                <div class="row partner-slider">
                    @foreach ($brands as $brand)
                        <div class="col-md-12">
                            <a href="#" class="partner__logo">
                                <img src="{{ asset($brand->logo) }}" alt="Parner Logo">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    {{-- End Partner Logo --}}
@endsection
