<?php
    require_once __DIR__.'/Model.php';
    class Tag extends Model{

        private $idTag;
        private $idPost;
        private $value;

        

        public static function retreiveTag($idPost) {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM tag WHERE idPost = ?');
            $requete->execute(array($idPost));

            $results = $requete->fetchAll();

            $listTag = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                array_push($listTag, new Tag($results[$i]['idTag'], $results[$i]['value'],$results[$i]['idPost']));
            }

            return $listTag;
        }
        public function __construct($idTag,$idPost,$value)
        {
            $this->id=$idTag;
            $this->id=$idPost;
            $this->value=$value;
        }

        public function getIdTag(){
            return $this->idTag;
        }
    
        public function setIdTag($idTag){
            $this->id = $idTag;
        }

        public function getIdPost(){
            return $this->idPost;
        }
    
        public function setIdPost($idPost){
            $this->id = $idPost;
        }
    
        public function getValue(){
            return $this->value;
        }
    
        public function setValue($value){
            $this->value = $value;
        }
    }