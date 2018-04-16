console.log("verif goodies lancé");
//=========== ELEMENTS ====================
/*var nom = document.getElementById("nom");
var prix = document.getElementById("prix");
var description = document.getElementById("description");
var bouton = document.getElementById("valider");*/
//===================================================
function surligne(champ, erreur ) {
    if (erreur)
        champ.style.backgroundColor = "#fba";
    else
        champ.style.backgroundColor = "";
}

function verifprix(champ)
{
        var entree = parseInt(champ.value);
        if(isNaN(entree))
        {
            surligne(champ, true);
            return false;
        }
        else {
            surligne(champ, false);
            return true;
        }
}

function verifnom(champ)
{
    if(champ.value.length > 15)
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

function verifdescrip(champ)
{
    if(champ.value.length > 300)
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

function verifForm(f)
{
    var nomok = verifnom(f.nom);
    var prixok = verifprix(f.prix);
    var descripok = verifdescrip(f.description);
    if (nomok && prixok && descripok)
    {
        console.log("verif form ok");
        return true;
    }
    else
    {
        console.log("verif form pas tres ok");
        return false;
    }
}