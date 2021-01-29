<?php
    require_once __DIR__.'/../Model/User.php';
    session_start();


    if (empty($_SESSION['user']) || $_SESSION['user']->getRole() !=1) {
        header('location:/Controller/accueil.php');
        exit();
    }


    $listUsers = User::getAllUsers();


    if (!empty($_POST)) {
        if (empty($_POST['userId'])) {
            header('location:/Controller/admin.php');
            exit();
        }


        User::deleteUser($_POST['userId']);
        header('location:/Controller/admin.php');
        exit();
    }



    require_once __DIR__.'/../View/admin.php';



?>