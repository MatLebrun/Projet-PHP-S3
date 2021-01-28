<?php

    require_once __DIR__."/../Model/Post.php";
    require_once __DIR__."/../Model/Tag.php";
    require_once __DIR__.'/../Model/User.php';
    session_start();


    if (!empty($_POST)) {
        if (empty($_POST['message'])) {
            // erreur message vide
            echo 'pb';
            die();
        }

        $fileNameUp = '';
        if (isset($_FILES['photo']) && !empty($_FILES['photo']['name'])) {
            $extensionValide = array('jpg' , 'jpeg', 'png');
            $file_ext=strtolower(pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION));

            // Nom de fichier aléatoire
            $filename   = uniqid() . "-" . time();
            
            if(in_array($file_ext,$extensionValide)){
                $chemin = __DIR__."/../Public/photoVanes/". $filename.".". $file_ext;
                $resultat = move_uploaded_file($_FILES['photo']['tmp_name'] , $chemin);

                if (!$resultat) {
                    $_SESSION['erreur'] = "Impossible d'upload. Veuillez réessayer plus tard.";
                    header('location:/');
                    exit();
                }  else {
                    $fileNameUp = $filename.".". $file_ext;
                }
            } else{
                $$_SESSION['erreur'] = "Vous fichier doit être en jpg , jpeg ou png";
            }
        } 
        Post::addPost($_POST['message'], $fileNameUp);
    }




    require_once __DIR__.'/../View/CreatePost.php';

    