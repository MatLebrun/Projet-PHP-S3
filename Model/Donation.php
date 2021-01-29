<?php
    require_once __DIR__.'/Model.php';


    class Donation {

        private $idUser;
        private $idPost;
        private $statut;

        public function __construct($idUser,$statut,$idPost)
        {
            $this->idUser=$idUser;
            $this->idPost=$idPost;
            $this->statut=$statut;
        }

        public function getIdUser(){
            return $this->idUser;
        }
        
        public function setIdUser($idUser){
             $this->idUser = $idUser;
        }
        
        public function getIdPost(){
            return $this->idPost;
        }
        
        public function setIdPost($idPost){
            $this->idPost = $idPost;
        }
        
        public function getStatut(){
            return $this->statut;
        }
        
        public function setStatut($statut){
            $this->statut = $statut;
        }
    }
