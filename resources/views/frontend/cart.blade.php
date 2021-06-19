@extends('frontend.layouts.master')

@section('content')

    @include('backend.partials._message')

    <section class="product-cart spad">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-7 col-md-12 col-12">
                    @foreach ($shopcarts as $item)
                    <div class="card customCard mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-4">
                                    <img src="{{ asset($item->options->image) }}" alt="$item->options->image" class="img-fluid w-100" id="mainImg">
                                </div>
                                <div class="col-lg-7 col-md-7 col-7">
                                    <div class="item-details pt-2">
                                        <div class="item-title">
                                            <h6 class="py-1">{{ $item->name }}</h6>
                                            @if ($item->options->color)
                                                <span>Color: {{ $item->options->color }}</span>
                                            @endif

                                            @if ($item->options->size)
                                                <span>Size: {{ $item->options->size }}</span>
                                            @endif
                                            <p>Price: ৳ {{ $item->price }}</p>
                                        </div>
                                        <div class="item-action">
                                            <form action="{{ route('update.cartitem') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="productId" value="{{ $item->rowId }}">
                                                <input type="number" name="qty" value="{{ $item->qty }}" style="width: 50px;" min="1" max="10">
                                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i></button>
                                            </form>

                                            {{ Form::open(['route' => ['remove.cart', $item->rowId], 'method' => 'DELETE', 'class' => 'mt-4']) }}
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    Remove <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <h1>Hello</h1>
                </div>
            </div> --}}
            <div class="card customCard">
                <div class="card-header customCard__header">
                    Shopping Cart Product
                </div>
                <div class="card-body">
                    @if ($shopcarts->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Item</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shopcarts as $item)
                                    <tr>
                                        <td>
                                            <div class="item-img">
                                                <img src="{{ asset($item->options->image) }}" alt="{{ $item->options->image }}">
                                            </div>
                                            <div class="item-detail">
                                                <h6>{{ $item->name }}</h6>
                                                @if ($item->options->color)
                                                    <span>Color: {{ $item->options->color }}</span>
                                                @endif
                                                @if ($item->options->size)
                                                    <span>Size: {{ $item->options->size }}</span>
                                                @endif
                                                <p>৳{{ $item->price }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('update.cartitem') }}" method="POST">
                                                @csrf
                                                <div class="input-group mb-3 btn-qty">
                                                    <input type="hidden" name="productId" value="{{ $item->rowId }}">
                                                    <input type="number" class="form-control" min="1" max="10" value="{{ $item->qty }}" name="qty">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-success input-group-text" id="basic-addon2"><i class="fa fa-check-square"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            {{ Form::open(['route' => ['remove.cart', $item->rowId], 'method' => 'DELETE']) }}
                                                <button type="submit" class="btn btn-sm btn-danger mt-1 btn-action">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            {{ Form::close() }}
                                        </td>
                                        <td>৳ {{ $item->price*$item->qty }}</td>
                                    </tr>
                                @endforeach
                                    <tr class="total-bg">
                                        <td></td>
                                        <td></td>
                                        <td>Total</td>
                                        <td>
                                            ৳{{ Cart::subtotal() }}
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <form action="">
                            <button type="submit" class="btn btn-success pull-right btn-checkout">Checkout</button>
                        </form>
                    @else
                        <div class="alert alert-primary" role="alert">
                            Product not here in cart
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
