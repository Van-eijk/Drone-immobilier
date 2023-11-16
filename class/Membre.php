<?php 
    include_once("Visiteur.php");
    class Membre extends Visteur {
        private $idMembre ;
        private $idVisteurFK;
        private $nomMembre;
        private $prenomMembre;
        private $phoneMembre;
        private $emailMembre;
        private $paysMembre;
        private $villeMembre;
        private $mdpMembre;
        

        // Accesseurs et mutateurs

        public function getIdMembre() {
            return $this->idMembre;
        }
        public function setIdMembre($idMembre) {
            $this->idMembre = $idMembre;
        }
        public function getIdVisteurFK() {
            return $this->idVisteurFK;
        }
        public function setIdVisteurFK($idVisteurFK) {
            $this->idVisteurFK = $idVisteurFK;
        }
        public function getNomMembre() {
            return $this->nomMembre;
        }
        public function setNomMembre($nomMembre) {
            $this->nomMembre = $nomMembre;
        }
        public function getPrenomMembre() {
            return $this->prenomMembre;
        }
        public function setPrenomMembre($prenomMembre) {
            $this->prenomMembre = $prenomMembre;
        }
        public function getPhoneMembre() {
            return $this->phoneMembre;
        }
        public function setPhoneMembre($phoneMembre) {
            $this->phoneMembre = $phoneMembre;
        }
        public function getEmailMembre() {
            return $this->emailMembre;
        }
        public function setEmailMembre($emailMembre) {
            $this->emailMembre = $emailMembre;
        }
        public function getPaysMembre() {
            return $this->paysMembre;
        }
        public function setPaysMembre($paysMembre) {
            $this->paysMembre = $paysMembre;
        }
        public function getVilleMembre() {
            return $this->villeMembre;
        }
        public function setVilleMembre($villeMembre) {
            $this->villeMembre = $villeMembre;
        }
        public function getMdpMembre() {
            return $this->mdpMembre;
        }
        public function setMdpMembre($mdpMembre) {
            $this->mdpMembre = $mdpMembre;
        }


        // Constructeur

        public function __construct($idMembre, $idVisiteurFK, $nomMembre, $prenomMembre, $phoneMembre, $emailMembre, $paysMembre, $villeMembre, $mdpMembre) {
            $this->idMembre = $idMembre;
            $this->$idVisiteurFK = $idVisiteurFK;
            $this->nomMembre = $nomMembre;
            $this->prenomMembre = $prenomMembre;
            $this->phoneMembre = $phoneMembre;
            $this->emailMembre = $emailMembre;
            $this->paysMembre = $paysMembre;
            $this->villeMembre = $villeMembre;
            $this->mdpMembre = $mdpMembre;

        }

        // Les méthodes

        public function mettreFavoris() {

        }

        public function imprimerPublication(){

        }

        public function connexionEspaceMembre(){
            
        }
    }
?>