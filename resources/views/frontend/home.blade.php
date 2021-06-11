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

    {{-- Main Container --}}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {{-- Hot Deal --}}
                @if ($hotDeals->count() > 0)
                    <section class="hotdeal spad">
                        <div class="card customCard">
                            <div class="card-header customCard__header">
                                Hot Deal
                                <a href="#" class="btn btn-sm btn-success">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="row sidebar-slider">
                                    @foreach ($hotDeals as $product)
                                        <div class="col-12">
                                            <div class="card ProductCard">
                                                <a href="#">
                                                    <img src="{{ asset($product->image_one) }}" class="card-img-top productCard__img" alt="{{ asset($product->image_one) }}">
                                                </a>
                                                <div class="ProductCard__label">
                                                    @if ($product->discount_price == NULL)
                                                        <span>Hot</span>
                                                    @else
                                                        <span>
                                                            @php
                                                                $amount = $product->selling_price - $product->discount_price;
                                                                $discount = $amount/$product->selling_price*100;
                                                            @endphp
                                                            {{ intval($discount) }}%
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="card-body productCard__body">
                                                    <h5 class="card-title productCard__title">
                                                        <a href="#">{{ $product->product_title }}</a>
                                                    </h5>
                                                    <div class="productCard__price">
                                                        @if ($product->discount_price == NULL)
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                        @else
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                            <span class="price-before-discount">
                                                                ৳ {{ intval($product->discount_price) }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="productCard__btn">
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="#" class="btn btn-sm btn-success btn-cart" title="Add to cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-success btn-wish" title="Wishlist">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                {{-- End Hot Deal --}}

                {{-- Categories --}}
                @if ($parentCategories->count() > 0)
                    <section class="category spad">
                        <div class="card customCard">
                            <div class="card-header customCard__header">
                                Categories
                            </div>
                            <div class="card-body">
                                @foreach ($parentCategories as $category)
                                    <a href="#" class="btn btn-sm btn-secondary category-btn mb-2">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
                {{-- End Categories --}}

                {{-- Special Offer --}}
                @if ($hotDeals->count() > 0)
                    <section class="hotdeal spad">
                        <div class="card customCard">
                            <div class="card-header customCard__header">
                                Special Offer
                                <a href="#" class="btn btn-sm btn-success">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="row sidebar-slider">
                                    @foreach ($specialOffer as $product)
                                        <div class="col-12">
                                            <div class="card ProductCard">
                                                <a href="#">
                                                    <img src="{{ asset($product->image_one) }}" class="card-img-top productCard__img" alt="{{ asset($product->image_one) }}">
                                                </a>
                                                <div class="ProductCard__label">
                                                    @if ($product->discount_price == NULL)
                                                        <span>Hot</span>
                                                    @else
                                                        <span>
                                                            @php
                                                                $amount = $product->selling_price - $product->discount_price;
                                                                $discount = $amount/$product->selling_price*100;
                                                            @endphp
                                                            {{ intval($discount) }}%
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="card-body productCard__body">
                                                    <h5 class="card-title productCard__title">
                                                        <a href="#">{{ $product->product_title }}</a>
                                                    </h5>
                                                    <div class="productCard__price">
                                                        @if ($product->discount_price == NULL)
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                        @else
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                            <span class="price-before-discount">
                                                                ৳ {{ intval($product->discount_price) }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="productCard__btn">
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="#" class="btn btn-sm btn-success btn-cart" title="Add to cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-success btn-wish" title="Wishlist">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                {{-- End Special Offer --}}
            </div>

            <div class="col-md-8">
                 {{-- Products --}}
                 @if ($products->count() > 0)
                    <section class="product spad">
                        <div class="card customCard">
                            <div class="card-header customCard__header">
                                Products
                                <a href="#" class="btn btn-sm btn-success">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="row product-slider">
                                    @foreach ($products as $product)
                                        <div class="col-12">
                                            <div class="card ProductCard">
                                                <a href="#">
                                                    <img src="{{ asset($product->image_one) }}" class="card-img-top productCard__img" alt="{{ asset($product->image_one) }}">
                                                </a>
                                                <div class="ProductCard__label">
                                                    @if ($product->discount_price == NULL)
                                                        <span>Hot</span>
                                                    @else
                                                        <span>
                                                            @php
                                                                $amount = $product->selling_price - $product->discount_price;
                                                                $discount = $amount/$product->selling_price*100;
                                                            @endphp
                                                            {{ intval($discount) }}%
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="card-body productCard__body">
                                                    <h5 class="card-title productCard__title">
                                                        <a href="#">{{ $product->product_title }}</a>
                                                    </h5>
                                                    <div class="productCard__price">
                                                        @if ($product->discount_price == NULL)
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                        @else
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                            <span class="price-before-discount">
                                                                ৳ {{ intval($product->discount_price) }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="productCard__btn">
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="#" class="btn btn-sm btn-success btn-cart" title="Add to cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-success btn-wish" title="Wishlist">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                 @endif
                 {{-- End Products --}}

                 {{-- Best Seller --}}
                 @if ($bestSellers->count() > 0)
                    <section class="product spad">
                        <div class="card customCard">
                            <div class="card-header customCard__header">
                                Best Seller
                                <a href="#" class="btn btn-sm btn-success">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="row product-slider">
                                    @foreach ($bestSellers as $product)
                                        <div class="col-12">
                                            <div class="card ProductCard">
                                                <a href="#">
                                                    <img src="{{ asset($product->image_one) }}" class="card-img-top productCard__img" alt="{{ asset($product->image_one) }}">
                                                </a>
                                                <div class="ProductCard__label">
                                                    @if ($product->discount_price == NULL)
                                                        <span>Hot</span>
                                                    @else
                                                        <span>
                                                            @php
                                                                $amount = $product->selling_price - $product->discount_price;
                                                                $discount = $amount/$product->selling_price*100;
                                                            @endphp
                                                            {{ intval($discount) }}%
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="card-body productCard__body">
                                                    <h5 class="card-title productCard__title">
                                                        <a href="#">{{ $product->product_title }}</a>
                                                    </h5>
                                                    <div class="productCard__price">
                                                        @if ($product->discount_price == NULL)
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                        @else
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                            <span class="price-before-discount">
                                                                ৳ {{ intval($product->discount_price) }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="productCard__btn">
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="#" class="btn btn-sm btn-success btn-cart" title="Add to cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-success btn-wish" title="Wishlist">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                 @endif
                 {{-- End Best Seller --}}

                 {{-- Trand --}}
                 @if ($trand->count() > 0)
                    <section class="product spad">
                        <div class="card customCard">
                            <div class="card-header customCard__header">
                                Trand
                                <a href="#" class="btn btn-sm btn-success">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="row product-slider">
                                    @foreach ($trand as $product)
                                        <div class="col-12">
                                            <div class="card ProductCard">
                                                <a href="#">
                                                    <img src="{{ asset($product->image_one) }}" class="card-img-top productCard__img" alt="{{ asset($product->image_one) }}">
                                                </a>
                                                <div class="ProductCard__label">
                                                    @if ($product->discount_price == NULL)
                                                        <span>Hot</span>
                                                    @else
                                                        <span>
                                                            @php
                                                                $amount = $product->selling_price - $product->discount_price;
                                                                $discount = $amount/$product->selling_price*100;
                                                            @endphp
                                                            {{ intval($discount) }}%
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="card-body productCard__body">
                                                    <h5 class="card-title productCard__title">
                                                        <a href="#">{{ $product->product_title }}</a>
                                                    </h5>
                                                    <div class="productCard__price">
                                                        @if ($product->discount_price == NULL)
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                        @else
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                            <span class="price-before-discount">
                                                                ৳ {{ intval($product->discount_price) }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="productCard__btn">
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="#" class="btn btn-sm btn-success btn-cart" title="Add to cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-success btn-wish" title="Wishlist">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                 @endif
                 {{-- End Trand --}}

                 {{-- Blog --}}
                 @if ($posts->count() > 0)
                    <section class="blog spad">
                        <div class="card customCard">
                            <div class="card-header customCard__header">
                                Blogs
                                <a href="#" class="btn btn-sm btn-success">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="row blog-slider">
                                    @foreach ($posts as $post)
                                        <div class="col-md-12">
                                            <div class="blog__single__latest">
                                                <a href="#">
                                                    <img src="{{ $post->image }}" alt="{{ $post->image }}">
                                                </a>
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
                        </div>
                    </section>
                 @endif
                 {{-- End Blog --}}

                 {{-- New Arraivals --}}
                 @if ($newArrival->count() > 0)
                    <section class="product spad">
                        <div class="card customCard">
                            <div class="card-header customCard__header">
                                new Arrival
                                <a href="#" class="btn btn-sm btn-success">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="row product-slider">
                                    @foreach ($newArrival as $product)
                                        <div class="col-12">
                                            <div class="card ProductCard">
                                                <a href="#">
                                                    <img src="{{ asset($product->image_one) }}" class="card-img-top productCard__img" alt="{{ asset($product->image_one) }}">
                                                </a>
                                                <div class="ProductCard__label">
                                                    @if ($product->discount_price == NULL)
                                                        <span>Hot</span>
                                                    @else
                                                        <span>
                                                            @php
                                                                $amount = $product->selling_price - $product->discount_price;
                                                                $discount = $amount/$product->selling_price*100;
                                                            @endphp
                                                            {{ intval($discount) }}%
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="card-body productCard__body">
                                                    <h5 class="card-title productCard__title">
                                                        <a href="#">{{ $product->product_title }}</a>
                                                    </h5>
                                                    <div class="productCard__price">
                                                        @if ($product->discount_price == NULL)
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                        @else
                                                            <span class="price">
                                                                ৳ {{ intval($product->selling_price) }}
                                                            </span>
                                                            <span class="price-before-discount">
                                                                ৳ {{ intval($product->discount_price) }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="productCard__btn">
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="#" class="btn btn-sm btn-success btn-cart" title="Add to cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-success btn-wish" title="Wishlist">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                 @endif
                 {{-- End New Arraivals --}}
            </div>
        </div>
    </div>
    {{-- End Container --}}

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
