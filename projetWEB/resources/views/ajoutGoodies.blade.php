<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title> Ajout goodiees </title>
    <script type="text/javascript" src="C:\wamp64\www\projetWEB\Project-WEB\projetWEB\public\js\ajoutGoodies.js"></script>

</head>

<body>
    <form method="post">
    {{ csrf_field() }}
    <input type="text" name="nom" placeholder="Nom goodies" id="nom">
    <input type="text" name="prix" placeholder="prix">
    <input type="text" name="description" placeholder="description">
    <label for="categorie"> Dans quel catégorie le goodies est ? </label></br>
    <select name="categorie">
        <option value="1"> 1 </option>
        <option value="2"> 2 </option>
        <option value="3"> 3 </option>
    </select>
    <input type="submit" value="Ajouter">
</form>

</body>
</html>