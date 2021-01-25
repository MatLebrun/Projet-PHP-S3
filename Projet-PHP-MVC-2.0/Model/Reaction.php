<?php    
    class Reaction extends Model {

        private $idUser;
        private $idPost;
        private $typeReac;
        

        public function __construct($idUser,$typeReac,$idPost)
        {
            $this->idUser=$idUser;
            $this->idPost=$idPost;
            $this->typeReac=$typeReac;
        }

        public function getIdUser(){return $this->idUser;}
        public function getIdPost(){return $this->idPost;}
        public function getTypeReac(){return $this->typeReac;}

        public function setIdUser($_idUser){
            $this->idUser = (int) $_idUser;
        }

        public function setIdPost($_idPost){
            $this->idPost = (int) $_idPost;
        }

        public function settypeReact($_typeReac){
            return 1;
        }

        public static function retreiveCuteReaction($idPost) {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM Reaction WHERE idPost = ? AND typeReac = 1');
            $requete->execute(array($idPost));

            $results = $requete->fetchAll();

            $listReaction = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                array_push($listReaction, new Reaction($results[$i]['idUser'], $results[$i]['idPost'], $results[$i]['typeReac']));
            }

            return $listReaction;
        }

        public static function retreiveTropStyleReaction($idPost) {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM Reaction WHERE idPost = ? AND typeReac = 2');
            $requete->execute(array($idPost));

            $results = $requete->fetchAll();

            $listReaction = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                array_push($listReaction, new Reaction($results[$i]['idUser'], $results[$i]['idPost'], $results[$i]['typeReac']));
            }

            return $listReaction;
        }

        public static function retreiveSwagReaction($idPost) {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM Reaction WHERE idPost = ? AND typeReac = 3');
            $requete->execute(array($idPost));

            $results = $requete->fetchAll();

            $listReaction = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                array_push($listReaction, new Reaction($results[$i]['idUser'], $results[$i]['idPost'], $results[$i]['typeReac']));
            }

            return $listReaction;
        }

        public static function retreiveLoveReaction($idPost) {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM Reaction WHERE idPost = ? AND typeReac = 4');
            $requete->execute(array($idPost));

            $results = $requete->fetchAll();

            $listReaction = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                array_push($listReaction, new Reaction($results[$i]['idUser'], $results[$i]['idPost'], $results[$i]['typeReac']));
            }

            return $listReaction;
        }
    }