<?php
    require_once __DIR__.'/Model.php';

    class User extends Model{

        private $id;
        private $prenom;
        private $nom;
        private $mail;
        private $pseudo;
        private $password;
        private $role; 

        //constructeur
        public function __construct($id,$prenom,$nom,$mail,$pseudo,$password,$role)
        {
            $this->id=$id;
            $this->prenom=$prenom;
            $this->nom= $nom;
            $this->mail=$mail;
            $this->pseudo=$pseudo;
            $this->password=$password;
            $this->role=$role;
        }

        

        /*
        *
        * Ajoute un User a la base de donnée
        *
        */
        public static function addUser($prenom,$nom,$pseudo,$mail,$password){
            $DB = static::DB();
            $requete = $DB->prepare('INSERT INTO user(prenom,nom, email, pseudo, motdepasse) VALUES(?,?,?,?,?)');
            $requete->execute(array($prenom,$nom,$mail,$pseudo,password_hash($password, PASSWORD_BCRYPT)));

        }

        public static function addIdUser(){
            
        }

        /*
        *
        * Vérification lors de linscription si un pseudo ou un mail est déjà existant
        *
        */
        public static function checkCompte($pseudo,$mail){
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM user WHERE pseudo = ? or email = ? ');
            $requete->execute(array($pseudo,$mail));

            $results = $requete->fetchAll();

            if(sizeof($results) == 0){
                return false;
            }
            return true;

        }

        /**
         * Vérification si le pseudo/mail et le mot de passe
         */

        public static function checkConnexion($connect,$password){
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * from user WHERE (email = ? or pseudo = ?)');
            $requete->execute(array($connect,$connect));

            $results=$requete->fetchAll();

            if(sizeof($results) == 0){
                return false;
            }
            
            if(!password_verify($password, $results[0]['password'] )){return false;}

            return new User($results[0]['id'],$results[0]['prenom'],$results[0]['nom'],$results[0]['mail'],$results[0]['pseudo'],$results[0]['password'],$results[0]['role']); 
            
        }

        /**
         * vérifie si l'email existe bien
         */
        public static function checkMail($mail){
            $DB = static::DB();
            $requete = $DB->prepare('SELECT idUser FROM user WHERE email=?');
            $requete->execute(array($mail));

            $results = $requete->fetchAll();

            if(sizeof($results)==0){return false;}

            return true;
        }

        /**
         * Retourne le pseudo de la personne
         */
        public static function getNamePseudo ($mail){
            $DB = static::DB();
            $rqt = $DB->prepare('SELECT idUser,pseudo FROM user WHERE email = ?');
            $rqt->execute(array($mail));

            $results=$rqt->fetch();
            return $results;


        }

        public static function changePassword($password,$mail){
            $DB = static::DB();
            $rqt = $DB->prepare('UPDATE user SET motdepasse = ? WHERE email = ?');
            $rqt->execute(array($password,$mail));

            
        }


        public static function getUserId($id){
            $DB = static::DB();
            $rqt  = $DB->prepare('SELECT * FROM user WHERE idUser = ?');
            $rqt->execute(array($id));        
            
            $results = $rqt->fetch();
            return $results;
        }

        public static function getAllUsers() {
            $DB = static::DB();
            $rqt = $DB->prepare('SELECT * FROM user');
            $rqt->execute();

            $results = $rqt->fetchAll();

            $listUsers = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                array_push($listUsers, new User($results[$i]['idUser'],
                                                $results[$i]['prenom'],
                                                $results[$i]['nom'],
                                                $results[$i]['email'],
                                                $results[$i]['pseudo'],
                                                $results[$i]['motdepasse'],
                                                $results[$i]['role']));
            }

            return $listUsers;
        }

        public static function deleteUser($userId) {
            $DB = static::DB();
            $rqt = $DB->prepare('DELETE FROM user WHERE idUser = ? AND role != 1');
            $rqt->execute(array($userId));
        }







        /**
         * GETTER/SETTER
         */

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getPrenom(){
            return $this->prenom;
        }
    
        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }
    
        public function getNom(){
            return $this->nom;
        }
    
        public function setNom($nom){
            $this->nom = $nom;
        }
    
        public function getMail(){
            return $this->mail;
        }
    
        public function setMail($mail){
            $this->mail = $mail;
        }
    
        public function getPseudo(){
            return $this->pseudo;
        }
    
        public function setPseudo($pseudo){
            $this->pseudo = $pseudo;
        }
    
        public function getPassword(){
            return $this->password;
        }
    
        public function setPassword($password){
            $this->password = $password;
        }
    
        public function getRole(){
            return $this->role;
        }
    
        public function setRole($role){
            $this->role = $role;
        }


    }