<!DOCTYPE HTML>
<html>
<head>
    <title>Ajout goodies</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

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
<?php include ('menu.blade.html'); ?>


<body>
    <form method="post" name="ajout" onsubmit="return verifForm(this)">
    {{ csrf_field() }}

        <input type="text" name="nom" placeholder="Nom goodies" id="nom" onblur="verifnom(this)">
        <span id="aideNom"></span> </br>
        <input type="text" name="prix" placeholder="prix" id="prix" onblur="verifprix(this)">
        <span id="aideprix"> </span> </br>
        <input type="text" name="path_image" placeholder="Chemin de l'image" id="path_image">
        <textarea name="description" id="description" rows="10" cols="50" onblur="verifdescrip(this)">
                Décrivez le goodies ICI
        </textarea>
        <span id="aidedescrip"></span> </br>
        <label for="categorie"> Dans quel catégorie le goodies est ? </label></br>
        <select name="categorie">
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
        </select>
        <input type="submit" value="Ajouter" id="valider" >
    </form>
</body>
<!--<script src="js/verif.js"></script>-->
<script  src="js/ajoutGoodies.js"></script>
</html>

<?php include ('footer.blade.html'); ?>