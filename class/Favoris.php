<?php 
    class Favoris{
        // Les attributs
        private $idFavoris;
        private $referenceFavorisBien;
        private $idFavorisMembre;
        private $dateTimeFavoris;


        // Les accesseurs & les mutateurs

        public function getIdFavoris(){
            return $this->idFavoris;
        }

        public function setIdFavoris($idFavoris){
            $this->idFavoris = $idFavoris;
        }

        public function getReferenceFavorisBien(){
            return $this->referenceFavorisBien;
        }

        public function setReferenceFavorisBien($referenceFavorisBien){
            $this->referenceFavorisBien = $referenceFavorisBien;
        }

        public function getIdFavorisMembre(){
            return $this->idFavorisMembre;
        }

        public function setIdFavorisMembre($idFavorisMembre){
            $this->idFavorisMembre=$idFavorisMembre;
        }

        public function getDateTimeFavoris(){
            return $this->dateTimeFavoris;
        }

        public function setDateTimeFavoris($dateTimeFavoris){
            $this->dateTimeFavoris = $dateTimeFavoris;
        }


    }
?>