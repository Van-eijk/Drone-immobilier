<?php 
    session_start(); // on démarre le système de session

    include('../../database/config.php'); // on inclut la base de données
    include('../../class/Admin.php');


    // on instencie la class Admin afin d'uploader les fichiers

    $userAdmin = new Admin() ;
    

    $cheminPhotoDefaut="../../Images/logo.jpg";
    $categorieBien = "";
    
   
    $dossierSauvegarde = "../../ImagesSauv/";


?>



<?php 

    if(isset($_SESSION["idAdmin"]) && isset($_SESSION["emailAdmin"])){
        $idAdmin = $_SESSION["idAdmin"] ;  // on récupère l'identifiant de l'administrateur qui est connecté

        // fichier pour traiter l'envoi de données du fichier ajout-bien.php    
        $date = date('dmyhis');
        $referenceBien = 'maison' . $date ;
        //echo $referenceBien ;







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
                                            $listPictures = $_FILES['pictures'] ;
                                            /* nous allons uploader les images sous forme de tableau
                                            ensuite nous allons les serialiser dans une seule variable
                                            afin de l'inserer dans la base de données */

                                            $uploadImagePub = $userAdmin -> uploadPicture($listPictures,$dossierSauvegarde,$titreBien);

                                            if(gettype($uploadImagePub) == "array"){

                                                $serialImage = serialize($uploadImagePub);


                                                
                                                if($categorieBien == "maison"){
                                                    if(isset($_POST['typeMaison'])){
                                                        if(isset($_POST['superficieTerrainMaison'])){
                                                            if(isset($_POST['nbreChambre'])){
                                                                if(isset($_POST['nbreCuisine'])){
                                                                    if(isset($_POST['nbreSalon'])){
                                                                        if(isset($_POST['nbreDouche'])){
                                                                            if(isset($_POST['autrePieceMaison'])){

                                                        


                                                                                $typeMaison = $_POST['typeMaison'] ;

                                                                                $referenceBien = $typeMaison . $date ;


                                                                                $superficieTerrainMaison = $_POST['superficieTerrainMaison'];
                                                                                $nbreChambre = $_POST['nbreChambre'] ;
                                                                                $nbreCuisine = $_POST['nbreCuisine'] ;
                                                                                $nbreSalon = $_POST['nbreSalon'] ;
                                                                                $nbreDouche = $_POST['nbreDouche'] ;
                                                                                $autrePieceMaison = $_POST['autrePieceMaison'] ;


                                                                                $reqMaison1 = $connexionDataBase -> prepare('INSERT INTO bien(id_AdminFK,reference_bien,titre_bien,description_bien,location_vente,prix_bien,pays_bien,ville_bien,lien_photo1) VALUES(:idAdminFK, :referenceBien, :titreBien, :descriptionBien, :locationVente, :prixBien, :paysBien, :villeBien, :lienPhoto)');
                                                                                $reqMaison1 -> execute(array(
                                                                                    'idAdminFK' =>  $idAdmin, 
                                                                                    'referenceBien' =>  $referenceBien, 
                                                                                    'titreBien' =>  $titreBien, 
                                                                                    'descriptionBien' =>  $descriptionBien, 
                                                                                    'locationVente' =>  $locationVente, 
                                                                                    'prixBien' =>  $prixBien, 
                                                                                    'paysBien' =>  $paysBien, 
                                                                                    'villeBien' =>  $villeBien, 
                                                                                    'lienPhoto' =>  $serialImage

                                                                                ));


                                                                                $reqSelectIdBien = $connexionDataBase -> prepare('SELECT id_Bien FROM bien WHERE reference_bien = :refBien');

                                                                                $reqSelectIdBien -> execute(array(
                                                                                    'refBien' => $referenceBien
                                                                                ));

                                                                                $requeteresultatIdBien = $reqSelectIdBien -> fetch();

                                                                                $resultatIdBien = $requeteresultatIdBien['id_Bien'];

                                                                                //$resultatIdBien = 102 ;


                                                                                $reqMaison2 = $connexionDataBase -> prepare('INSERT INTO maison(id_bienFK, nbre_piece, nbre_chambre, nbre_cuisine, nbre_salon, nbre_douche, type_maison, superficie_terrain) VALUES(:idBienFK, :nbrePiece, :nbreChambre, :nbreCuisine, :nbreSalon, :nbreDouche, :typeMaison, :superficieTerrain)');
                                                                                $reqMaison2 -> execute(array(
                                                                                    'idBienFK' =>  $resultatIdBien, 
                                                                                    'nbrePiece' =>  $autrePieceMaison, 
                                                                                    'nbreChambre' =>  $nbreChambre, 
                                                                                    'nbreCuisine' =>  $nbreCuisine, 
                                                                                    'nbreSalon' =>  $nbreSalon, 
                                                                                    'nbreDouche' =>  $nbreDouche, 
                                                                                    'typeMaison' =>  $typeMaison, 
                                                                                    'superficieTerrain' =>  $superficieTerrainMaison
                                                                            

                                                                                ));


                                                                                header("Location:../dashboard-admin.php");



                                                                                



                                                                            

                                                                                    
                                                        
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

    }


    
?>