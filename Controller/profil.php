<?php

    require_once __DIR__.'/../Model/User.php';

    session_start();


    if (empty($_SESSION['user'])) {
        header('location:/Controller/connexion.php');
        exit();
    }


    if (!empty($_POST)) {

        if (empty($_POST['submit'])) {
            header('location:/Controller/profil.php');
            exit();
        }

        if ($_POST['submit'] == 'editMail') {

            if (!empty($_POST['mail']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && !User::checkMail($_POST['mail'])) {
                $_SESSION['user']->setMail($_POST['mail']);
                header('location:/Controller/profil.php');
                exit();
            }
        }

        if ($_POST['submit'] == 'editPseudo') {

            if (!empty($_POST['pseudo']) && strlen($_POST['pseudo']) > 4 && strlen($_POST['pseudo']) < 20  &&  !User::checkCompte($_POST['pseudo'], '')) {
                $_SESSION['user']->setPseudo($_POST['pseudo']);
                header('location:/Controller/profil.php');
                exit();
            }
        
        }


        if ($_POST['submit'] == 'editPwd') {

            if (empty($_POST['pwd1']) || empty($_POST['pwd2']) || $_POST['pwd1'] != $_POST['pwd2']) {
                header('location:/Controller/profil.php');
                exit();
            }


            $_SESSION['user']->setPassword($_POST['pwd1']);
            header('location:/Controller/profil.php');
            exit();


        }





    }



    require_once __DIR__.'/../View/profil.php';









?>