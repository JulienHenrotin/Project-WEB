<!DOCTYPE HTML>
<html>
<head>
    <title>Boite à idée</title>
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
     <div class="row">
       <div class="col-md-5">



         <form method="post">
           <div class="to">
            {{ csrf_field() }}
             <input type="text" name="textidee" placeholder= "Ton idée juste ici">
               <input type="submit" value="Valider mon idée">
            </div>
         </form>

         </div>





                <div class="col-md-5">

                <h1> Idees precedentes </h1>

                <ul>

                 @foreach($boite_a_idee as $BAI )

                 <li>

                  {{$BAI -> idee}}

                 </li>

                 @endforeach

                </ul>
             </div>
           </div>
        </div>
    </div>
</div>


<?php include ('footer.blade.html'); ?>


