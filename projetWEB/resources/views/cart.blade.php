<?php

function creationPanier(){
if (!isset($_SESSION['panier'])){
$_SESSION['panier']=array();
$_SESSION['panier']['libelleProduit'] = array();
$_SESSION['panier']['qteProduit'] = array();
$_SESSION['panier']['prixProduit'] = array();
$_SESSION['panier']['verrou'] = false;
}
return true;
}

function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

//Si le panier existe
if (creationPanier() && !isVerrouille())
{
//Si le produit existe déjà on ajoute seulement la quantité
$positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

if ($positionProduit !== false)
{
$_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
}
else
{
//Sinon on ajoute le produit
array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
}
}
else
echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function supprimerArticle($libelleProduit){
//Si le panier existe
if (creationPanier() && !isVerrouille())
{
//Nous allons passer par un panier temporaire
$tmp=array();
$tmp['libelleProduit'] = array();
$tmp['qteProduit'] = array();
$tmp['prixProduit'] = array();
$tmp['verrou'] = $_SESSION['panier']['verrou'];

for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
{
if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
{
array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
}

}
//On remplace le panier en session par notre panier temporaire à jour
$_SESSION['panier'] =  $tmp;
//On efface notre panier temporaire
unset($tmp);
}
else
echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function modifierQTeArticle($libelleProduit,$qteProduit){
//Si le panier éxiste
if (creationPanier() && !isVerrouille())
{
//Si la quantité est positive on modifie sinon on supprime l'article
if ($qteProduit > 0)
{
//Recharche du produit dans le panier
$positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

if ($positionProduit !== false)
{
$_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
}
}
else
supprimerArticle($libelleProduit);
}
else
echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function MontantGlobal(){
$total=0;
for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
{
$total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
}
return $total;
}
?>



<!DOCTYPE HTML>
<html>
<head>
    <title>Panier</title>
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
</head>


<?php include ('menu.blade.html');


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




<? phpinclude ('footer.blade.html'); ?>

<body>

<form method="post" action="cart.blade.php">
    <table style="width: 400px">
        <tr>
            <td colspan="4">Votre panier<br/></td>
        </tr>
        <tr>
            <td>Libellé</td>
            <td>Quantité</td>
            <td>Prix Unitaire</td>
            <td>Action</td>
        </tr>


        <?php
        if (creationPanier())
        {
            $nbArticles=count($_SESSION['panier']['libelleProduit']);
            if ($nbArticles <= 0)
                echo "<tr><td>Votre panier est vide </ td></tr>";
            else
            {
                for ($i=0 ;$i < $nbArticles ; $i++)
                {
                    echo "<tr>";
                    echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
                    echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                    echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
                    echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">XX</a></td>";
                    echo "</tr>";
                }

                echo "<tr><td colspan=\"2\"> </td>";
                echo "<td colspan=\"2\">";
                echo "Total : ".MontantGlobal();
                echo "</td></tr>";

                echo "<tr><td colspan=\"4\">";
                echo "<input type=\"submit\" value=\"Rafraichir\"/>";
                echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

                echo "</td></tr>";
            }
        }
        ?>
    </table>
</form>
</body>

</html>