<form action="http://localhost/projetWEB/Project-WEB/projetWEB/public/admin" method="post">
    {{ csrf_field() }}
    <input type="submit" name="Evenements" value="Evenements" >
    <input type="submit" name="ajouterGoodies" value="ajouterGoodies">
    <input type="submit" name="ajouterEvent" value="ajouterEvent">
    <input type="submit" name="BAI" value="BAI" >
</form>