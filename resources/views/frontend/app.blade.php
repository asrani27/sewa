<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title>Sewa Gedung Banjarmasin</title>
    <!-- core CSS -->
    <link href="/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="/theme/css/font-awesome.min.css" rel="stylesheet">
    <link href="/theme/css/owl.carousel.css" rel="stylesheet">
    <link href="/theme/css/owl.transitions.css" rel="stylesheet">
    <link href="/theme/css/styles.css" rel="stylesheet">
    @stack('css')
    {{-- <link href="/theme/css/animate.min.css" rel="stylesheet"> --}}
    {{-- <link href="/theme/css/prettyPhoto.css" rel="stylesheet">
    <link href="/theme/css/magnific-popup.css" rel="stylesheet">
    <link href="/theme/css/gallery-1.css" rel="stylesheet"> --}}
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/theme/images/ico/favicon.ico">
</head>

<body id="home">

    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="logoSection"> <a class="navbar-brand" href="index.html">Sewa</a>
                        <span class="caption">Gedung BJM</span>
                    </div>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    @include('frontend.menu')
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->

    @yield('content')

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2020 Asrandev
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="/theme/js/jquery.js"></script>
    <script src="/theme/js/bootstrap.min.js"></script>
    @stack('js')
</body>

</html>