
<!DOCTYPE HTML>
<html>
<head>
    <title>Evènements</title>
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
            <div class="row ex_box">
                <h3 class="m_2">Nos évènements</h3>
                <?php
                //dd(dump($evenements));
                ?>
                @foreach($evenements as $event)

                <div class="col-md-4 team1">
                    <div class="img_section magnifier2">
                        <a class="fancybox" href="" data-fancybox-group="gallery" title="titre"><img src="images/{{$event->photoBDE}}.jpg" class="img-responsive" alt=""><span> </span>
                            <div class="img_section_txt">
                                {{$event->descrip_event}}
                            </div>

                        </a></div>
                    <form method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="event" value={{$event->id_event}}>
                        <button  class="btn" href="{{route('event')}}" type="submit">S'inscrire</button>
                    </form>
                </div>
                 @endforeach
            </div>


        </div>
    </div>
</div>


<?php include ('footer.blade.html'); ?>

</body>
</html>