<?php
$erreur = false;
$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
if(!in_array($action,array('ajout', 'suppression', 'refresh')))
$erreur=true;

//récuperation des variables en POST ou GET
$l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
$p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
$q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;
//Suppression des espaces verticaux
$l = preg_replace('#\v#', '',$l);
//On verifie que $p soit un float
$p = floatval($p);

//On traite $q qui peut etre un entier simple ou un tableau d'entier
if (is_array($q)){
$QteArticle = array();
$i=0;
foreach ($q as $contenu){
$QteArticle[$i++] = intval($contenu);
}
}
else
$q = intval($q);
}
if (!$erreur){
switch($action){
Case "ajout":
ajouterArticle($l,$q,$p);
break;
Case "suppression":
supprimerArticle($l);
break;
Case "refresh" :
for ($i = 0 ; $i < count($QteArticle) ; $i++)
{
modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
}
break;
Default:
break;
}
}

?>






<!DOCTYPE HTML>
<html>
<head>
    <title>Boutique</title>
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
<body>


<?php include ('menu.blade.html'); ?>



<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="row shop_box-top">

                @foreach($goodies as $good)
                    <!--<div class="row">-->
                    <div class="col-md-3 shop_box"><a href="">
                            <img src="images/{{ $good ->path_image }}.jpg" class="img-responsive" alt=""/>

                            <div class="shop_desc">
                                <h3><a href="#">{{ $good ->nom }}</a></h3>
                                <p>{{ $good ->description }} </p>
                                <span class="actual">{{ $good ->prix }}€</span><br>
                                <ul class="buttons">
                                    <form method="post">
                                        {{ csrf_field() }}
                                        <li class="cart" href="cart.php?action=ajout&amp;l={{ $good ->nom }}&amp;q=1&amp;p={{ $good ->prix }}" onclick="window.open(this.href, '',
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;" type="submit" name="achat" value="{{$good->id_items}}">Ajouter au panier</li>
                                        <li class="shop_btn"><a href="images/{{ $good ->path_image }}.jpg">Zoom</a></li>
                                        <div class="clear"> </div>
                                    </form>


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


<!--////////////////////////////////////////////////-->


<body>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Products info </h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" class="form-controller" id="search" name="search"></input>
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    })

</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
</body>
</html>