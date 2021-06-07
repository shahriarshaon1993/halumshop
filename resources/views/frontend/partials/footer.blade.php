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
                    <form method="POST" action="{{ route('newsletter.store') }}" class="footer__newslatter__item__form">
                        @csrf
                        {{ Form::email('email', null, ['placeholder' => 'Enter Your Mail']) }}
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
