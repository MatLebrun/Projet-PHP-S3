<?php

require_once __DIR__.'/../Model/User.php';

session_start();


session_destroy();


header('location:/Controller/accueil.php');



?>
