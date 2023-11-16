<?php 
    // On inclut le fichier qui contient les informations de connexion à la base de données
    include_once("../database/config.php");
?>



<?php 

    if(isset($_POST["logAdmin"])){

        if(!empty($_POST["emailFormContact"])){

            if(!empty($_POST["password"])){

                /*echo $_SERVER['REMOTE_ADDR'];*/
                /*echo sha1("azerty");*/

                $redirectionPageMembre = "Location:../index.php";
                $redirectionPageAdmin = "Location:dashboard-admin.php" ;


                $email = $_POST["emailFormContact"];

                $passwordHache = sha1($_POST["password"]); // On hache le mot de passe afin de le comparer avec celui qui se trouve dans la BDD

                // On vérifie d'abord si l'utilisateur se trouve dans la table membre

                $reqConnexionMembre = $connexionDataBase ->prepare("SELECT membre.id_membre, membre.nom_membre, prenom_membre, membre.phone_membre, membre.email_membre, membre.pays_membre, membre.ville_membre FROM membre WHERE email_membre = :mail_membre AND mdp_membre = :mdp");
                $reqConnexionMembre -> execute(array(
                    "mail_membre" => $email,
                    "mdp"=> $passwordHache));

                $resultatConnexionMembre = $reqConnexionMembre -> fetch(); // On récupère les informations depuis la base de données

                if(!$resultatConnexionMembre){
                    echo"Adresse email ou mot de passe incorrect !";
                }
                else{

                    // comme le visiteur existe dans la table membre, on verifie maintenant s'il existe dans la table admin

                    $identifiantMembre =  $resultatConnexionMembre["id_membre"]; // On récupère l'identifiant du membre

                    $reqConnexionAdmin = $connexionDataBase -> prepare("SELECT visiteur.adresse_ip, visiteur.datevisiteur, membre.id_membre, membre.nom_membre, membre.prenom_membre, membre.phone_membre, membre.email_membre, membre.pays_membre, membre.ville_membre, admin.id_admin, admin.poste FROM visiteur
                    INNER JOIN membre
                    ON visiteur.id_visiteur = membre.id_visiteur_FK 
                    INNER JOIN admin
                    ON membre.id_membre = admin.id_membreFK 
                    WHERE id_membreFK = :idMembre");

                    $reqConnexionAdmin -> execute(array(
                        "idMembre"=> $identifiantMembre)) ;

                    $resultatConnexionAdmin = $reqConnexionAdmin -> fetch();  // On récupère les informations depuis la base de données

                    if(!$resultatConnexionAdmin){
                        //echo $resultatConnexionMembre['nom_membre'] . ' Vous etes un membre ordinaire';
                        session_start();
                        $_SESSION["idMembre"] = $resultatConnexionMembre["id_membre"];
                        $_SESSION["emailMembre"] = $resultatConnexionMembre["email_membre"];

                        $_SESSION["nomMembre"] = $resultatConnexionMembre["nom_membre"];
                        $_SESSION["prenomMembre"] = $resultatConnexionMembre["prenom_membre"];
                        $_SESSION["phoneMembre"] = $resultatConnexionMembre["phone_membre"];
                        $_SESSION["pays_membre"] = $resultatConnexionMembre["pays_membre"];
                        $_SESSION["villeMembre"] = $resultatConnexionMembre["ville_membre"];


                        header($redirectionPageMembre);

                    }
                    else{
                        /*echo"Vous etes administrateur </br> ";
                        echo'Votre adresse IP est :' . $resultatConnexionAdmin['adresse_ip'] . "</br> ";
                        echo'votre nom est :' . $resultatConnexionAdmin['nom_membre'] . "</br> ";
                        echo 'votre Numéro est :'. $resultatConnexionAdmin['phone_membre'] . " </br>";
                        echo 'Votre poste est :'. $resultatConnexionAdmin['poste'] . "</br> ";*/
                        //echo $resultatConnexionAdmin['nom_membre'] . ' Vous etes un administrateur !';

                        session_start();

                        $_SESSION["idAdmin"] = $resultatConnexionAdmin["id_admin"];
                        $_SESSION["nomAdmin"] = $resultatConnexionAdmin["nom_membre"];
                        $_SESSION["prenomAdmin"] = $resultatConnexionAdmin["prenom_membre"];
                        $_SESSION["phoneAdmin"] = $resultatConnexionAdmin["phone_membre"];
                        $_SESSION["emailAdmin"] = $resultatConnexionAdmin["email_membre"];
                        $_SESSION["villeAdmin"] = $resultatConnexionAdmin["ville_membre"];
                        $_SESSION["paysAdmin"] = $resultatConnexionAdmin["pays_membre"];


                        header($redirectionPageAdmin);

                    }
                }






            
            }
        }
    }





?>