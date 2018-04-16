<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Boutique</title>
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


<?php include ('menu.blade.html'); ?>



<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="row shop_box-top">

                @foreach($goodies as $good)
                    <!--<div class="row">-->
                    <div class="col-md-3 shop_box"><a href="single.html">
                            <img src="images/pic12.jpg" class="img-responsive" alt=""/>

                            <div class="shop_desc">
                                <h3><a href="#">{{ $good ->nom }}</a></h3>
                                <p>{{ $good ->description }} </p>
                                <span class="reducedfrom">$66.00</span>
                                <span class="actual">{{ $good ->prix }}€</span><br>
                                <ul class="buttons">
                                    <li class="cart"><a href="#">Add To Cart</a></li>
                                    <li class="shop_btn"><a href="#">Read More</a></li>
                                    <div class="clear"> </div>

                                </ul>
                            </div>
                            <br />
                        </a></div>
                    <!--</div>-->
                @endforeach



        </div>
    </div>
</div>

<?php include ('footer.blade.html'); ?>

</body>
</html>