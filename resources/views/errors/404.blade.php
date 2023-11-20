<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minzel - Business HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('public/website')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/website')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/website')}}/css/style.css">
</head>
<body>

<!-- ================================
    START ERROR AREA
================================= -->
<section class="error-area text-center">
    <div class="container">
        <div class="row pt-50 pb-50 justify-content-center">
            <div class="error-content">
                <img src="{{asset('public/website')}}/media/404.png" alt="error image" class="img-fluid" style="max-width:500px;">
                <h3 class="sec-title mb-3">Oops! Page not found</h3>
                <p class="sec-desc mb-4">The page you are looking for might have been removed, had its name changed,
                    <br> or is temporarily unavailable.
                </p>
                <a href="#" class="btn btn-primary">
                    <i class="fal fa-angle-left mr-1"></i> Back to Home
                </a>
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end error-area -->
<!-- ================================
    END ERROR AREA
================================= -->


<!-- Template JS Files -->
<script src="{{asset('public/website')}}/js/jquery-3.4.1.min.js"></script>
<script src="{{asset('public/website')}}/js/bootstrap.bundle.min.js"></script>
</body>
</html>