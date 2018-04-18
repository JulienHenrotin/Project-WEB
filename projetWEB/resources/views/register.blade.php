<!DOCTYPE HTML>
<html>
<head>
    <title>Inscription</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
   <!-- <script src="js/register.js"></script>-->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery.min.js"></script>
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


<?php include ('menu.blade.html'); ?>

<div class="main">
    <div class="shop_top">
        <div class="container">
            <form method="post" >
                {{ csrf_field() }}
                <div class="register-top-grid">
                    <h3>INFORMATIONS PERSONNELLES</h3>
                    <div>
                        <span>Prénom<label>*</label></span>
                        <input type="text" name="prenom" placeholder="Prénom" id="prenom" >
                        <span id="aideprenom"></span> </br>
                    </div>
                    <div>
                        <span>Nom<label>*</label></span>
                        <input type="text" name="nom" placeholder="Nom" id="nom" >
                        <span id="aidenom"></span> </br>
                    </div>
                    <div>
                        <span>Adresse email<label>*</label></span>
                        <input type="text" name="mail" placeholder="Mail" >
                        <span id="aidmail"></span> </br>
                    </div>
                    <div class="clear"> </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"> </div>
                <div class="register-bottom-grid">
                    <h3>INFORMATION DE CONNEXION</h3>
                    <div>
                        <span>Mot de passe<label>*</label></span>
                        <input type="password" name="password" placeholder="Mot de Passe" id="password" >
                        <span id="aidepassword"></span> </br>
                    </div>
                    <div>
                        <span>Confirmation du mot de passe<label>*</label></span>
                        <input type="password" name="verif" placeholder="Confirmation Mot de Passe" id="verif" >
                        <span id="aideverif"></span> </br>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"> </div>
                <input type="submit" value="Inscription">
            </form>
        </div>
    </div>
</div>


<?php include ('footer.blade.html'); ?>
