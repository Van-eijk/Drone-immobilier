<?php
    include_once("Membre.php");
    class Admin extends Membre {
        // Les attributs
        private $idAdmin;
        private $idMembreFK;
        private $poste;
        /* la variable "POSTE" peut prendre 2 valeurs : "admin" ou "adjoint" */


        // les accesseurs & mutateurs

        public function getPoste(){
            return $this->poste;
        }
        public function setPoste($idAdmin, $idMembreFK, $poste){
            $this->poste = $poste;
            $this->idMembreFK = $idMembreFK;
            $this->$idAdmin = $idAdmin ;

        }

        public function getIdMembreFK(){
            return $this->idMembreFK;
        }
        public function setIdMembreFK($idMembreFK){
            $this->idMembreFK = $idMembreFK;
        }
        public function getIdAdmin(){
            return $this->idAdmin;
        }
        public function setIdAdmin($idAdmin){
            $this->idAdmin = $idAdmin;
        }

        // constructeur

        /*public function __construct($poste){
            $this->poste = $poste;
        }*/

        // les methodes

        public function ajouterPub(){

        }

        public function modifierPub(){

        }

        public function supprimerPub(){

        }
        public function ajouterCompte(){

        }
        public function supprimerCompte(){

        }

        public function afficherListeMembre(){

        }



        public function uploadPicture($picture,$dossierSauvegarde){

            /* ****   DECLARATION DES VARIABLES ******* */


            $cheminTemporaireP1;
            $cheminDefinitifP1;
            $nomFichier1 ;
            $dateDuJour = date("dmyhis");


            if($picture['error'] == 0){
                // verification de l'extension du fichier

                $infoFichier = pathinfo($picture['name']);

                $extension_upload = $infoFichier['extension']; // on recupère l'extension du fichier envoyé par l'utilisateur

                // Ensuite on crée la liste des extensions autorisées

                $extension_autorisees = ['jpg','jpeg','png'];

                // verification de l'extension

                if(in_array($extension_upload,$extension_autorisees)){

                    // nous allons enfin valider l'envoi du fichier sur le serveur
                    $cheminTemporaireP1 = $picture['tmp_name']; // recuperation de l'emplacement temporaire du fichier
                    $nomFichier1 = basename($picture['name']); // Recuperation du nom d'origine du fichier
                    $nomFichier1 =  $titreBien . $dateDuJour ;

                }
            }

            //echo $nomFichier1 ;
            //echo ("bonjour les zeros");

            // $dossierSauvegarde = '../../ImagesSauv/'; // chemein du dossier de sauvegarde sur le serveur

            $cheminDefinitifP1 = $dossierSauvegarde . $nomFichier1 ;

            echo $cheminDefinitifP1 ;
            move_uploaded_file($cheminTemporaireP1,$cheminDefinitifP1);

            //return $cheminDefinitifP1 ;


        }



    }
?>