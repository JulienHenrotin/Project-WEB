<form method="post">
    {{ csrf_field() }}
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="text" name="nom" placeholder="Nom">
    <input type="mail" name="mail" placeholder="Mail">
    <input type="password" name="password" placeholder="Mot de Passe">
    <input type="password" name="password_confirmation" placeholder="Confirmation Mot de Passe">
    <input type="submit" value="Inscription">

    <?php
        use Illuminate\Support\Facades\Session;
        session::pull('goodies');
        echo session::get('goodies.prix');
    ?>
</form>