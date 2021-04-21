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
                <div class="col-lg-3 d-flex align-items-center pl-5">
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
                <div class="col-lg-3 product-navbar">
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
                        <a class="navbar-brand" href="#">

                        </a>
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
                            <div class="col-lg-3 d-flex justify-content-center align-items-center header__navbar__cart">
                                <div class="header__middle__cart d-flex justify-content-center">
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
                    </nav>
                </div>
            </div>
        </div>
        {{-- End Navbar --}}

    </header>
    {{-- Start Header Section --}}
