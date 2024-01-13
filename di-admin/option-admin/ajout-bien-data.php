<?php 
    session_start(); // on démarre le système de session

    include('../../database/config.php'); // on inclut la base de données
    

    $cheminPhotoDefaut="../../Images/logo.jpg";
    $categorieBien = "";
    
   
    $dossierSauvegarde;


?>





<?php 

    function uploadPicture($picture,$dossierSauvegarde,$titreBien){

        /* ****   DECLARATION DES VARIABLES ******* */


        $cheminTemporaireP1 ="";
        $cheminDefinitifP1 ="";
        $nomFichier1 = "";
        $dateDuJour = date("dmyhis");
        $i = 0 ;


        if($picture['error'] == 0){
            // verification de l'extension du fichier

            $infoFichier = pathinfo($picture['name']);

            $extension_upload = $infoFichier['extension']; // on recupère l'extension du fichier envoyé par l'utilisateur

            // Ensuite on crée la liste des extensions autorisées

            $extension_autorisees = ['jpg','jpeg','png'];

            // verification de l'extension

            if(in_array($extension_upload,$extension_autorisees)){
                $i++ ;

                // nous allons enfin valider l'envoi du fichier sur le serveur
                $cheminTemporaireP1 = $picture['tmp_name']; // recuperation de l'emplacement temporaire du fichier
                $nomFichier1 = basename($picture['name']); // Recuperation du nom d'origine du fichier
                $nomFichier1 =  $titreBien . $dateDuJour .'_'. $i;

            }
        }

        //echo $nomFichier1 ;
        //echo ("bonjour les zeros");

        // $dossierSauvegarde = '../../ImagesSauv/'; // chemein du dossier de sauvegarde sur le serveur

        $cheminDefinitifP1 = $dossierSauvegarde . $nomFichier1 ;

        //echo $cheminDefinitifP1 ;
        move_uploaded_file($cheminTemporaireP1,$cheminDefinitifP1);

        return $cheminDefinitifP1 ;


    }

?>

<?php 

    if(isset($_SESSION["idAdmin"]) && isset($_SESSION["emailAdmin"])){
        $idAdmin = $_SESSION["idAdmin"] ;  // on récupère l'identifiant de l'administrateur qui est connecté

        // fichier pour traiter l'envoi de données du fichier ajout-bien.php    
        $date = date('dmyhis');
        $referenceBien = 'maison' . $date ;
        echo $referenceBien ;







        if(isset($_POST['pub'])){
            if(isset($_POST['catBien'])){
                $categorieBien = $_POST['catBien'] ;
                if(isset($_POST['locationVente'])){
                    if(isset($_POST['titreBien'])){
                        if(isset($_POST['paysBien'])){
                            if(isset($_POST['villeBien'])){
                                if(isset($_POST['prixBien'])){
                                    if(isset($_POST['descriptionBien'])){


                                        $locationVente = $_POST['locationVente'];

                                        $titreBien = $_POST['titreBien'];
                                        $paysBien = $_POST['paysBien'];
                                        $villeBien = $_POST['villeBien'];
                                        $prixBien = $_POST['prixBien'] ;
                                        $descriptionBien = $_POST['descriptionBien'] ;


                                        if(isset($_FILES['pictures'])){


                                            



                                            if($categorieBien == "maison"){
                                                if(isset($_POST['typeMaison'])){
                                                    if(isset($_POST['superficieTerrainMaison'])){
                                                        if(isset($_POST['nbreChambre'])){
                                                            if(isset($_POST['nbreCuisine'])){
                                                                if(isset($_POST['nbreSalon'])){
                                                                    if(isset($_POST['nbreDouche'])){
                                                                        if(isset($_POST['autrePieceMaison'])){

                                                                            $referenceBien = 'maison' . $date ;


                                                                            $typeMaison = $_POST['typeMaison'] ;
                                                                            $superficieTerrainMaison = $_POST['superficieTerrainMaison'];
                                                                            $nbreChambre = $_POST['nbreChambre'] ;
                                                                            $nbreCuisine = $_POST['nbreCuisine'] ;
                                                                            $nbreSalon = $_POST['nbreSalon'] ;
                                                                            $nbreDouche = $_POST['nbreDouche'] ;
                                                                            $autrePieceMaison = $_POST['autrePieceMaison'] ;



                                                                            $photo1 = $_FILES['p1'] ;
                                                                            $photo2 = $_FILES['p2'] ;
                                                                            $photo3 = $_FILES['p3'] ;
                                                                            $photo4 = $_FILES['p4'] ;
                                                                            $photo5 = $_FILES['p5'] ;
                                                                            $photo6 = $_FILES['p6'] ;
                                                                            $photo7 = $_FILES['p7'] ;
                                                                            $photo8 = $_FILES['p8'] ;

                                                                            $dossierSauvegarde = '../../ImagesSauv/';



                                                                            // TRAITEMENT DE LA PREMIERE PHOTO
                                                                            $result1 = uploadPicture($photo1,$dossierSauvegarde,$titreBien) ;
                                                                            $result2 = uploadPicture($photo2,$dossierSauvegarde,$titreBien) ;
                                                                            $result3 = uploadPicture($photo3,$dossierSauvegarde,$titreBien) ;
                                                                            $result4 = uploadPicture($photo4,$dossierSauvegarde,$titreBien) ;
                                                                            $result5 = uploadPicture($photo5,$dossierSauvegarde,$titreBien) ;
                                                                            $result6 = uploadPicture($photo6,$dossierSauvegarde,$titreBien) ;
                                                                            $result7 = uploadPicture($photo7,$dossierSauvegarde,$titreBien) ;
                                                                            $result8 = uploadPicture($photo8,$dossierSauvegarde,$titreBien) ;
                                                                            echo $result1 . ' \n' ;
                                                                            echo $result2 . ' \n' ;
                                                                            echo $result3 . ' \n' ;
                                                                            echo $result4 . ' \n' ;
                                                                            echo $result5 . ' \n' ;
                                                                            echo $result6 . ' \n' ;
                                                                            echo $result7 . ' \n' ;
                                                                            echo $result8 . ' \n' ;

                                                                                
                                                    
                                                                        }
                                                    
                                                                    }
                                                    
                                                                }
                                                    
                                                            }
                                                    
                                                        }
                                                    
                                                    }
    
                                                }
                                            }
    
    
    
                                            if($categorieBien == "chambre"){
                                                if(isset($_POST['moderneChambre'])){
                                                    if(isset($_POST['superficieChambre'])){
                                                        
                                                    
                                                    }
    
                                                }
                                            }
    
    
    
    
                                            if($categorieBien == "magasin"){
                                                if(isset($_POST['superficieMagasin'])){
                                                    if(isset($_POST['nbrePieceMagasin'])){
                                                        
                                                    
                                                    }
    
                                                }
                                            }
    
    
    
                                            if($categorieBien == "immeuble"){
                                                if(isset($_POST['superficieTerrainImmeuble'])){
                                                    if(isset($_POST['nbreEtageImmeuble'])){
                                                        
                                                    
                                                    }
    
                                                }
                                            }
    
    
    
    
                                            if($categorieBien == "terrain"){
                                                if(isset($_POST['superficieTerrain'])){
                                                
    
                                                }
                                            }
    

                                        }
  
            
                                    }
            
                                }
            
                            }
            
                        }
            
                    }
            
                }
            
            }
        }

    }


    
?>