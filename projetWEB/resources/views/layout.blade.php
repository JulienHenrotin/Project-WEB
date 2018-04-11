<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

        <div class="content">


            @yield('contenu')

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>

                <a href="https://github.com/laravel/laravel">GitHub</a>
                <a href="google.com">Vive google</a>
            </div>
        </div>
    </div>
    </body>
    </html>


<!DOCTYPE HTML>
<html>
<head>
    <title>Free Snow Bootstrap Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery.min.js"></script>
    <!--<script src="js/jquery.easydropdown.js"></script>-->
    <!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/fwslider.js"></script>
    <!--end slider -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""/></a>
                    </div>
                    <div class="menu">
                        <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                        <ul class="nav" id="nav">
                            <li><a href="shop">Shop</a></li>
                            <li><a href="team">Team</a></li>
                            <li><a href="events">Events</a></li>
                            <li><a href="experiance">Experiance</a></li>
                            <li><a href="company">Company</a></li>
                            <li><a href="contact">Contact</a></li>
                            <div class="clear"></div>
                        </ul>
                        <script type="text/javascript" src="js/responsive-nav.js"></script>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                    <!-- start search-->
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <!----search-scripts---->
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <!----//search-scripts---->
                    <ul class="icon1 sub-icon1 profile_img">
                        <li><a class="active-icon c1" href="#"> </a>
                            <ul class="sub-icon1 list">
                                <div class="product_control_buttons">
                                    <a href="#"><img src="images/edit.png" alt=""/></a>
                                    <a href="#"><img src="images/close_edit.png" alt=""/></a>
                                </div>
                                <div class="clear"></div>
                                <li class="list_img"><img src="images/1.jpg" alt=""/></li>
                                <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
                                <div class="login_buttons">
                                    <div class="check_button"><a href="checkout.html">Check out</a></div>
                                    <div class="login_button"><a href="login.html">Login</a></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

