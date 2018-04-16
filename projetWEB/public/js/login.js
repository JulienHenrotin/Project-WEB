console.log("verif login lancée");
function surligne(champ, erreur ) {
    if (erreur)
        champ.style.backgroundColor = "#fba";
    else
        champ.style.backgroundColor = "";
}
function verifMail(champ)
{
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(!regex.test(champ.value))
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifMDP(champ)
{
    if(champ.value.length >20)
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifForm(f) {
    var mailok = verifMail(f.mail);
    var MDPok = verifMDP(f.password);
    if (mailok && MDPok)
    {
        console.log("il y a pas de probleme ");
        return true;
    }
    else
    {
        alert("il y a un probleme dans le remplissage du formulaire");
        console.log("probleme");
        return false;
    }
}