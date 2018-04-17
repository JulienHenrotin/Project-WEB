<form method="post" name="ajoutEvent" id="login-form">
    {{ csrf_field() }}
    <fieldset class="input">
        <p>
            <label for="modlgn_username">Description de l'évènement</label>
            <textarea id="description" placeholder="description de l'évènement" name="descrip_event">
            </textarea>
            <span id="aideMail"> </span>
        </p>
        <p>
            <label> Image</label>
            <input type="text" name="image" >
            <!--ajouter fichier-->
        </p>
        <div>
            <p>
                <label>Date de l'évènement </label>
                <input type="text" name="date">
            </p>
            <p>
                <label>Prix de l'évènement </label>
                <input type="text" name="prix_event"> €
            </p>
            <input type="submit" name="Submit" class="button" value="Ajouter l'évènement">
        </div>
    </fieldset>
</form>