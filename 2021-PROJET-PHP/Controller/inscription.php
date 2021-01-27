<?php
    require_once __DIR__.'/../Model/User.php';
    

    if(isset($_POST['form-submit'])){
        if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['pseudo']) && !empty($_POST['mail'])  && !empty($_POST['password']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
            if(!User::checkCompte('pseudo','mail')){
                User::addUser('prenom', 'nom', 'mail','pseudo','password');
            }
            else{
                $erreur = "Votre pseudo existe déjà!";    
            }
        }
        else{
            $erreur = "Vous avez mal remplie les champs!";
        }
    }
    
    


    if(isset($erreur)){echo $erreur;}



