let imagesSlide = document.getElementsByClassName('main-img'); // On récupère l'ensemble des images principales

let sidePicture = document.getElementsByClassName('side-picture'); // Ici on récupère l'ensemble des images secondaires
/* On doit d'abord afficher la premiere image */

imagesSlide[0].classList.add('active');

/* On met aussi en évidence l'image qui correspond dans le coté droit */

//sidePicture[0].style.border = "4px solid var(--headerColorText)";



let etapeSlide = 0;

let nombreImageSlide = imagesSlide.length;

// La fonction suivante permet de desactiver toutes les images principales

function desactiverImages() {
    for (let i = 0; i < imagesSlide.length; i++) {
        imagesSlide[i].classList.remove('active');
    }
}

// la fonction suivante permet de passer de l'image actuelle à l'image suivante

function nextPicture() {
    etapeSlide++;
    if (etapeSlide >= nombreImageSlide) {
        // Si l'etape est superieur ou egale au nombre total d'images, on ramene l'etape à zero pour éviter d'afficher une image qui n'existe pas
        etapeSlide = 0;
    }

    desactiverImages(); // On desactive toutes les images
    imagesSlide[etapeSlide].classList.add('active'); // On active uniquement l'image correspondant à l'etape actuelle
}

// La fonction suivante permet de passer de l'étape actuelle à l'étape précédente


function prevPicture() {
    etapeSlide--;

    if (etapeSlide < 0) {
        etapeSlide = nombreImageSlide - 1;
    }
    desactiverImages();
    imagesSlide[etapeSlide].classList.add('active');
}

