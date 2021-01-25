<?php
    require_once __DIR__.'/Model.php';
    class Tag extends Model{

        private $id;
        private $value;

        public function __construct($id,$value)
        {
            $this->id=$id;
            $this->value=$value;
        }

        public function getId(){return $this->id;}
        public function getValue(){return $this->value;}

        public function setId($_id){
            $this->id = (int) $_id;
        }

        public function setValue($_value){
            if(is_string($_value)){
                $this->value=$_value;
            }
        }

        public static function retreiveTag($idPost) {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM tag WHERE idPost = ?');
            $requete->execute(array($idPost));

            $results = $requete->fetchAll();

            $listTag = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                array_push($listTag, new Tag($results[$i]['idTag'], $results[$i]['value']));
            }

            return $listTag;
        }
    }