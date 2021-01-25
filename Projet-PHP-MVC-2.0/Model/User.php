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

        public static function adduser ($prenom, $nom, $mail, $pseudo, $password){
            $DB = static::DB();
            $requete = $DB->prepare('INSERT INTO user(nom, prenom, pseudo, email, motdepasse) VALUES(?,?,?,?,?)');
            $requete->execute(array($prenom, $nom,$mail,$pseudo,$password));

            $results = $requete->fetchAll();
            return $results
        }

        public static function checkPseudo($pseudo){
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM user WHERE ')

        }













       























        //liste getter
        public function id(){return $this->id;}
        public function prenom(){return $this->prenom;}
        public function nom(){ return $this->nom;}
        public function mail(){return $this->mail;}
        public function pseudo(){return $this->pseudo;}
        public function password(){return $this->password;}
        public function role(){return $this->role;}


        
        //liste setter
        public function setId($_id){
            $this->id = (int) $_id;
        }

        public function setPrenom($_prenom){
            if(is_string($_prenom)&& strlen(50)){
                $this->prenom=$_prenom;
            }
        }
        
        public function setNom($_nom){
            if(is_string($_nom)&& strlen(50)){
                $this->nom=$_nom;
            }
        }

        public function setMail($_mail){
            if(filter_var($_mail, FILTER_VALIDATE_EMAIL)){
                $this->mail=$_mail;
            }
        }

        public function setPseudo($_pseudo){
            if(is_string($_pseudo)&& strlen(50)){
                $this->pseudo=$_pseudo;
            }
        }
        
        public function setPassword($_password){
            $this->password=$_password;
        }

        public function setRole ($_role){
            $this->role=$_role;
        }


    }