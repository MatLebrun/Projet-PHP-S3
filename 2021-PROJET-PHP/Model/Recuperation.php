<?php

    require_once __DIR__.'/Model.php';

    class Recuperation extends Model{

        private $id;
        private $mail;
        private $code;
        private $confirme;


        public function __construct($id,$mail,$code)
        {
            $this->id=$id;
            $this->mail=$mail;
            $this->code=$code;
        }

        

        /**
         * Regarde si le mail de recup existe sinon 
         * Si oui le met a jour
         * Si non l'ajoute
         */
        public static function mailRecup($mail,$code){
            $DB = static::DB();
            $rqt = $DB->prepare('SELECT id FROM recuperation WHERE mail = ?');
            $rqt->execute(array($mail));
            $results=$rqt->rowCount();

            if($results == 1){
                $rqt1 = $DB->prepare('UPDATE recuperation SET code =? WHERE mail = ?');
                $rqt1->execute(array($code,$mail));
            }
            else{
                $rqt2 = $DB->prepare('INSERT INTO recuperation(mail,code) VALUES(?,?)');
                $rqt2->execute(array($mail,$code));
            }
        }

        public static function verifCode($mail,$code){
            $DB = static::DB();
            $rqt = $DB->prepare('SELECT id FROM recuperation WHERE mail =? AND code = ?');
            $rqt->execute(array($mail,$code));

            $results=$rqt->rowCount();

            if($results==1){
                return true;
                
            }

            return false;
        }

        public static function verifConfirm($mail){
            $DB = static::DB();
            $rqt = $DB->prepare('SELECT confirme FROM recuperation WHERE mail =? ');
            $rqt->execute(array($mail));
            $results=$rqt->fetch();
            $results=$results['confirme'];

            if($results == 1){
                return true;
            }

            return false;
        }   

        public static function upDbWithRecup($mail){
            $DB = static::DB();
            $rqt = $DB->prepare('UPDATE recuperation SET confirme = 1 WHERE mail = ?');
            $rqt->execute(array($mail));
        }

        public static function delMail($mail){
            $DB = static::DB();
            $rqt= $DB->prepare('DELETE FROM recuperation WHERE mail = ?');
            $rqt->execute(array($mail));
        }




        public function getMail(){
            return $this->mail;
        }
    
        public function setMail($mail){
            $this->mail = $mail;
        }
    
        public function getCode(){
            return $this->code;
        }
    
        public function setCode($code){
            $this->code = $code;
        }
        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }

        public function getConfirme(){
            return $this->confirme;
        }
    
        public function setConfirme($confirme){
            $this->confirme = $confirme;
        }

    }