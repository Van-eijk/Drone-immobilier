<?php 
    $photo = array();
    $dateDuJour = date("dmyhis");
    $dossierSauv = "sauv/";
    $cheminDefinitif = "";
    $nomFichier="";
        
        //echo $photo[0];
    if(isset($_POST['send'])){
        foreach($_FILES['picture']['tmp_name'] as $key => $tmp_name){
            $nbreAleatoire = rand(0,1000000000000); // On genere un nombre aleatoire qui nous permettra de definir le nom de chaque fichier

            $name = $_FILES['picture']['name'][$key];  // On récupère le nom de chaque fichier
            $type = $_FILES['picture']['type'][$key]; // on recupere le type de chaque fichier
            $size = $_FILES['picture']['size'][$key]; // on recupère la taille de chaque fichier
            $error = $_FILES['picture']['error'][$key]; // permet de verifier si l'importation des fichiers s'est deroulé sans erreur
            $cheminTemporaire = $_FILES['picture']['tmp_name'][$key]; // récupération de l'emplacement temporaire de chaque fichier


            if($error == 0){
                $infoFichier = pathinfo($name);
                $extension_upload = $infoFichier['extension']; // On recupère l'extension de chaque fichier

                $extension_autorisees = ['jpg','jpeg','png']; // la liste des extensions autorisées

                // verification de l'extension du fichier

                if(in_array($extension_upload,$extension_autorisees )){
                    $nomFichier = basename($name); // on recupère le nom d'origine du fichier
                    $nomFichier = "photo" . $dateDuJour ."_".$nbreAleatoire ;
                    $cheminDefinitif = $dossierSauv . $nomFichier ; // on definit l'emplacement definitif du fichier
                    move_uploaded_file($cheminTemporaire,$cheminDefinitif); // on stocke le fichier dans le serveur
    
                    array_push($photo, $cheminDefinitif); // on inserre chaque emplacement de fichier dans ce tableau
                   
                }
               
            }
        
        }

        //print_r($photo);

        foreach($photo as $val){
            echo $val . '<br>';
        }

        
        /*for($i = 0 ; $i < count($photo) ; $i++){
                echo $photo[$i] . '<br>';
        }*/
    }

    /*$nom = array("bobo", "van", "massa");

    $ser = serialize($nom);
    echo $ser . '<br>';

    $unser = unserialize($ser);
    foreach($unser as $val){
        echo $val . '<br>';
    }*/
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture[]" id="" multiple>
        <input type="submit" value="send" name="send">

    </form>
</body>
</html>