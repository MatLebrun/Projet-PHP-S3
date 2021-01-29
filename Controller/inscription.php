<?php
        require_once __DIR__.'/../Model/User.php';
        session_start();
    

    if(isset($_POST['form-submit'])){
        if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['pseudo']) && !empty($_POST['mail'])  && !empty($_POST['password']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                    if(!User::checkCompte('pseudo','mail')){
                        User::addUser($_POST['prenom'], $_POST['nom'],$_POST['pseudo'], $_POST['mail'],$_POST['password']);
                        header('location:/Controller/connexion.php');
                        exit();
                    }
                    else{
                        $_SESSION['erreur'] = "Votre pseudo existe déjà!";    
                    }
                
            
        }
        else{
            $_SESSION['erreur'] = "Vous avez mal remplis les champs!";
        }
    }
    
    require_once __DIR__."/../View/ViewInscription.php";


    if(isset($erreur)){echo $erreur;}