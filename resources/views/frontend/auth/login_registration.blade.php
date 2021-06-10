@extends('frontend.layouts.master')

@section('content')

    @include('backend.partials._message')

    <section class="login">
        <div class="login__container">
            <div class="login__container__bg">
                <div class="box signin">
                    <h2>Already Have an Account</h2>
                    <button class="signinBtn">Sign in</button>
                </div>

                <div class="box signup">
                    <h2>Don't Have an Account</h2>
                    <button class="signupBtn">Sign up</button>
                </div>
            </div>

            <div class="login__container__formBx">
                <div class="form signinForm">
                    <form>
                        <h3>Sign In</h3>
                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <input type="submit" value="Login">
                        <a href="#" class="forget">Forgot Password</a>
                    </form>
                </div>

                <div class="form signupForm">
                    <form>
                        <h3>Sign Up</h3>
                        <input type="text" placeholder="Username">
                        <input type="email" placeholder="Email Address">
                        <input type="password" placeholder="Password">
                        <input type="password" placeholder="Confirm Password">
                        <input type="submit" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
