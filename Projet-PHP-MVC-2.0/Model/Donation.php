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

        public function getIdUser(){return $this->idUser;}
        public function getIdPost(){return $this->idPost;}
        public function getStatut(){return $this->statut;}

        public function setIdUser($_idUser){
            $this->idUser = (int) $_idUser;
        }

        public function setIdPost($_idPost){
            $this->idPost = (int) $_idPost;
        }

        public function setStatut($_statut){
            if ($_statut == true) {
                $this->statut=$_statut;
            }
        }
    }