<?php 
    session_start() ;

    // On définit le lien du logo pour cette page

    $lienLogo ="../../Images/logo2.png" ;
    $username = "Username";


?>


<?php 
    // Debut de la page

    if(isset($_SESSION["idAdmin"]) && isset($_SESSION["emailAdmin"])){ 
        $username = $_SESSION["nomAdmin"] ;
    ?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ajouter un bien</title>
            <link rel="stylesheet" href="../option-admin-style/ajout-bien.css">

            <link rel="stylesheet" href="../header-menu-admin/header-menu-admin.css">

            <!-- Feuille de style des icones-->
            <link rel="stylesheet" href="../../Icons/css/all.css">
        </head>
        <body>
            <?php include "../header-menu-admin/header-menu-admin.php";?>

            <div class="main-content-bien">
                <h1>Ajout bien</h1>
                <div class="main-form">
                    <form action="" method="post">
                        <fieldset>
                            <legend>Catégorie</legend>
                        </fieldset>
                    </form>
                </div>
               

            </div>
            
        </body>
        </html>

        
    <?php 
    }


?>
