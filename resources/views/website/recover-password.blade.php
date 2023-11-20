<!-- EXTEND WEBSITE LAYOUT -->
@extends('layouts.website')

<!-- WEBSITE PADE TITLE -->
@section('title', 'Shop Page | E-commerce Website with Laravel')

<!-- WEBSITE BODY PART -->
@section('content')

<!-- ================================
       START RECOVER AREA
================================= -->
<section class="recover-area py-5">
    <div class="container">
        <div class="col-lg-7 mx-auto">
            <form action="#" class="card">
                <div class="card-body">
                    <div class="form-group">
                        <h4 class="mb-1 sec-title">Reset Password!</h4>
                        <p class="sec-desc">Enter the email of your account to reset password. Then you will receive a link to email to reset the password.If you have any issue about reset password
                            <a href="contact.html" class="btn-link">contact us</a>
                        </p>
                    </div><!-- end form-group -->
                    <div class="form-group">
                        <label class="label-text">Email address</label>
                        <input type="email" name="email" class="form-control form--control" placeholder="Email address">
                    </div><!-- end form-group -->
                    <button class="btn btn-primary" type="submit">Reset Password</button>
                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-3 fs-15">
                        <a href="login.html" class="btn-link">Login</a>
                        <p>Don't have an account? <a href="sign-up.html" class="btn-link"> Register</a></p>
                    </div>
                </div><!-- end card-body -->
            </form>
        </div><!-- end col-lg-7 -->
    </div><!-- end container -->
</section><!-- end recover-area -->
<!-- ================================
       START RECOVER AREA
================================= -->

<!-- END WEBSITE BODY PART -->
@endsection('content')