<?php

    require_once __DIR__."/../Model/Post.php";
    require_once __DIR__."/../Model/Tag.php";
/*
    switch(isset($_POST['mes_submit'])){
        case(!empty($_POST['message']) && empty($_POST['photo']) && empty($_POST['tag'])):
            $message = htmlspecialchars($_POST['message']);
            Post::addMessagePost($message);
            break;
        
        case(empty($_POST['message']) && !empty($_POST['photo']) && empty($_POST['tag'])):
            $extensionValide = array('jpg' , 'jpeg', 'png');
            $extensionUpload = strtolower(substr(strchr( $_files['photo']['name'],'.'),1));
             if(in_array($extensionUpload,$extensionValide)){
                $chemin = "/../Public/photoVanes/". $_FILES['photo']['name'].".". $extensionUpload;
                $resultat = move_uploaded_file($_FILES['photo']['tmp_name'] , $chemin);
                Post::addPhotoPost($_files['photo']['name']);
             }else{
                $erreur = "Vous fichier doit être en jpg , jpeg ou png";
             }
             break;
        
        case()
    }
*/


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
                    $erreur = "Impossible d'upload. Veuillez réessayer plus tard.";
                    header('location:/');
                    exit();
                }  else {
                    $fileNameUp = $filename.".". $file_ext;
                }
            } else{
                $erreur = "Vous fichier doit être en jpg , jpeg ou png";
            }
        } 
        Post::addPost($_POST['message'], $fileNameUp);
    }




    require_once __DIR__.'/../View/CreatePost.php';

    if(isset($erreur)){echo $erreur;}