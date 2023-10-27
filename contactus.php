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
    <title>Drone immobilier - contactez nous</title>
    <link rel="stylesheet" href="style/contactus.css">


        <!-- Feuille de style des icones-->
        <link rel="stylesheet" href="Icons/css/all.css">

        <!-- Feuille de style du dossier header-->
        <link rel="stylesheet" href="header/style/header.css">


        <!-- Feuille de style du dossier footer-->
        <link rel="stylesheet" href="footer/style/footer.css">
</head>
<body>
    <?php include("header/header.php"); ?>

    <div class="form-header">
        <h2>CONTACTEZ - NOUS </h2>
    </div>

    <div class="main-content-contact">
        <p>Merci de remplir ce formulaire, nous vous contacterons le plus tot possible...</p>

        <div class="main-form-contact">
            <form action="" method="post">
                <div class="nom">
                    <span><i class="fa-solid fa-user"></i></span>
                    <input type="text" placeholder="Entrez votre nom" name="nomFormContact" autofocus>
                </div>
                

                <div class="premnom">
                    <span><i class="fa-solid fa-user"></i></span>
                    <input type="text" placeholder="Entrez votre prenom" name="prenomFormContact">
                </div>

                <div class="email-form-contact">
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" placeholder="Entrez votre adresse email" name="emilFormContact">
                </div>

                <div class="number-phone">
                    <span><i class="fa-solid fa-phone"></i></span>
                    <input type="tel" placeholder="Entrez votre numéro de telephone" name="telFormContact">
                </div>

                <div class="pays">
                    <span><i class="fa-solid fa-earth-africa"></i></span>
                    <input type="text" placeholder="Entrez votre pays" name="paysFormContact">
                </div>

                <div class="ville">
                    <span><i class="fa-solid fa-city"></i></span>
                    <input type="text" placeholder="Entrez votre ville" name="villeFormContact">
                </div>

                <div class="message">
                    <textarea name="messageFormContact" id=""  placeholder="Ecrivez votre message">

                    </textarea>
                </div>

                <div class="send-form">
                    <button type="submit">
                        <span><i class="fa-solid fa-paper-plane"></i></span>
                        <p>Envoyer</p>
                    </button>
                </div>
            </form>
        </div>
    </div>




    <!-- On inclut le pieds de page -->

    <?php include('footer/footer.php') ; ?>



    
</body>
</html>