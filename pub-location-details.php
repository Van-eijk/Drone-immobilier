<?php 
    // On définit le lien du logo pour cette page

    $lienLogo ="Images/logo2.png" ;

    /*echo $_POST["locationVente"];*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pub location details</title>
     <!-- Feuille de style du dossier header-->
     <link rel="stylesheet" href="header/style/header.css">

      <!-- Feuille de style des icones-->
    <link rel="stylesheet" href="Icons/css/all.css">

    <link rel="stylesheet" href="style/pub-location-details.css">
</head>
<body>
    <?php 
        include('header/header.php') ;
    ?>
        <div class="header-blank-location">
            <!-- VIDE -->

        </div>

        <div class="pub-option">
            <div class="num-pub">
                <p>Pub-121020232036</p>

                <div class="pub-date-header">
                    <span><i class="fa-solid fa-clock"></i></span>
                    <p>Il y'a 5 mois</p>
                </div>

            </div>

            <div class="imprimer-fav">
                <div class="imprimer">
                    <span>
                        <i class="fa-solid fa-print"></i>
                    </span>
                    <p>Imprimer</p>
                </div>
                <div class="fav">
                    <span>
                        <i class="fa-regular fa-heart"></i>

                    </span>
                    <p>Favoris</p>
                </div>
            </div>

            <div class="visite-whatsapp">
                <div class="visite">
                    <span>
                        <i class="fa-solid fa-file-signature"></i>
                    </span>
                    <p>Demander une viste</p>
                </div>
                <div class="whatsapp-pub">
                    <span>
                        <i class="fa-brands fa-whatsapp fa-beat"></i>
                    </span>
                </div>
            </div>


        </div>

        <div class="main-details-pub">
            <div class="all-picture-pub">
                <div class="main-picture-pub">

                    <img src="Images/location/location_villa1.jpg" alt="">

                    <div class="bouton-next-prev">
                        <span><i class="fa-solid fa-circle-chevron-left"></i></span>
                        <span><i class="fa-solid fa-circle-chevron-right"></i></span>
                    </div>

                </div>
                <div class="picture-pub">
                    <div class="picture">
                        <img src="Images/location/location_villa1.jpg" alt="">
                    </div>

                    <div class="picture">
                        <img src="Images/location/location_villa1.jpg" alt="">
                    </div>

                    <div class="picture">
                        <img src="Images/location/location_villa1.jpg" alt="">
                    </div>

                    <div class="picture">
                        <img src="Images/location/location_villa1.jpg" alt="">
                    </div>

                    <div class="picture">
                        <img src="Images/location/location_villa1.jpg" alt="">
                    </div>

                    <div class="picture">
                        <img src="Images/location/location_villa1.jpg" alt="">
                    </div>

                    <div class="picture">
                        <img src="Images/location/location_villa1.jpg" alt="">
                    </div>

                    <div class="picture">
                        <img src="Images/location/location_villa1.jpg" alt="">
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="description-pub">
            <div class="description-header">

                <div class="titre-caracteristiques">

                    <div class="titre">
                        <h2>Maison à louer - 7 pieces</h2>

                    </div>

                    <div class="caracteristique">
                        <h3> 4 chambres - 1 salon - 1 cuisine</h3>

                    </div>

                </div>
                <div class="pub-prix-localisation">
                    <div class="pub-prix">
                        <p>Loyer : 50.000 fr par mois</p>

                    </div>
                    <div class="pub-local">
                        <p>Cameroun-Yaounde-Bastos</p>
                    </div>
                </div>
            </div>

            <div class="main-description">
                <p>
                    Dans l'agréable quartier d'Aiguelongue, villa F4 de 120m² sur un grand jardin arboré de 665m², terrasse, garage et parking.

                    Vous disposez en rez-de-chaussée d'un séjour avec salle à manger, d'une cuisine aménagée, d'une buanderie, d'une première chambre, d'une salle d'eau et de toilettes séparées.
                    Le premier étage se compose de deux chambres, d'une salle de bains et de toilettes séparés.

                    Cette villa est équipée d'une cheminée insert, d'une climatisation réversible dans le séjour et la salle à manger et de chauffages individuels électriques dans la cuisine et les chambres.

                    Contactez vite IMMOBIS 04.67.60.31.60

                    Les informations sur les risques auxquels ce bien est exposé sont disponibles sur le site Géorisques
                </p>
            </div>
        </div>

    <h1>DETAILS DE LA PUBLICATION LOCATION</h1>
    
</body>
</html>