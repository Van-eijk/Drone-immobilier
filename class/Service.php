<?php 
    class Service{
        // les attributs
        private $idService;
        private $referenceService;
        private $idAdminService;
        private $titreService;
        private $descriptionService;
        private $lienPhotoService;
        private $dateTimeService;
        private $categorieService;

        // Les accesseurs et mutateurs

        public function getIdService(){
            return $this->idService;
        }
        public function setIdService($idService){
            $this->idService = $idService;
        }

        public function getReferenceService(){
            return $this->referenceService;
        }
        public function setReferenceService($referenceService){
            $this->referenceService = $referenceService;
        }
        public function getIdAdminService(){
            return $this->idAdminService;
        }
        public function setIdAdminService($idAdminService){
            $this->idAdminService = $idAdminService;
        }
        public function getTitreService(){
            return $this->titreService;
        }
        public function setTitreService($titreService){
            $this->titreService = $titreService;
        }
        public function getDescriptionService(){
            return $this->descriptionService;
        }
        public function setDescriptionService($descriptionService){
            $this->descriptionService = $descriptionService;
        }
        public function getlienPhotoService(){
            return $this->lienPhotoService;
        }
        public function setlienPhotoService($lienPhotoService){
            $this->lienPhotoService = $lienPhotoService;
        }
        public function getCategorieService(){
            return $this->categorieService;
        }
        public function setCategorieService($categorieService){
            $this->categorieService = $categorieService;
        }
        public function getDateTimeService(){
            return $this->dateTimeService;
        }
        public function setDateTimeService($dateTimeService){
            $this->dateTimeService = $dateTimeService;
        }

        // Le constructeur

        public function __construct($idService, $referenceService, $idAdminService, $titreService, $descriptionService, $lienPhotoService, $dateTimeService, $categorieService){
            $this->idService = $idService;
            $this->referenceService = $referenceService;
            $this->idAdminService = $idAdminService;
            $this->titreService = $titreService;
            $this->descriptionService = $descriptionService;
            $this->lienPhotoService = $lienPhotoService;
            $this->dateTimeService = $dateTimeService;
            $this->categorieService = $categorieService;
 
        }
    }
?>