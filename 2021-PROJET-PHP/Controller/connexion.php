<?php
    require_once __DIR__.'/../Model/User.php';
    session_start();

    if(isset($_POST['submit'])){
        if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
            $pseudoconnext = htmlspecialchars($_POST['pseudo']);
            $passwordconnect = $_POST['password'];
            $user = User::checkConnexion($pseudoconnext,$passwordconnect);
                if(!$user){
                    
                    
                    $erreur = "Votre mot de passe ou email n'est pas bon !";
                }
                else{
                    $_SESSION['user'] = $user;
                    header("location: /Projet-PHP-MVC/Controller/profil.php");
                    exit();
                }
        }else{$erreur = "Veuillez remplir les deux champs";}
    }
    if(isset($erreur)){echo $erreur;}

        


