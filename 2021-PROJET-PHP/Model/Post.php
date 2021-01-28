<?php
require_once __DIR__.'/Model.php';
require_once __DIR__.'/Reaction.php';
require_once __DIR__.'/Tag.php';


    class Post extends Model {

        private $id;
        private $message;
        private $image;
        private $maxReact;
        private $listCute = array();
        private $listSwag = array();
        private $listTropS = array();
        private $listLove = array();
        private $listTag = array();


        public function __construct($id,$message,$image,$maxReact)
        {
            $this->id=$id;
            $this->message=$message;
            $this->image= $image;
            $this->maxReact=$maxReact;
        }


        public static function retreivePost($postId) {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM POST WHERE idPost = ?');
            $requete->execute(array($postId));
            $result = $requete->fetchAll();

            if (sizeof($result) == 0) {
                return false;
            }

            $post = new Post($result[0]['idPost'], $result[0]['message'], $result[0]['image'], $result[0]['maxReact']);
            
            $post->setListCute(Reaction::retreiveCuteReaction($postId));
            $post->setListTropS(Reaction::retreiveTropStyleReaction($postId));
            $post->setListSwag(Reaction::retreiveSwagReaction($postId));
            $post->setListLove(Reaction::retreiveLoveReaction($postId));
            $post->setListTag(Tag::retreiveTag($postId));
            
            return $post;
        }

        public static function retreivePosts() {
            $DB = static::DB();
            $requete = $DB->prepare('SELECT * FROM POST order by idPost DESC LIMIT 2');
            $requete->execute();

            $results = $requete->fetchAll();


            $listPosts = array();
            for ($i = 0; $i < sizeof($results); ++$i) {
                $post = new Post($results[$i]['idPost'], $results[$i]['message'], $results[$i]['image'], $results[$i]['maxReact']);
        
                $post->setListCute(Reaction::retreiveCuteReaction($results[$i]['idPost']));
                $post->setListTropS(Reaction::retreiveTropStyleReaction($results[$i]['idPost']));
                $post->setListSwag(Reaction::retreiveSwagReaction($results[$i]['idPost']));
                $post->setListLove(Reaction::retreiveLoveReaction($results[$i]['idPost']));
                $post->setListTag(Tag::retreiveTag($results[$i]['idPost']));

                array_push($listPosts, $post);
            }

            return $listPosts;
        }

        public static function addPost($message,$image){
            $DB = static::DB();
            $rqt = $DB->prepare('INSERT INTO `post` (`idPost`, `message`, `image`, `maxReact`) VALUES (NULL, ?, ?, ?)');
            $test = $rqt->execute(array($message,$image, rand(1,7)));
            var_dump($test);
        }

        

        /**
         * 
         *  Getters / setters
         * 
         */

        public function getId(){
            return $this->id;
            }
    
            public function setId($id){
                $this->id = $id;
            }
    
            public function getMessage(){
                return $this->message;
            }
    
            public function setMessage($message){
                $this->message = $message;
            }
    
            public function getImage(){
                return $this->image;
            }
    
            public function setImage($image){
                $this->image = $image;
            }
    
            public function getMaxReact(){
                return $this->maxReact;
            }
    
            public function setMaxReact($maxReact){
                $this->maxReact = $maxReact;
            }
    
    
            public function getListCute(){
                return $this->listCute;
            }
        
            public function setListCute($listCute){
                $this->listCute = $listCute;
            }
        
            public function getListSwag(){
                return $this->listSwag;
            }
        
            public function setListSwag($listSwag){
                $this->listSwag = $listSwag;
            }
        
            public function getListTropS(){
                return $this->listTropS;
            }
        
            public function setListTropS($listTropS){
                $this->listTropS = $listTropS;
            }
        
            public function getListLove(){
                return $this->listLove;
            }
        
            public function setListLove($listLove){
                $this->listLove = $listLove;
            }
        
            public function getListTag(){
                return $this->listTag;
            }
        
            public function setListTag($listTag){
                $this->listTag = $listTag;
            }
        
    }