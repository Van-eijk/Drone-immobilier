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

        public function __construct($poste){
            $this->poste = $poste;
        }

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



    }
?>