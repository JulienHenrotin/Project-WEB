<form method="post">
    {{ csrf_field() }}
    <input type="mail" name="mail" placeholder="Mail">
    <input type="password" name="password" placeholder="Mot de Passe">
    <input type="submit" value="Connexion">
    <?php var_dump('XXX'); ?>
</form>