<?php 
    // On inclut le fichier qui contient les informations de connexion à la base de données

    $lienFichierBDD = "../database/config.php" ;
    include($lienFichierBDD);

    // On inclut la classe la classe Admin

    include("../class/Admin.php");
?>



<?php 
    $erreurPassword="";


    if(isset($_POST["logAdmin"])){

        if(!empty($_POST["emailFormContact"])){

            if(!empty($_POST["password"])){

                /*echo $_SERVER['REMOTE_ADDR'];*/

                $conAdmin = new Admin(); // On instencie la classe Admin                

                $redirectionPageMembre = "Location:../index.php";
                $redirectionPageAdmin = "Location:dashboard-admin.php" ;
                $lienPageConnexion = "index.php";


                $email = $_POST["emailFormContact"];

                $passwordHache = sha1($_POST["password"]); // On hache le mot de passe afin de le comparer avec celui qui se trouve dans la BDD

                $conAdmin->connexionEspaceMembre($lienFichierBDD, $lienPageConnexion, $redirectionPageAdmin, $redirectionPageMembre, $email, $passwordHache) ;

    
                
                






            
            }
        }
    }





?>