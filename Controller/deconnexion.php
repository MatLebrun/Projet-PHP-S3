<?php

require_once __DIR__.'/../Model/User.php';

session_start();


session_destroy();


header('location:/2021-PROJET-PHP/Controller/accueil.php');



?>
