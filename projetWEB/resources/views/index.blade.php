<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>BDE Exia Nancy - Website</title>
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


<div class="banner">
    <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <!-- Slide Boutique -->
            <div class="slide">
                <!-- Slide image -->
                <img src="images/shop.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">Une grande boutique<br></h1>
                        <!-- /Text title -->
                        <div class="button"><a href="shop">J'achète !</a></div>
                    </div>
                </div>
                <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <!-- Slide Events -->
            <div class="slide">
                <img src="images/event.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Des évents<br>fous</h1>
                        <div class="button"><a href="event">Montre moi</a></div>
                    </div>
                </div>
            </div>

            <!-- Slide Boite à idée -->
            <div class="slide">
                <img src="images/idea.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Donne nous<br>Tes idées</h1>
                        <div class="button"><a href="ideabox">J'y vais</a></div>
                    </div>
                </div>
            </div>

            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
</div>
<div class="main">
    <div class="content-top">
        <h2>Boutique</h2>
        <p>Il y en a pour tout le monde, pour tous les goûts</p>
        <div class="close_but"><i class="close1"> </i></div>
        <ul id="flexiselDemo3">
            <li><img src="images/goodie1.jpg" /></li>
            <li><img src="images/goodie2.jpg" /></li>
            <li><img src="images/goodie3.jpg" /></li>
            <li><img src="images/goodie4.jpg" /></li>
            <li><img src="images/goodie5.jpg" /></li>
        </ul>
        <h3>Goodies</h3>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<div class="content-bottom">
    <div class="container">
        <div class="row content_bottom-text">
            <div class="col-md-7">
                <h3>Le Bureau des étudiants<br>C'est quoi ?</h3>
                <p class="m_1">Le bureau des étudiants est l'association ayant pour but d'animer la vie de l'école par l'intermédiaire de diverses activités et évènnements. Le BDE propose aussi une quantité de services assez importante tel qu'une épicerie ouverte tous les jours de 8h30 à 17h30, de la vente de goodies et vêtements à l'effigie de l'école.</p>
                <p class="m_2">Le BDE recense de multiples Clubs, ceux-ci étant "spécialisés et diversifiés" dans différents domaines tel que la cuisine, les jeux vidéos, la réalité virtuelle, etc. Il contribuent fortement à la vie de l'école grâce aux animations que ceux-ci proposent. Cette participation des Clubs à la vie de l'école est récompensée par le BDE sous la forme de subvention afin de permettre aux Clubs actifs de se développer et continuer dans une optique d'évolution permanente.</p>
            </div>
        </div>
    </div>
</div>
<div class="features">
    <div class="container">
        <h3 class="m_3">Les évents</h3>
        <div class="close_but"><i class="close1"> </i></div>
        <div class="row">
            <div class="col-md-3 top_box">
                <div class="view view-ninth"><a href="single.html">
                        <img src="images/event1.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content">
                            <h2>Intégration 2k17</h2>
                            <p>Toute première après midi associative pour nous petits nouveaux.</p>
                        </div>
                    </a> </div
            </div>
            <h4 class="m_4"><a href="#">Des évènnements ludiques</a></h4>
            <p class="m_5">Intégration et découverte de Nancy</p>
        </div>
        <div class="col-md-3 top_box">
            <div class="view view-ninth"><a href="single.html">
                    <img src="images/event2.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                    <div class="content">
                        <h2>AGH 2K18</h2>
                        <p>Votre BDE se forme pour vous.</p>
                    </div>
                </a> </div>
            <h4 class="m_4"><a href="#">Des évènnements formateurs</a></h4>
            <p class="m_5">Participation à l'Assemblée Générale d'Hiver du BNEI à Clermont-Ferrand</p>
        </div>
        <div class="col-md-3 top_box">
            <div class="view view-ninth"><a href="single.html">
                    <img src="images/event3.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                    <div class="content">
                        <h2>Hover Style #9</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                    </div>
                </a> </div>
            <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
            <p class="m_5">claritatem insitam</p>
        </div>
        <div class="col-md-3 top_box1">
            <div class="view view-ninth"><a href="single.html">
                    <img src="images/event4.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                    <div class="content">
                        <h2>Hover Style #9</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                    </div>
                </a> </div>
            <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
            <p class="m_5">claritatem insitam</p>
        </div>
    </div>
</div>
</div>

<?php include ('footer.blade.html'); ?>

</body>
</html>