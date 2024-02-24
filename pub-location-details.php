<?php 
    // On définit le lien du logo pour cette page

    $lienLogo ="Images/logo2.png" ;
    include("database/config.php");




?>

<?php

    /************* ON RECUPERE LES INFORMATIONS DEPUIS LA BASE DE DONNEES ********** */
    if(isset($_GET["identifiantBien"])){
        $identifiantBien = $_GET["identifiantBien"] ; // on recupère la variable provenant du lien


        $reqDetailsBien = $connexionDataBase ->prepare('SELECT * FROM bien WHERE id_Bien = :identifiantB');
        $reqDetailsBien -> execute(array('identifiantB'=> $identifiantBien));
        $resultatReqDetailsBien = $reqDetailsBien->fetch();
    
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

    <!-- Feuille de style du dossier footer-->
    <link rel="stylesheet" href="footer/style/footer.css">
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
                <p> <?php echo $resultatReqDetailsBien['reference_bien'];?> </p>

                <div class="pub-date-header">
                    <span><i class="fa-solid fa-clock"></i></span>
                    <p><?php echo $resultatReqDetailsBien['date_time_bien'];?></p>
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
                    <?php
                        $tabPhotoPub = $resultatReqDetailsBien['lien_photo1'];
                        $tabPhotoPub = unserialize($tabPhotoPub);

                        for($i= 0;$i<count($tabPhotoPub);$i++) {
                    ?>

                        <img src="<?php echo $tabPhotoPub[$i] ;?>" class="main-img " alt="">

                    <?php
                        }
                    ?>


                    <div class="bouton-next-prev">
                        <button onclick="prevPicture()" ><i class="fa-solid fa-circle-chevron-left"></i></button>
                        <button onclick="nextPicture()"><i class="fa-solid fa-circle-chevron-right"></i></button>
                    </div>

                </div>


                <div class="picture-pub">

                    <?php

                        for($i= 0;$i<count($tabPhotoPub);$i++) {
                    ?>

                        <div class="picture">
                            <img src="<?php echo $tabPhotoPub[$i] ;?>" class="side-picture" alt="">
                        </div>

                    <?php
                        }
                    ?>

                    
                    
                </div>
            </div>
        </div>

        <div class="description-pub">
            <div class="description-header">

                <div class="titre-caracteristiques">

                    <div class="titre">
                        <h2><?php echo ucfirst($resultatReqDetailsBien['titre_bien']) ;?></h2>

                    </div>

                    <!--  Commencons le tri des donnees  -->

                    <?php

                        // On verifie si le bien se trouve dans la table chambre

                        $reqCaractSpecifique = $connexionDataBase -> prepare('SELECT * FROM chambre WHERE id_bienFK = :idBienFK');
                        $reqCaractSpecifique -> execute(array(
                            'idBienFK'=> $identifiantBien
                        ));

                    

                        $resultatReqCaractChambre = $reqCaractSpecifique -> fetch();

                        if(!empty($resultatReqCaractChambre)) {
                    ?>

                        <!-- Au cas où on a trouvé un resultat, on affiche les caracterisques de la chambre -->

                        <div class="caracteristique">
                            <div class="surface-terrain">
                                <span><i class="fa-solid fa-chart-area"></i></span>
                                <p>1000 m²</p>
                            </div>

                            <div class="nbre-etage">
                                <span><i class="fa-solid fa-building"></i></span>
                                <p>5 Niveaux</p>
                            </div>

                            <div class="nbre-parking">
                                <span><i class="fa-solid fa-square-parking"></i></span>
                                <p>1 Parking</p>
                            </div>

                            <div class="nbre-salon">
                                <span><i class="fa-solid fa-couch"></i></span>
                                <p>1 Salon</p>
                            </div>

                            <div class="nbre-cuisine">
                                <span><i class="fa-solid fa-kitchen-set"></i></span>
                                <p>1 Cuisine</p>
                            </div>

                            <div class="nbre-chambre">
                                <span><i class="fa-solid fa-bed"></i></span>
                                <p>1 Chambre</p>
                            </div>



                            <div class="nbre-douche">
                                <span><i class="fa-solid fa-shower"></i></span>
                                <p>1 Douche</p>
                            </div>

                        

                            <div class="nbre-autre-piece">
                                <span><i class="fa-regular fa-square"></i></span>
                                <p>1 Autres pieces</p>
                            </div>

                       

                        </div>

                    <?php 

                        }

                        // On verifie si le bien se trouve dans la table maison

                        $reqCaractSpecifique = $connexionDataBase -> prepare('SELECT * FROM maison WHERE id_bienFK = :idBienFK');
                        $reqCaractSpecifique -> execute(array(
                            'idBienFK'=> $identifiantBien
                        ));

                    

                        $resultatReqCaractMaison = $reqCaractSpecifique -> fetch();

                        if(!empty($resultatReqCaractMaison)) {
                       
                        
                    ?>  

                        <!-- Au cas où on a trouvé un resultat, on affiche les caracterisques de la maison -->


                        <div class="caracteristique">
                            <div class="surface-terrain">
                                <span><i class="fa-solid fa-chart-area"></i></span>
                                <p>1000 m²</p>
                            </div>

                            <div class="nbre-etage">
                                <span><i class="fa-solid fa-building"></i></span>
                                <p>5 Niveaux</p>
                            </div>

                            <div class="nbre-parking">
                                <span><i class="fa-solid fa-square-parking"></i></span>
                                <p>1 Parking</p>
                            </div>

                            <div class="nbre-salon">
                                <span><i class="fa-solid fa-couch"></i></span>
                                <p>1 Salon</p>
                            </div>

                            <div class="nbre-cuisine">
                                <span><i class="fa-solid fa-kitchen-set"></i></span>
                                <p>1 Cuisine</p>
                            </div>

                            <div class="nbre-chambre">
                                <span><i class="fa-solid fa-bed"></i></span>
                                <p>1 Chambre</p>
                            </div>



                            <div class="nbre-douche">
                                <span><i class="fa-solid fa-shower"></i></span>
                                <p>1 Douche</p>
                            </div>

                        

                            <div class="nbre-autre-piece">
                                <span><i class="fa-regular fa-square"></i></span>
                                <p>1 Autres pieces</p>
                            </div>

                       

                        </div>




                    <?php 

                        }


                        // On verifie si le bien se trouve dans la table immeuble

                        $reqCaractSpecifique = $connexionDataBase -> prepare('SELECT * FROM immeuble WHERE id_bienFK = :idBienFK');
                        $reqCaractSpecifique -> execute(array(
                            'idBienFK'=> $identifiantBien
                        ));

                    

                        $resultatReqCaractImmeuble = $reqCaractSpecifique -> fetch();

                        if(!empty($resultatReqCaractImmeuble)) {

                    ?>


                        <!-- Au cas où on a trouvé un resultat, on affiche les caracterisques de l' immeuble -->


                        <div class="caracteristique">
                            <div class="surface-terrain">
                                <span><i class="fa-solid fa-chart-area"></i></span>
                                <p>1000 m²</p>
                            </div>

                            <div class="nbre-etage">
                                <span><i class="fa-solid fa-building"></i></span>
                                <p>5 Niveaux</p>
                            </div>

                            <div class="nbre-parking">
                                <span><i class="fa-solid fa-square-parking"></i></span>
                                <p>1 Parking</p>
                            </div>

                            <div class="nbre-salon">
                                <span><i class="fa-solid fa-couch"></i></span>
                                <p>1 Salon</p>
                            </div>

                            <div class="nbre-cuisine">
                                <span><i class="fa-solid fa-kitchen-set"></i></span>
                                <p>1 Cuisine</p>
                            </div>

                            <div class="nbre-chambre">
                                <span><i class="fa-solid fa-bed"></i></span>
                                <p>1 Chambre</p>
                            </div>



                            <div class="nbre-douche">
                                <span><i class="fa-solid fa-shower"></i></span>
                                <p>1 Douche</p>
                            </div>

                        

                            <div class="nbre-autre-piece">
                                <span><i class="fa-regular fa-square"></i></span>
                                <p>1 Autres pieces</p>
                            </div>

                       

                        </div>




                    <?php 

                        }

                        // On verifie si le bien se trouve dans la table magasin

                        $reqCaractSpecifique = $connexionDataBase -> prepare('SELECT * FROM magasin WHERE id_bienFK = :idBienFK');
                        $reqCaractSpecifique -> execute(array(
                            'idBienFK'=> $identifiantBien
                        ));

                    

                        $resultatReqCaractMagasin = $reqCaractSpecifique -> fetch();
                        if(!empty($resultatReqCaractMagasin)) {

                    ?>

                        <!-- Au cas où on a trouvé un resultat, on affiche les caracterisques du magasin -->


                        <div class="caracteristique">
                            <div class="surface-terrain">
                                <span><i class="fa-solid fa-chart-area"></i></span>
                                <p>1000 m²</p>
                            </div>

                            <div class="nbre-etage">
                                <span><i class="fa-solid fa-building"></i></span>
                                <p>5 Niveaux</p>
                            </div>

                            <div class="nbre-parking">
                                <span><i class="fa-solid fa-square-parking"></i></span>
                                <p>1 Parking</p>
                            </div>

                            <div class="nbre-salon">
                                <span><i class="fa-solid fa-couch"></i></span>
                                <p>1 Salon</p>
                            </div>

                            <div class="nbre-cuisine">
                                <span><i class="fa-solid fa-kitchen-set"></i></span>
                                <p>1 Cuisine</p>
                            </div>

                            <div class="nbre-chambre">
                                <span><i class="fa-solid fa-bed"></i></span>
                                <p>1 Chambre</p>
                            </div>



                            <div class="nbre-douche">
                                <span><i class="fa-solid fa-shower"></i></span>
                                <p>1 Douche</p>
                            </div>

                        

                            <div class="nbre-autre-piece">
                                <span><i class="fa-regular fa-square"></i></span>
                                <p>1 Autres pieces</p>
                            </div>

                       

                        </div>



                    <?php 

                        }


                        // On verifie si le bien se trouve dans la table terrain

                        $reqCaractSpecifique = $connexionDataBase -> prepare('SELECT * FROM terrain WHERE id_bienFK = :idBienFK');
                        $reqCaractSpecifique -> execute(array(
                            'idBienFK'=> $identifiantBien
                        ));

                    

                        $resultatReqCaractTerrain = $reqCaractSpecifique -> fetch();
                        if(!empty($resultatReqCaractTerrain)) {

                    ?>


                        <!-- Au cas où on a trouvé un resultat, on affiche les caracterisques du terrain -->


                        <div class="caracteristique">
                            <div class="surface-terrain">
                                <span><i class="fa-solid fa-chart-area"></i></span>
                                <p>1000 m²</p>
                            </div>

                            <div class="nbre-etage">
                                <span><i class="fa-solid fa-building"></i></span>
                                <p>5 Niveaux</p>
                            </div>

                            <div class="nbre-parking">
                                <span><i class="fa-solid fa-square-parking"></i></span>
                                <p>1 Parking</p>
                            </div>

                            <div class="nbre-salon">
                                <span><i class="fa-solid fa-couch"></i></span>
                                <p>1 Salon</p>
                            </div>

                            <div class="nbre-cuisine">
                                <span><i class="fa-solid fa-kitchen-set"></i></span>
                                <p>1 Cuisine</p>
                            </div>

                            <div class="nbre-chambre">
                                <span><i class="fa-solid fa-bed"></i></span>
                                <p>1 Chambre</p>
                            </div>



                            <div class="nbre-douche">
                                <span><i class="fa-solid fa-shower"></i></span>
                                <p>1 Douche</p>
                            </div>

                        

                            <div class="nbre-autre-piece">
                                <span><i class="fa-regular fa-square"></i></span>
                                <p>1 Autres pieces</p>
                            </div>

                       

                        </div>


                        


                    <?php 

                        }
                    ?>


                        
                    

                    

                </div>
                <div class="pub-prix-localisation">
                    <div class="pub-prix">
                        <?php
                            if($resultatReqDetailsBien['location_vente'] == "location"){  
                            ?>
                                <p>Loyer : <?php echo number_format($resultatReqDetailsBien['prix_bien'],0,",",".");?> fr / mois</p>


                            <?php
                                }
                                else{
                                    ?>
                                    <p>Prix : <?php echo number_format($resultatReqDetailsBien['prix_bien'],0,",",".");?> fr</p>


                                <?php
                                }
                            ?>

                    </div>
                    <div class="pub-local">
                        <p>
                            <?php echo ucfirst($resultatReqDetailsBien['pays_bien']) . "-" . ucfirst($resultatReqDetailsBien['ville_bien']) . "-" . ucfirst($resultatReqDetailsBien['quartier_bien']) ;?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="main-description">
                <p>
                    <?php echo ucfirst($resultatReqDetailsBien['description_bien']) ;?>
                </p>
            </div>
        </div>



    <?php include('footer/footer.php') ; ?>

    <script src="js/pub-location-details-slide.js"></script>
    
</body>
</html>

        


    <?php 
    
    }

    
?>


