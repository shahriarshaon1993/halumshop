@extends('frontend.layouts.master')

@section('content')

    @include('backend.partials._message')

    <section class="product-details spad">
        <div class="container">
            <div class="card customCard">
                <div class="card-header customCard__header">
                    Product
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-12">
                            <img src="{{ asset($product->image_one) }}" alt="{{ $product->image_one }}" class="img-fluid w-100 pb-1" id="mainImg">

                            <div class="small-img-group">
                                <div class="small-img-col">
                                    <img src="{{ asset($product->image_one) }}" alt="{{ $product->image_one }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset($product->image_two) }}" alt="{{ $product->image_one }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset($product->image_three) }}" alt="{{ $product->image_one }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-12">
                            <h6>
                                <a href="#">{{ $product->category->name }}</a> |
                                <a href="#">{{ $product->subcategory->name }}</a>
                            </h6>
                            <h3 class="py-4">{{ $product->product_title }}</h3>
                            <h2>
                                @if ($product->discount_price == null)
                                    ৳ {{ intval($product->selling_price) }}
                                @else
                                    ৳ {{ intval($product->discount_price) }}
                                    <span class="price-before-discount">
                                        ৳ {{ intval($product->selling_price) }}
                                    </span>
                                @endif
                            </h2>
                            <select class="my-3">
                                <option value="">Select Size</option>
                                @foreach ($product_size as $size)
                                    <option value="{{ $size }}">{{ $size }}</option>
                                @endforeach
                            </select>
                            <select class="my-3">
                                <option value="">Select Color</option>
                                @foreach ($product_color as $color)
                                    <option value="{{ $color }}">{{ $color }}</option>
                                @endforeach
                            </select>
                            <input type="number" value="1" min="1" max="10">
                            <button class="btn btn-success buy-btn">Add To Cart</button>
                            <h4 class="my-3">Product Details <i class="fa fa-indent" aria-hidden="true"></i></h4>
                            <p>{!! $product->product_details !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="viewed spad">
        <div class="container">
            <div class="card customCard">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                                aria-controls="nav-home" aria-selected="true">Reviews</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                aria-controls="nav-profile" aria-selected="false">Video</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show p-3 active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="product-comment">
                                <div class="panel">
                                    <div class="panel-body">
                                        <textarea class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
                                        <div class="mar-top clearfix">
                                            <button class="btn btn-sm btn-primary pull-right mt-3" type="submit"><i class="fa fa-pencil fa-fw"></i> Submit Comment</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="panel">
                                    <div class="panel-body px-3">
                                        <div class="mar-btm">
                                            <h5><a href="#">Lisa D.</a></h5>
                                            <p class="text-muted text-sm">11 min ago</p>
                                        </div>
                                        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane p-3 fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            @if ($product->video_link)
                                <div class="product-video">
                                    <iframe width="100%" height="315" src="{{ $product->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            @else

                                <h2>No Video Here</h2>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
