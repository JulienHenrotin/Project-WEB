<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title> Ajout goodiees </title>
</head>

<body>
    <form method="post" name="ajout">
    {{ csrf_field() }}
    <input type="text" name="nom" placeholder="Nom goodies" id="nom">
        <span id="aideNom"></span> </br>
    <input type="text" name="prix" placeholder="prix" id="prix">
        <span id="aideprix"> </span> </br>
        <textarea name="description" id="description" rows="10" cols="50">
                Décrivez le goodies ICI
        </textarea>
        <span id="aidedescrip"></span> </br>
    <label for="categorie"> Dans quel catégorie le goodies est ? </label></br>
    <select name="categorie">
        <option value="1"> 1 </option>
        <option value="2"> 2 </option>
        <option value="3"> 3 </option>
    </select>
    <input type="submit" value="Ajouter" id="valider" onSubmit="return valider(error)">
</form>

</body>
<script src="js/verif.js"></script>
<script  src="js/ajoutGoodies.js"></script>
</html>