console.log("verif goodies lancé");
//=========== ELEMENTS ====================
var nom = document.getElementById("nom");
var prix = document.getElementById("prix");
var description = document.getElementById("description");
var bouton = document.getElementById("valider");
var error = false;
//===================================================

nom.addEventListener("focus", function () {
    document.getElementById("aideNom").textContent = "entrer le nom du Goodies";
})

nom.addEventListener("blur", function (e) {
    document.getElementById("aideNom").textContent = "";
})


description.addEventListener("focus", function () {
    document.getElementById("aidedescrip").textContent = "Décrivez le produit avec 300 caractères maximun";
})

description.addEventListener("blur", function (e) {
    document.getElementById("aidedescrip").textContent = "";
    veriflongeur(description , 300 , error);
})

prix.addEventListener("focus", function () {
    document.getElementById("aideprix").textContent = "entrer un prix en euro sans le signe €";
})

prix.addEventListener("blur", function (e) {
    document.getElementById("aideprix").textContent = "";
    veriflongeur(prix, 5 , error);
    verifNombre(prix, error);
})

valider(error);