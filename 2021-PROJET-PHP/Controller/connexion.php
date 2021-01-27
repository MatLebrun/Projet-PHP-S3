<?php
    require_once __DIR__.'/../Model/User.php';

    if(isset($_POST('submit'))){
        if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
            if(!User::checkConnexion('pseudo','password')){
                header('location: /Projet-PHP-MVC/Controller/i.php');
            }
            else{
                $erreur = "Votre mot de passe ou email n'est pas bon !";
            }
        }
    }
    if(isset($erreur)){echo $erreur;}

        


