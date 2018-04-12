<form method="post">
    {{ csrf_field() }}
    <input type="text" name="nom" placeholder="Nom goodies">
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