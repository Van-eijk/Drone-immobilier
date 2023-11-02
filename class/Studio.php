<?php 
    include_once("Chambre.php");

    class Studio extends Chambre{
        private $idStudio;
        private $idChambreFK;
        private $nbrePiece;
        private $nbreChambre;
        private $nbreCuisine;
        private $nbreSalon;
        private $nbreDouche;

        // accesseur et mutateur

        public function getIdStudio(){
            return $this->idStudio;
        }
        public function setIdStudio($idStudio){
            $this->idStudio = $idStudio;
        }
        public function getIdChambreFK(){
            return $this->idChambreFK;
        }
        public function setIdChambreFK($idChambreFK){
            $this->idChambreFK = $idChambreFK;
        }
        public function getNbrePiece(){
            return $this->nbrePiece;
        }
        public function setNbrePiece($nbrePiece){
            $this->nbrePiece = $nbrePiece;
        }
        public function getNbreCuisine(){
            return $this->nbreCuisine;
        }
        public function setNbreCuisine($nbreCuisine){
            $this->nbreCuisine = $nbreCuisine;
        }
        public function getNbreSalon(){
            return $this->nbreSalon;
        }
        public function setNbreSalon($nbreSalon){
            $this->nbreSalon = $nbreSalon;
        }
        public function getNbreChambre(){
            return $this->nbreChambre;
        }
        public function setNbreChambre($nbreChambre){
            $this->nbreChambre = $nbreChambre;
        }
        public function getNbreDouche(){
            return $this->nbreDouche;
        }
        public function setNbreDouche($nbreDouche){
            $this->nbreDouche = $nbreDouche;
        }

        //Constructeur

        public function __construct($idStudio, $idChambreFK, $nbrePiece, $nbreChambre, $nbreSalon, $nbreCuisine, $nbreDouche){
            $this->idStudio = $idStudio;
            $this->idChambreFK = $idChambreFK;
            $this->nbrePiece = $nbrePiece;
            $this->nbreChambre = $nbreChambre;
            $this->nbreSalon = $nbreSalon;
            $this->nbreCuisine = $nbreCuisine;
            $this->nbreDouche = $nbreDouche;
            
        }
    }
?>