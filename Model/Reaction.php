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
    
        public function getTypeReac(){
            return $this->typeReac;
        }
    
        public function setTypeReac($typeReac){
            $this->typeReac = $typeReac;
        }

        public static function retreiveCuteReaction($idPost) {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM reaction WHERE idPost = ? AND typeReac = 1');
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
            $requete = $DB->prepare('SELECT * FROM reaction WHERE idPost = ? AND typeReac = 2');
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
            $requete = $DB->prepare('SELECT * FROM reaction WHERE idPost = ? AND typeReac = 3');
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
            $requete = $DB->prepare('SELECT * FROM reaction WHERE idPost = ? AND typeReac = 4');
            $requete->execute(array($idPost));

            $results = $requete->fetchAll();

            $listReaction = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                array_push($listReaction, new Reaction($results[$i]['idUser'], $results[$i]['idPost'], $results[$i]['typeReac']));
            }

            return $listReaction;
        }

        public static function checkIdPost($idPost){
            $DB = static::DB();
            $rqt = $DB->prepare('SELECT idPost from post WHERE idPost = ?');
            $rqt->execute(array($idPost));

            $results = $rqt->rowCount();
            
            if($results == 1){
                return true;
            }
            return false;
        }

        public static function addReacLove($idPost,$idUser){
            $DB = static::DB();
            $rqt = $DB->prepare('INSERT INTO reaction (idPost, idUser, typeReac) VALUES (?,?,4)');
            $rqt->execute(array($idPost,$idUser));
        }
        public static function addReacCute($idPost,$idUser){
            $DB = static::DB();
            $rqt = $DB->prepare('INSERT INTO reaction (idPost, idUser, typeReac) VALUES (?,?,1)');
            $rqt->execute(array($idPost,$idUser));
        }
        public static function addReacSwag($idPost,$idUser){
            $DB = static::DB();
            $rqt = $DB->prepare('INSERT INTO reaction (idPost, idUser, typeReac) VALUES (?,?,3)');
            $rqt->execute(array($idPost,$idUser));
        }
        public static function addReacTropS($idPost,$idUser){
            $DB = static::DB();
            $rqt = $DB->prepare('INSERT INTO reaction (idPost, idUser, typeReac) VALUES (?,?,2)');
            $rqt->execute(array($idPost,$idUser));
        }

        public static function checkReac($idPost,$idUser){
            $DB = static::DB();
            $rqt = $DB->prepare('SELECT idUser FROM reaction WHERE idPost = ? AND idUser = ?');
            $rqt->execute(array($idPost,$idUser));

            $results = $rqt->rowCount();
            if($results > 0){
                return true;
            }
            return false;
        }

        public static function deleteReac($idPost,$idUser){
            $DB = static::DB();
            $rqt = $DB->prepare('DELETE FROM reaction  WHERE idPost = ? AND idUser = ? ');
            $rqt->execute(array($idPost,$idUser));
        }
    }