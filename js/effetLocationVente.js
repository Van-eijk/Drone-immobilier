
// fonctions pour changer l'icon de la location au passage de la souris
var locationIcon = document.getElementById("locationIcon");
var locationTitle = document.getElementById("locationTitle");



function locationOver() {
    locationIcon.style.backgroundColor = "var(--headerMainColor)";
    locationTitle.style.color = "var(--headerMainColor)";

}

function locationLeave() {
    locationIcon.style.backgroundColor = "var(--headerColorText)";
    locationTitle.style.color = "var(--headerColorText)";

}



// fonctions pour changer l'icon de la vente au passage de la souris



var venteIcon = document.getElementById("venteIcon");
var venteTitle = document.getElementById("venteTitle");



function venteOver() {
    venteIcon.style.backgroundColor = "var(--headerMainColor)";
    venteTitle.style.color = "var(--headerMainColor)";

}

function venteLeave() {
    venteIcon.style.backgroundColor = "var(--headerColorText)";
    venteTitle.style.color = "var(--headerColorText)";

}