<?php
    require_once __DIR__.'/../Model/User.php';
    require_once __DIR__.'/../Model/Reaction.php';
    require_once __DIR__.'/../Model/Post.php';
    session_start();

    if(isset($_GET['t'],$_GET['id'],$_SESSION['id']) AND !empty($_GET['t']) AND !empty($_GET['id']) AND !empty($_SESSION['id'])){
         $getid = (int) $_GET['id'];
         $gett= htmlspecialchars($_GET['t']);
         $sessionId = $_SESSION['id'];

         if(Reaction::checkIdPost($getid) == true){
            if($gett = 'love'){
                if(Reaction::checkReac($getid,$sessionId == true)){
                    Reaction::deleteReac($getid,$sessionId);
                }else{
                    Reaction::addReacLove($getid,$sessionId);
                }
            }elseif($gett = 'swag'){
                if(Reaction::checkReac($getid,$sessionId == true)){
                    Reaction::deleteReac($getid,$sessionId);
                }else{
                    Reaction::addReacSwag($getid,$sessionId);
                }
            }elseif($gett = 'trops'){
                if(Reaction::checkReac($getid,$sessionId == true)){
                    Reaction::deleteReac($getid,$sessionId);
                }else{
                    Reaction::addReacTropS($getid,$sessionId);
                }
            }elseif($gett = 'cute'){
                if(Reaction::checkReac($getid,$sessionId == true)){
                    Reaction::deleteReac($getid,$sessionId);
                }else{
                    Reaction::addReacCute($getid,$sessionId);
                }
            }
            header('Location: '. $_SERVER['HTTP_REFERER']);
            exit();
         }else{
            header('location:/Projet-PHP-MVC/404.php');
            exit();
         }
    } else{
        header('location:/Projet-PHP-MVC/404.php');
        exit();
    }