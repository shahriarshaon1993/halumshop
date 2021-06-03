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

                @include('frontend.partials.sidebar')

            </div>
        </nav>
    </header>
    {{-- End Header --}}
