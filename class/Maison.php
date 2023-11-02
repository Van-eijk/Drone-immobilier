<?php 
    include_once("Studio.php");

    class Maison extends Studio{
        // Les attributs

        private $idMaison;
        private $idStudioFK;
        private $superficieMaison;

        // Accesseurs et mutateurs

        public function getIdMaison() {
            return $this->idMaison;
        }
        public function setIdMaison($idMaison) {
            $this->idMaison = $idMaison;
        }
        public function getIdStudioFK() {
            return $this->idStudioFK;
        }
        public function setIdStudioFK($idStudioFK) {
            $this->idStudioFK = $idStudioFK;
        }
        public function getSuperficieMaison() {
            return $this->superficieMaison;
        }
        public function setSuperficieMaison($superficieMaison){
            $this->superficieMaison = $superficieMaison;
        }

        // Constructeur

        public function __construct($idMaison, $idStudioFK, $superficieMaison) {
            $this->idMaison = $idMaison;
            $this->idStudioFK = $idStudioFK;
            $this->superficieMaison = $superficieMaison;
        }
    }
?>