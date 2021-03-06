<!DOCTYPE HTML>
<html>
<head>
    <title>Connexion</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
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
    <script src="js/login.js"></script>
</head>


<?php include ('menu.blade.html'); ?>

<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="col-md-6">
                <div class="login-page">
                    <h4 class="title">Nouvel utilisateur</h4>
                    <p>La création de votre compte va vous permettre d'accéder aux différentes fonctionnalités offertes par notre site internet. Tout en sachant que la connection est obligatoire afin d'utiliser les divers services. En cliquant sur Créer un compte, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique d’utilisation des données, y compris notre Utilisation des cookies. </p>
                    <div class="button1">
                        <a href="register"><input type="submit" name="Submit" value="Créer un compte"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-title">
                    <h4 class="title">Clients enregistrés</h4>
                    <div id="loginbox" class="loginbox">
                        <form  method="post" name="login" id="login-form" onsubmit="return verifForm(this)">
                            {{ csrf_field() }}
                            <fieldset class="input">
                                <p id="login-form-username">
                                    <label for="modlgn_username">Email</label>
                                    <input id="mail" type="text" name="mail" class="inputbox" size="18" autocomplete="off" onblur="verifMail(this)">
                                    <span id="aideMail"> </span>
                                </p>
                                <p id="login-form-password">
                                    <label for="modlgn_passwd">Mot de passe</label>
                                    <input id="password" type="password" name="password" class="inputbox" size="18" autocomplete="off" onblur="verifMDP(this)">
                                </p>
                                <div class="remember">
                                    <p id="login-form-remember">
                                        <label for="modlgn_remember"><a href="#">Mot de passe oublié ? </a></label>
                                    </p>
                                    <input type="submit" name="Submit" class="button" value="Connexion"><div class="clear"></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

<?php include ('footer.blade.html'); ?>