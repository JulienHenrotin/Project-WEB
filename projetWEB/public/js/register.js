console.log("verif de l'inscription est lancée");
function surligne(champ, erreur ) {
    if (erreur)
    {
        champ.style.backgroundColor = "#fba";
    console.log("surlignage");
}
    else
{
        champ.style.backgroundColor = "";
}}
function verifprenom(champ){
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

function verifnom(champ){
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

function verifmail(champ)
{
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(champ.value.length > 80 && !regex.test(champ.value))
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
   var regex = /^(?=.[a-z])(?=.[A-Z])(?=.*[0-9])/;
   var taille = 5;
   if ( !regex.test(champ.value) && champ.value.length < 20 )
   {
       surligne(champ, true);
       console.log("FAUX ");
       return false;
   }
   else
   {
       surligne(champ, false);
       console.log("sa marche");
       return true;
   }
}

function MDPegal(champ) {
    var MDP1 = document.getElementById("password");
    var MDP2 = champ.value;
    if (MDP1!=MDP2)
    {
        console.log("les MDP sont différents");
        return false;
    }
    else
    {
        console.log("les MDP sont pareils");
        return true;
    }
}

function verifForm(f)
{
    var prenomOk = verifprenom(f.prenom);
    var nomOK = verifnom(f.nom);
    var mailOK = verifmail(f.mail);
    var MDPok1 = verifMDP(f.password);
    var MDPok2 = MDPegal(f.verif)
    if(prenomOk && nomOK && mailOK && MDPok1 && MDPok2)
    {
        console.log("c'est okay l'inscription");
        return true;
    }
    else
    {
        console.log("c'est chaud frere l'inscription ca marche");
        return false;
    }
}