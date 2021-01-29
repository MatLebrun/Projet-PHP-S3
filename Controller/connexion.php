<?php
    require_once __DIR__.'/../Model/User.php';
    session_start();

    if(!empty($_POST)){
        if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
            $pseudoconnext = htmlspecialchars($_POST['pseudo']);
            $passwordconnect = $_POST['password'];
            $user = User::checkConnexion($pseudoconnext,$passwordconnect);
                if(!$user){
                    $_SESSION['erreur'] = "Votre mot de passe ou email n'est pas bon !";
                }
                else{
                    $_SESSION['user'] = $user;
                    header("location:/Controller/profil.php");
                    exit();
                    
                }
        }else{$_SESSION['erreur'] = "Veuillez remplir les deux champs";}
    }
    require_once __DIR__.'/../View/ViewConnexion.php';
    

   

        


