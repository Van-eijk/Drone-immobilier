// A ce niveau, nous allons gérer le dynamisme des inputs de type radio de la barre de recherche principale

let radioLouer = document.getElementById("radioLouer"); // ici on recupere l'identifiant de l'input A louer
let radioVendre = document.getElementById("radioVendre"); // Ici on recupère l'identifiant de l'input A vendre

var locationIcon = document.getElementById("locationIcon"); // Ici on recupere l'identifiant de l'icone de location
var locationTitle = document.getElementById("locationTitle"); // Ici on recupere l'identifiant du titre de location

var venteIcon = document.getElementById("venteIcon"); // Ici on recupere l'identifiant de l'icone de vente
var venteTitle = document.getElementById("venteTitle"); // // Ici on recupere l'identifiant du titre de vente


// Nous allons ainsi créer une fonction qui va verifier lequel des 2 boutons a été selectionné


function checkRadioInputSearch() {

    if (radioLouer.checked) {
        locationIcon.style.backgroundColor = "var(--headerMainColor)";
        locationTitle.style.color = "var(--headerMainColor)";
        //alert("location");
    } else {
        locationIcon.style.backgroundColor = "var(--headerColorText)";
        locationTitle.style.color = "var(--headerColorText)";
    }

    if (radioVendre.checked) {
        venteIcon.style.backgroundColor = "var(--headerMainColor)";
        venteTitle.style.color = "var(--headerMainColor)";
        //alert("vente");

    }
    else {
        venteIcon.style.backgroundColor = "var(--headerColorText)";
        venteTitle.style.color = "var(--headerColorText)";
    }
}

// Nous allons donc exécuter cette fonction chaque 0.1 milliseconde

setInterval(checkRadioInputSearch, 0.1); // Execution de ladite fonction











// fonctions pour changer l'icon de la location au passage de la souris



/* function locationOver() {
    locationIcon.style.backgroundColor = "var(--headerMainColor)";
    locationTitle.style.color = "var(--headerMainColor)";

}

function locationLeave() {
    locationIcon.style.backgroundColor = "var(--headerColorText)";
    locationTitle.style.color = "var(--headerColorText)";

}



// fonctions pour changer l'icon de la vente au passage de la souris







function venteOver() {
    venteIcon.style.backgroundColor = "var(--headerMainColor)";
    venteTitle.style.color = "var(--headerMainColor)";

}

function venteLeave() {
    venteIcon.style.backgroundColor = "var(--headerColorText)";
    venteTitle.style.color = "var(--headerColorText)";

}

*/