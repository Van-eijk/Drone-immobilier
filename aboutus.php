<?php 
    // On définit le lien du logo pour cette page

    $lienLogo ="Images/logo2.png" ;

    $title = "A PROPOS DE NOUS";


    /*echo $_POST["locationVente"];*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    
    
    
    
    
    <link rel="stylesheet" href="style/aboutus.css">
    <link rel="stylesheet" href="header-title/header-title.css">



     <!-- Feuille de style des icones-->
     <link rel="stylesheet" href="Icons/css/all.css">

    <!-- Feuille de style du dossier header-->
    <link rel="stylesheet" href="header/style/header.css">


    <!-- Feuille de style du dossier footer-->
    <link rel="stylesheet" href="footer/style/footer.css">
</head>
<body>


    <?php 
        include("header/header.php"); 
        include("header-title/header-title.php");
    ?>

    <p>Drone immobilier est une entreprise fiable et qui a déjà fait ses preuves</p>


    <!-- On inclut le pieds de page -->

    <?php include('footer/footer.php') ; ?>
    
</body>
</html>