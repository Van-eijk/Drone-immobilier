<?php 
    // On définit le lien du logo pour cette page

    $lienLogo ="Images/logo2.png" ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drone-immobilier</title>


    <!-- Feuille de style principale-->
        <link rel="stylesheet" href="style/index.css">

        <!-- Feuille de style des icones-->
    <link rel="stylesheet" href="Icons/css/all.css">

        <!-- Feuille de style du dossier header-->
    <link rel="stylesheet" href="header/style/header.css">
</head>
<body>
    <?php include("header/header.php"); ?>

    <div class="backgroung-presentation">
        <div class="search-box">
            <form action="" method="POST">

                <div class="location-vente">


                    <div class="btn-radio">
                        <input type="radio" name="locationVente" value="Alouer" id="btnLouer" checked="checked" >
                        <input type="radio" name="locationVente" value="Avendre" id="btnVendre">
                    </div>



                    <label class="location" onmouseover="locationOver()" onmouseleave="locationLeave()" for= "btnLouer" >
                        <div class="location-icon" id="locationIcon">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <p id="locationTitle" >Louer</p>
                    </label>

                    <label class="vente" onmouseover="venteOver()" onmouseleave="venteLeave()" for="btnVendre" >
                        <div class="vente-icon" id="venteIcon" >
                            <i class="fa-solid fa-house-chimney"></i>
                        </div>
                        <p id="venteTitle" >Acheter</p>
                    </label>

                </div>

                <div class="search-option">
                    <div class="search-pays">
                        <select name="searchPays" id="">
                            <option value="Cameroun" selected = "selected" >Cameroun</option>
                            <option value="Canada">Canada</option>
                            <option value="Afrique du Sud">Afrique du Sud</option>
                            <option value="Cote d'Ivoir">Cote d'Ivoir</option>
                            <option value="Belgique">Belgique</option>

                        </select>
                    </div>


                    <div class="search-ville">
                        <select name="searchVille" id="">
                            <option value="Yaounde" selected = "selected" >Yaounde</option>
                            <option value="Montreal">Montreal</option>
                            <option value="Douala">Douala</option>
                            <option value="Habidjan">Habidjan</option>
                            <option value="Paris">Paris</option>

                        </select>
                    </div>


                    <div class="search-bien">
                        <select name="searchTypeBien" id="">
                            <option value="Studio" selected = "selected" >Studio</option>
                            <option value="Chambre">Chambre</option>
                            <option value="Appartement">Appartement</option>
                            <option value="Maison">Maison</option>
                            <option value="Terrain">Terrain</option>

                        </select>
                    </div>

                    <div class="search-send">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass fa-beat-fade"></i></button>

                    </div>
                </div>

            </form>

        </div>

    </div>

    <p>massa</p>

    <div style="font-size: 50px;">
        <p>       
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit porro excepturi placeat corporis a culpa reprehenderit, ullam rerum? Libero beatae incidunt et quos exercitationem voluptatem error ad voluptatum dolor aliquid.
            
        </p>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, minus provident commodi, repellat officia id inventore quod cum repudiandae et tempore odio. Iure aperiam corrupti cumque fugiat error nemo tempora!

        </p>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sed ea explicabo voluptatem? Ipsum dolorem explicabo quo ipsam deserunt, dolorum reiciendis fuga nulla? Ipsum pariatur laudantium animi minus exercitationem voluptatem!

        </p>

        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio aperiam ratione vitae exercitationem, architecto voluptates eius maxime consequuntur tempora incidunt. Repellendus at necessitatibus, facere explicabo porro ducimus dicta officia perspiciatis?
        </p>

    </div>



    <script src="js/effetLocationVente.js"></script>
</body>
</html>