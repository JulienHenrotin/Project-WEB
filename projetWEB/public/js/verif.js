console.log("le fichier fonction de verif est bien chargé");
//=============FONCTION CHANGE COULEUR CHAMP OU IL Y A ERREUR
function surligne(champ, erreur ) {
    if (erreur)
        champ.style.backgroundColor = "#fba";
    else
        champ.style.backgroundColor = "";
}
//=================================================
//======= FONCTION QUI VERIFI LA LONGEUR=====
function veriflongeur(champ , max , error)
{
    if(champ.value.length > max)
    {
        surligne(champ, true);
        return error =false;
    }
    else
    {
        surligne(champ, false);
        return error =true;
    }
}
//========================================
//=============FONCTION POUR VERIFIER CHIFFRE=====
function verifNombre(champ , error)
{
    var entree = parseInt(champ.value);
    if(isNaN(entree))
    {
        surligne(champ, true , true);
        return error =false;
    }
    else
    {
        surligne(champ, false);
        return error=true;
    }
}
//====================================
// ===========FONCTION CHECK MAIL===========
function verifMail(champ)
{
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(!regex.test(champ.value))
    {
        console.log("verif mail fausse");
        surligne(champ, true);
        return false;
    }
    else
    {
        console.log("verif mail vrai");
        surligne(champ, false);
        return true;
    }
}

//====================================
//=============FONCTION BLOQUE ENVOI FORM======
/*function valider(error) {
    if (error){
        alert("erreur");
    return true;
    } else
    {
        alert("formulaire envoyé");
        return false;
    }
}*/